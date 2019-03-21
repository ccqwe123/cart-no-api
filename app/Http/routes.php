<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();

Route::get('/', 'HomeController@index');

Route::get('/product/{name}', function() {
	return view('products.view_product');
});
Route::get('/my-store', function() {
	return view("users.store");
});
Route::get('/profile', function() {
	return view("users.profile");
});
Route::get('/sell-product', function() {
	return view("products.add_product");
});
