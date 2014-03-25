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

Route::get('/', function()
{
	return View::make('hello');
});


Route::get('/hp', function()
{
    return View::make('resume');
});

Route::get('/newtodo', function()
{
    return View::make('newtodo');
});

Route::get('/portfolio', function()
{
    return "This is my Portfolio.";
});

Route::get('/sayhello/{name?}', function($name = 'corey')
{
	$data = array(
		'name' => $name
	);
  return View::make('my-first-view')->with($data);
});

Route::get('/rolldice/{num?}', function($num = 1)
{
	$rand = rand(1,6);

	if ($rand == $num) {
		$message = 'Good Guess!';
	}else {
		$message = 'Wrong!';
	}


	$data = array(
		'rand' => $rand,
		'num' => $num,
		'guess' => $message
	);

	
	return View::make('dice-view')->with($data);

});
