<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();
		$user = new User();
		$user->email = 'corey';
		$user->password = 'password';
		$user->save();
	}


}