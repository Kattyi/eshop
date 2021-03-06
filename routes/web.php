<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if (Auth::check()) {
        if (Auth::user()->isAdmin()) {
            return redirect()->route('products.index');
        }
        else {
            return redirect()->route('home');
        }
    }
    return redirect()->route('home');
});

Route::get('/checkout', function () {
    return view('checkout.checkout');
});

Auth::routes();
Route::resource('products', 'ProductController');
Route::get('/home','ProductController@user_index')->name('home');
Route::get('/collection','ProductController@collection');
Route::get('/collection/{color}','ProductController@color_filter');
Route::get('/search', 'ProductController@search');
Route::get('/{gender}','ProductController@gender');
// TODO: make sure routes with parameters respond only to valid parameters
Route::get('/{gender}/{color}','ProductController@gender_color_filter');