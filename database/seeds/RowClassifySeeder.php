<?php

use Illuminate\Database\Seeder;

class RowClassifySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$arr = [
    		['class' => 'the first class'],
    		['class' => 'the second class'],
    		['class' => 'the third class'],
    		['class' => 'double class']
    	];
        DB::table('row_classifys')->insert($arr);
    }
}
