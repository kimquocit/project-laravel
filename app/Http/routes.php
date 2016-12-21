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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function(){
	Route::get('home', function () {
    	return view('admin.layout.home');
	});

	Route::group(['prefix' => 'catalog'], function(){
		Route::get('list','catalogController@showList');
		Route::get('getlist','catalogController@getList');
		Route::get('add','catalogController@getAdd');
		Route::post('add','catalogController@postAdd');
		Route::get('edit','catalogController@getEdit');
		Route::get('delete','catalogController@getDelete');
	});

	Route::group(['prefix' => 'product'], function(){
		Route::get('list','productController@getList');
		Route::get('add','productController@getAdd');
		Route::get('edit','productController@getEdit');
		Route::get('delete','productController@getDelete');
	});

});

Route::get('test', function () {
    return view('admin.catalog.list');
});
