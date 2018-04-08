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
            return view('products/home');
        }
    }
    return view('products/home');
});

Auth::routes();
Route::resource('products', 'ProductController');
Route::get('/home','ProductController@user_index')->name('home');