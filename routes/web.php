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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group([
		'namespace'=>'Admin', 
		'middleware' => 'auth', 
		'prefix' => 'admin/'
	], 
function(){
	Route::get('/', 'AdminController@dashboard');
	Route::get('/dasboard', 'AdminController@dashboard');
	Route::get('/users', 'AdminController@user');
	Route::get('/product', 'ProductController@product');
	Route::get('/product/new', 'ProductController@new');

});
