<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();
		$user = new User();
		$user->fname = 'Corey';
		$user->lname = 'Kepple';
		$user->email = 'coreyckepple@gmail.com';
		$user->password = 'password';
		$user->save();
		
	}


}