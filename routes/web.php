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

Route::get('/home', 'App\Http\Controllers\ProductsController@index')->name('home');
Route::get('/', 'App\Http\Controllers\ProductsController@index')->name('home');
Route::get('/delete', 'App\Http\Controllers\ProductsController@delete')->name('products.delete');
Route::get('/save-order', 'App\Http\Controllers\ProductsController@saveOrder')->name('saveOrder');
Route::get('/view-order', 'App\Http\Controllers\ProductsController@viewOrder')->name('viewOrder');
Route::get('/orders','App\Http\Controllers\OrderController@index')->name('orders')->middleware('auth');


Route::get('/add-to-cart/{product}', 'App\Http\Controllers\CartController@addToCart')->name('cart.add')->middleware('auth');
Route::get('/cart','App\Http\Controllers\CartController@cart')->name('cart')->middleware('auth');
Route::get('/cart/destroy/{itemId}','App\Http\Controllers\CartController@destroy')->name('cart.destroy')->middleware('auth');



Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');
Route::get('/pharma-admin', function () {
    return redirect()->route('login');
});
Route::resource('products','App\Http\Controllers\ProductsController');
Auth::routes();