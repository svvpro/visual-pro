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

//Route::get('/', 'WelcomeController@index');
//
//Route::get('home', 'HomeController@index');


get('/',['as'=>'index', 'uses'=>'IndexController@index']);
get('/about',['as'=>'about', 'uses'=>'IndexController@about']);
get('/contacts',['as'=>'contact', 'uses'=>'IndexController@contact']);
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
