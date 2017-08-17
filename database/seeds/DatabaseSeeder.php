<?php

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder {
/**
* Run the database seeds.
*
* @return void
*/
  public function run()
  {
    Eloquent::unguard();
    $this->call('UserTableSeeder');
  }
}

class UserTableSeeder extends Seeder {
  public function run()
  {
  	DB::table('users')->delete();
    // make sure to update this code with your actual e-mail and phone number
    User::create(array('email' => 'hi@example.com','phone_number' => '+15555555555'));
  }
}
