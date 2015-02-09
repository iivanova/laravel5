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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::group(array('domain' => 'admin.test.ina'), function()
{
	Route::resource('/user', 'UserController');
	
	// route to show the login form
	Route::get('login', array('uses' => 'UserController@showLogin'));

	// route to process the form
	Route::post('login', array('uses' => 'UserController@doLogin'));


	Route::get('/', array('uses' => 'AdminController@index'));
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

