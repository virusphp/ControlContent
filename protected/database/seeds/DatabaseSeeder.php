<?php


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
    	Eloquent::unguard();
 
   		 $this->call('UserTableSeeder');
  
    }
}
