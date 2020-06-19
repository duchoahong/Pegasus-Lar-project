<?php

use Illuminate\Database\Seeder;

class ProducerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$arr = [
    		['name' => 'Universal'],
    		['name' => '20TH Century'],
    		['name' => 'fox'],
    		['name' => 'Marvel'],
    	];
        DB::table('producers')->insert($arr);
    }
}
