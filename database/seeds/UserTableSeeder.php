<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$arr = [
    		'name' => 'John Smith',
    		'email' => 'john@gmail.com',
    		'password' => Hash::make('password'),
    		'remember_token' => str_random(10)
    	];
        DB::table('users')->insert($arr);
    }
}
