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

//HOME PRODUCT
Route::get('/', 'UserController@home')->name('home');
Route::get('/home2', 'UserController@home2')->name('home2');
Route::get('/home3', 'UserController@home3')->name('home3');

//ROUTE GET
Route::get('/detail/{product}', 'UserController@detail')->name('detail');
Route::get('/login', 'UserController@login')->name('login');
Route::get('/register', 'UserController@register')->name('register');

//ROUTE POST
Route::post('/postlogin', 'UserController@postlogin')->name('postlogin');
Route::post('/postregister', 'UserController@postregister')->name('postregister');

//ROUTE MIDDLEWARE POST
Route::middleware('auth')->group(function () {
    Route::get('logout', 'UserController@logout')->name('logout');
    Route::post('/postcart/{product}', 'UserController@postcart')->name('postcart');
    Route::get('/cart', 'UserController@cart')->name('cart');
    Route::get('/buy/{detail_transaction}', 'UserController@buy')->name('buy');
    Route::post('/postbuy/{detail_transaction}', 'UserController@postbuy')->name('postbuy');
    Route::get('/summary', 'UserController@summary')->name('summary');
});

//ROUTE FUNCTION
Route::get('delete_cart/{detail_transaction}', 'UserController@delete_cart')->name('delete_cart');
