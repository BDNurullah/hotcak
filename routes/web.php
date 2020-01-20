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

//Route::get('/', function () {
//    return view('website.welcome');
//});
Route::get('/', 'SiteController@index')->name('index');
Route::get('/order', 'SiteController@order')->name('order');
Route::get('/details', 'SiteController@details')->name('details');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Admin
//Home slider route
Route::resource('/admin/homesliders','HomeslidersController');//Home slider route
Route::get('/admin/homesliders', 'HomeslidersController@index')->name('homesliders');
//Product route
Route::resource('/admin/products','ProductController');
Route::get('/admin/products', 'ProductController@index')->name('products');
//Product route
Route::resource('/admin/productType','ProductTypeController');
Route::get('/admin/productType', 'ProductTypeController@index')->name('productType');