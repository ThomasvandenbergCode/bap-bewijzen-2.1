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

Route::get('/home', function () {
    return view('grauw');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/product', 'HomeController@product')->name('product');
Route::get('/add_product', 'HomeController@addproduct')->name('addProduct');
