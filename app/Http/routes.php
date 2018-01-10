<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index',['title' => '鸟布鲸文化','url' => '/art/index','copyright' => 'Copyright © 2018-2038']);
});

Route::group(['prefix' => 'art'],function() {
	Route::get('index', function () {
    	return view('art/index',['list' => '/art/list','sale' => '/upload/index']);
	});
	Route::get('list', function () {
    	return view('art/list',['jelly' => '/art/jelly','sale' => '/upload/index']);
	});
	Route::get('jelly', function () {
    	return view('art/jelly',['index' => '/art/index','sale' => '/upload/index']);
	});
});

Route::group(['namespace'=> 'Project'],function() {
	Route::group(['prefix' => 'upload'],function() {
		Route::post('build', 'RestfulController@buildProject');
		Route::get('index', 'RestfulController@index');
	});
});



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
