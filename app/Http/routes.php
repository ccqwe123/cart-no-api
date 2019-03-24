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

// Route::auth();
//home page
Route::get('/user/verify/{token}', 'UserController@verifyUser')->name('user.verify');
Route::get('/', 'HomeController@index');
//authentication
Route::get('/login', 'UserController@userLogin');
Route::post('/auth', 'UserController@authenticate');
Route::get('/logout', 'UserController@logout');
Route::get('/register', 'UserController@reg');
Route::post('/get-register', 'UserController@getreg');
//page 404
Route::get('/oops', 'HomeController@errorpage');


Route::get('/product/{name}', function() {
	return view('products.view_product');
});
Route::group(['middleware' => 'permission:is_superadmin_account'], function() {
	Route::get('/admin', 'AdminController@index');
	Route::get('/admin/banned-users', 'AdminController@userban');
	Route::resource('/users', 'AdminController');
	Route::resource('/admin/roles', 'RolesController');
	Route::get('/admin/delete_roles/{id}', 'RolesController@destroy')->name('roles-delete');
	Route::get('/admin/roles/{id}/old_privilege', 'RolesController@oldPrivilege')->name('roles-privilege');
	Route::get('/admin/roles/{id}/privilege', 'RolesController@privilege')->name('roles-privilege');
	Route::post('/admin/roles/{id}/update/{role_name}', 'RolesController@updatePrivilege')->name('roles-update-privilege');
	Route::resource('/admin/category', 'CategoryController');
	Route::get('/admin/category/{id}/delete', 'CategoryController@destroy')->name('category-delete');
	Route::get('/admin/category-not-listed', 'CategoryController@archivecategory');
	Route::get('/admin/products', 'ProductController@adminindex');

});
Route::group(['middleware' => ['auth']], function() {
	Route::get('/my-store', function() {
		return view("users.store");
	});
	Route::get('/profile', function() {
		return view("users.profile");
	});
	Route::get('/sell-product', 'ProductController@sell_product');
	Route::post('/post-product', 'ProductController@post_product');
});
