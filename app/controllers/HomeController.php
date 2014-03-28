<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function rollDice($num = 1)
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

	}

	public function showHome()
	{
		return View::make('resume');
	}

	public function showTodo()
	{
	    return View::make('newtodo');
	}

	public function showWhack()
	{
		return View::make('game');
	}

}