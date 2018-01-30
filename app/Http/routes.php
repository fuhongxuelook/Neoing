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
    return view('index',['title' => '鸟布鲸文化','url' => '/home/page','copyright' => 'Copyright © 2018-2038']);
});


Route::get('/ajax', function () {
    return view('art/ajax');
});

Route::group(['namespace' => 'Home'],function() {
    Route::group(['prefix' => 'home'],function() {
        Route::get('page', 'RestfulController@index');
    });
});

Route::group(['namespace' => 'Module'],function() {
    Route::get('module/{category}/{module}',['as' => 'index','uses'=> 'RestfulController@index']);
});

Route::group(['namespace' => 'Jelly'],function() {
    Route::group(['prefix' => 'market'],function() {
        Route::get('jelly', 'RestfulController@index');
    });
});

Route::group(['namespace'=> 'Project'],function() {
	Route::group(['prefix' => 'upload'],function() {
		Route::post('build', 'RestfulController@buildProject');
		Route::get('index', 'RestfulController@index');
	});
});

Route::group(['namespace'=> 'Ajax'],function() {
	Route::group(['prefix' => 'ajax'],function() {
		Route::post('dealajax', 'RestfulController@dealAjax');
	});
});

Route::get('testCsrf',function(){
    $csrf_field = csrf_field();
    $html = <<<GET
        <form method="POST" action="/testCsrf">
            {$csrf_field}
            <input type="submit" value="Test"/>
        </form>
GET;
    return $html;
});

Route::post('testCsrf',function(){
    return 'Success!';
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
