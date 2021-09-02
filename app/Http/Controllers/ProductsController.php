<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $category = Category::where('slug', $request->category)->first();
        $sub_category = Category::where('slug', $request->sub_category)->first();
        $products = Product::where('published', true);
        $sub_categories = null;

        if ($category) {
            $sub_categories = Category::where('parent_id', $category->id)->get();

            if ($sub_category) {
                $products = $products->where('category_id', $sub_category->id);
            } else {
                $products = $products->whereIn('category_id', $sub_categories->pluck('id'));
            }
        }


        return view('products.index', [
            'products' => $products->paginate(24),
            'category' => $category,
            'sub_categories' => $sub_categories,
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
        $similar_products = Product::all()->take(4);

        return view('products.show', [
            'product' => $product,
            'similar_products' => $similar_products
        ]);
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
}
