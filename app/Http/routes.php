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

Route::get('/', ['uses' => 'HomeController@index', 'as' => 'home']);

Route::get('home', ['uses' => 'HomeController@index', 'as' => 'home']);

Route::resource('blogs', 'BlogController');

Route::resource('blogs.comments', 'CommentController', ['only' => ['index', 'update', 'store', 'destroy']]);

Route::group(['prefix' => 'admin'], function() {

    Route::get('console', function() {
        return view('admin.dashboard');
    });
    Route::get('orders', function() {
        return view('admin.dashboard');
    });
    Route::get('projects', function() {
        return view('admin.dashboard');
    });

});

//Route::get('test/{greeting}/{user?}', function($greet, $user = 'User') {
//    return $greet . ', ' . $user;
//});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
