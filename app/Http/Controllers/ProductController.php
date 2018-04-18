<?php

namespace App\Http\Controllers;

use App\Color;
use App\Image;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',
            ['except' => [
                'show',
                'user_index',
                'collection',
                'color_filter',
                'gender',
                'gender_color_filter',
                'search']]);
    }

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
                                    'material' => $request->material,
                                    'gender' => $request->gender]);

        $file = $request->image;

        $fileName = $product->id . '-' . md5($file->getClientOriginalName()) .
            time() . '.' . $file->getClientOriginalExtension();

        $uploadedFile = $file->storeAs(config('app.products-images-path'), $fileName);

        if ($uploadedFile)
        {
            Image::create(['file' => $fileName,'product_id' => $product->id]);
        }

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
        $product->gender = $request->gender;
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
        $images = $product->images;

        foreach($images as $img)
        {
            $file = config('app.products-images-path') . $img->file;

            if (Storage::exists($file))
            {
                Storage::delete($file);
            }
        }

        $product->images()->delete();
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

    public function color_filter($color)
    {

        $colors = Color::all();
        $selected_color = Color::where('name', $color)->first();
        $products = Product::where('color_id', $selected_color->id)->get();
        return view('products.collection', compact('products', $products, 'colors', 'selected_color'));
    }

    public function gender($gender)
    {
        $colors = Color::all();
        $products = Product::where('gender', Product::getGender($gender))->get();
        return view('products.collection', compact('products', $products, 'colors', $colors, 'gender', $gender));
    }

    public function gender_color_filter($gender, $color)
    {
        $colors = Color::all();
        $selected_color = Color::where('name', $color)->first();
        $products = Product::where('color_id', $selected_color->id)->where('gender', Product::getGender($gender))->get();
        return view('products.collection', compact('products', $products, 'colors', $colors, 'selected_color', $selected_color, 'gender', $gender));
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $colors = Color::all();
        $products= Product::where('name', 'ilike', '%' . $request->search . '%')->get();
        return view('products.collection', compact('colors', $colors, 'products', $products, 'search', $search));
    }

}
