<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Page;
use App\Models\Attribute;
use App\Models\AttributeProduct;
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
            'quantity' => 'required|integer',
        ]);

        $product = Product::findOrFail($request->id);
        $total_price = $product->price;
        $attribute_products = [];

        foreach ($request->except(['id', '_token', 'name', 'price', 'quantity']) as $name => $value) {
            $attribute = Attribute::where('name', $name)->get();
            $attribute_product = AttributeProduct::where('id', $value)->first();
            if ($attribute_product) {
                array_push($attribute_products, $attribute_product);
                $total_price += $attribute_product->price;
            }
        }

        Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $total_price,
            'quantity' => $request->quantity,
            'attributes' => $attribute_products,
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