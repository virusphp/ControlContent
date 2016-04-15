<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
class UserTableSeeder extends Seeder
{
	
	public function run()
	{
		DB::table('users')->delete();
		User::create(array
				(
					'name' => 'Slamet Sugandi',
					'username' => 'genzol',
					'password' => Hash::make('qwe123'),
					'email' => 'genzol@gmail.com'
				));
	}
}