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

Route::get('/', 'MainController@index'); //首頁


Route::get('/test/product/new', 'ProductController@newProduct');
Route::get('/test/products', 'ProductController@index');
Route::get('/test/product/destroy/{id}', 'ProductController@destroy');
Route::post('/test/product/save','ProductController@add');

Auth::routes();


Route::get('/addProduct/{productId}', 'CartController@addItem');
Route::get('/removeItem/{productId}', 'CartController@removeItem');
Route::get('/cart', 'CartController@showCart');



Route::get('/welcome', 'HomeController@index');
