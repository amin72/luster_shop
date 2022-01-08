<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Page;
use Cart;


class CartController extends Controller
{
    public function index() {
        $items = Cart::getContent();
        return view('cart.index', ['items' => $items]);
    }

    
    public function store(Request $request) {
        $request->validate([
            'id' => 'required',
            'name' => 'required|string|max:60',
            'price' => 'required|integer',
            'quantity' => 'required|integer',
        ]);

        $product = Product::findOrFail($request->id);

        Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => [],
            'associatedModel' => $product
        ]);
    
        return redirect(route('cart.index'))->with('success', 'محصول به سبد خرید افزوده شد.');
    }

    
    public function update($id, $action) {
        if ($action === 'increase') {
            $quantity = 1;
        } else if ($action === 'decrease') {
            $quantity = -1;

            // remove item if its quantity is already 1
            if (Cart::get($id)->quantity === 1) {
                if (Cart::remove($id)) {
                    return back()->with('success', 'محصول از سبد حذف شد.');
                } else {
                    return back()->with('error', 'خطا در حذف محصول اتفاق افتاد.');
                }
            }
        }

        if (Cart::update($id, ['quantity' => $quantity])) {
            return back()->with('success', 'تعداد محصول بروز رسانی شد.');
        } else {
            return back()->with('error', 'خطایی در بروز رسانی تعداد محصول اتفاق افتاد.');
        }
    }

    
    public function destroy($id) {
        if (Cart::remove($id)) {
            return back()->with('success', 'محصول از سبد حذف شد.');
        } else {
            return back()->with('error', 'خطا در حذف محصول اتفاق افتاد.');
        }
    }
}