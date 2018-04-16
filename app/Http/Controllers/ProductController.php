<?php

namespace App\Http\Controllers;

use App\Color;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products', $products));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colors = Color::all();

        return view('products.create', compact('colors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::create(['name' => $request->name,
                                    'color_id' => $request->color,
                                    'price' => $request->price,
                                    'material' => $request->material]);

        return redirect('/products/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product', $product));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $colors = Color::all();

        return view('products.edit', compact('product', $product, 'colors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->name = $request->name;
        $product->color_id = $request->color;
        $product->price = $request->price;
        $product->material = $request->material;
        $product->save();
        $request->session()->flash('message', 'Product successfully changed.');

        return redirect('products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Product $product)
    {
        $product->delete();
        $request->session()->flash('message', 'Product was successfully deleted.');
        return redirect('products');
    }

    public function user_index()
    {
        $products = Product::all();
        return view('products.home', compact('products', $products));
    }

    public function collection()
    {
        $colors = Color::all();
        $products = Product::all();
        return view('products.collection', compact('products', $products, 'colors'));
    }

    public function color_filter(Request $request, $color)
    {

        $colors = Color::all();
        $selected_color = Color::where('name', $color)->first();
        $products = Product::where('color_id', $selected_color->id)->get();
        return view('products.collection', compact('products', $products, 'colors', 'selected_color'));
    }

}
