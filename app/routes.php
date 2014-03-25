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

Route::get('/', 'HomeController@showWelcome');

Route::get('/ck','HomeController@showHome');

Route::resource('posts', 'PostsController');

Route::get('/rolldice/{num?}', 'HomeController@rollDice');

Route::get('/newtodo', 'HomeController@showTodo');
