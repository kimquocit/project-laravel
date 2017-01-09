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


Route::get('admin/login','userController@getLogin');
Route::post('admin/login','userController@postLogin');
Route::get('admin/logout','userController@getLogout');

Route::group(['prefix' => 'admin','middleware'=>'adminLogin'], function(){
	Route::get('home', function () {
    	return view('admin.layout.home');
	});

	Route::group(['prefix' => 'user'], function() {
		Route::get('list','userController@getList');
		Route::get('add','userController@getAdd');
		Route::post('add','userController@postAdd');
		Route::get('edit/{id}','userController@getEdit');
		Route::post('edit/{id}','userController@postEdit');
		Route::get('delete/{id}','userController@getDelete');
	});

	Route::group(['prefix' => 'catalog'], function(){
		Route::get('list','catalogController@showList');
		Route::get('getlist','catalogController@getList');
		Route::get('add','catalogController@getAdd');
		Route::post('add','catalogController@postAdd');
		Route::get('edit/{id}','catalogController@getEdit');
		Route::post('edit/{id}','catalogController@postEdit');
		Route::get('delete/{id}','catalogController@getDelete');
	});

	Route::group(['prefix' => 'product'], function(){
		//Route::get('list','productController@showList');
		Route::get('list','productController@getList');
		Route::get('add','productController@getAdd');
		Route::post('add','productController@postAdd');
		Route::get('edit/{id}','productController@getEdit');
		Route::post('edit/{id}','productController@postEdit');
		Route::get('delete/{id}','productController@getDelete');
	});

});

Route::get('test', function () {
    return view('admin.catalog.list');
});
