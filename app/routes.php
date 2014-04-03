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

Route::get('/', 'HomeController@showHome');

Route::get('/ck','HomeController@showHome');

Route::resource('posts', 'PostsController');

Route::post('/posts/create', 'BaseController@uploadedImage');

Route::get('/newtodo', 'HomeController@showTodo');

Route::get('/game', 'HomeController@showWhack');

Route::get('/login', 'HomeController@showLogin');

Route::post('/login', 'HomeController@doLogin');

Route::get('/logout', 'HomeController@logout');

Route::get('/new', function()
{
		$user = new User();
		$user->fname = 'Courtney';
		$user->lname = 'Jefferson';
		$user->email = 'courtneypjefferson@gmail.com';
		$user->password = 'pass';
		$user->save();
});

