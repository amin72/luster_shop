<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\MenuCategory;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $menu = MenuCategory::where('slug', $request->menu)->first();
        $category = Category::where('slug', $request->category)->first();
        $products = Product::where('published', true);
        
        $categories = $menu ? $categories = $menu->categories : null;

        if ($category) {
            $products = $category->products();
        } else if ($menu) {
            $products = $menu->products();
        }

        return view('products.index', [
            'products' => $products->paginate(24),
            'menu' => $menu,
            'selected_category' => $category,
            'categories' => $categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('products.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function getPrice(Request $request, $slug) {
        $product = Product::where('slug', $slug)->firstOrFail();
        $attributes = $request->query('attributes');
        // return $attributes;
        $extra_price = 0;

        foreach ($product->attributes->all() as $attribute) {
            foreach ($attributes as $selected_attribute) {
                if ($selected_attribute["id"] == $attribute->pivot->id) {
                    $extra_price += $attribute->pivot->price;
                }
            }
        }

        return $product->price + $extra_price;
    }
}
