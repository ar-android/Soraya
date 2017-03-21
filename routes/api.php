<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/', function(){
	$res['success'] = true;
	$res['message'] = 'Welcome to home api endpoint.';
	
	return response($res);
});

Route::group(['namespace'=>'Api'], function(){

	Route::post('/register', 'ApiController@register');
	Route::post('/login', 'ApiController@login');

	Route::group(['middleware'=>'api_token'], function(){

		// User endpoint
		Route::get('/user', 'ApiController@user');

		// Product endpoint
		Route::get('/product', 'ApiController@product_get_all');
		Route::get('/product/{id}', 'ApiController@product_by_id');
		Route::post('/product', 'ApiController@product_new');
		Route::put('/product/{id}', 'ApiController@product_edit');
		Route::delete('/product', 'ApiController@product_delete');

	});

});