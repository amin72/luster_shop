<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Shetabit\Multipay\Invoice;
use Shetabit\Payment\Facade\Payment;
use Shetabit\Multipay\Exceptions\InvalidPaymentException;
use App\Models\ShoppingCart;
use App\Models\PurchasedProduct;
use Cart;
use Auth;


class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        if (!Auth::user()) {
            return redirect(route('login'))->with('info', 'قبلا از ادامه باید وارد سایت شوید.');
        }

        if (Cart::isEmpty()) {
            return redirect(route('cart.index'));
        }

        if (! Auth::user()->is_ready_to_purchase()) {
            \Session::flash('info', 'قبل از ادامه خرید اطلاعات کاربری خود را در صفحه داشبورد کامل کنید.');
        }

        return view('checkout.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        if (! Auth::user()->is_ready_to_purchase()) {
            return redirect(route('dashboard.index'))->with('info', 'قبل از ادامه خرید اطلاعات کاربری خود را در قسمت ویرایش مشخصات کامل کنید.');
        }

        return Payment::callbackUrl(route('checkout.verify'))->purchase(
            (new Invoice)->amount((int) Cart::getTotal()), 
            function($driver, $transactionId) {
                session(['transactionId' => $transactionId]);
            }
        )->pay()->render();
    }


    public function verify(Request $request) {
        try {
            $transactionId = session()->get('transactionId');
            
            $receipt = Payment::amount((int) Cart::getTotal())
                ->transactionId($transactionId)->verify();
            
            // You can show payment referenceId to the user.
            // echo $receipt->getReferenceId();
            return redirect(route('checkout.payment_done'));

        } catch (InvalidPaymentException $exception) {
            return redirect(route('checkout.payment_canceled'));
        }
    }

    
    public function payment_done(Request $request) {
        // if user accessed this page only by entering url
        if (! session()->get('transactionId')) {
            return redirect(route('pages.index'));
        }
        
        // move cart from session to model
        $shopping_cart = ShoppingCart::create([
            'user_id' => Auth::user()->id,
            'total_price' => Cart::getTotal(),
            'purchased' => true
        ]);
        
        
        foreach (Cart::getContent() as $item) {
            $purchased_product = new PurchasedProduct([
                'product_id' => $item->id,
                'name' => $item->name,
                'price' => $item->price,
                'quantity' => $item->quantity,
            ]);
            $shopping_cart->products()->save($purchased_product);
        }
        $shopping_cart->save();
        
        // TODO:
        // send sms notification to admin
        
        // clear cart
        Cart::clear();
        session()->forget('transactionId');
        return view('checkout.payment_done')->with('cart', $shopping_cart);
    }


    public function payment_canceled(Request $request) {
        return view('checkout.payment_canceled');
    }
}