<?php

use Illuminate\Support\Facades\Route;

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
    return view('ModernTemplate/index');
});
Route::get('/about', function () {
    return view('ModernTemplate/about');
});

Route::get('/categories', function () {
    return view('ModernTemplate/category');
});

Route::get('/shop', function () {
    return view('ModernTemplate/shop2');
});

Route::get('/shop-grid', function () {
    return view('ModernTemplate/shop');
});

Route::get('/product-detail', function () {
    return view('ModernTemplate/product-detail');
});

Route::get('/contact', function () {
    return view('ModernTemplate/contact');
});