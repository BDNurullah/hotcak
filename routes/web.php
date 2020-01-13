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
Route::resource('/admin/homesliders','HomeslidersController');//Home slider route