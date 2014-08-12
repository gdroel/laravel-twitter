<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::model('user', 'User');

Route::get('/','PostsController@index');

//Posts Controller
Route::get('/create', 'PostsController@showCreate');
Route::post('/create', 'PostsController@doCreate');

//Auth Controller
Route::get('/register', 'AuthController@showRegister');
Route::post('/register', 'AuthController@doRegister');

Route::get('/login', 'AuthController@showLogin');
Route::post('/login', 'AuthController@doLogin');

Route::get('logout', 'AuthController@doLogout');

//Users Controller
Route::get('follow/{user}', 'UsersController@follow');

Route::get('profile/{user}', 'UsersController@profile');

