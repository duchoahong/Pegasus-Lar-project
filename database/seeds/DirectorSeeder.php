<?php

use Illuminate\Database\Seeder;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$arr = [
    		['name' => 'duc','DOB' => '1999-01-29','nationality' => 'USA','information' => 'nullable'],
    		['name' => 'duong','DOB' => '1999-01-29','nationality' => 'USA','information' => 'nullable'],
    		['name' => 'dung','DOB' => '1999-01-29','nationality' => 'USA','information' => 'nullable'],
    		['name' => 'chien','DOB' => '1999-01-29','nationality' => 'USA','information' => 'nullable'],
    		['name' => 'chung','DOB' => '1999-01-29','nationality' => 'USA','information' => 'nullable'],
    		['name' => 'ha linh','DOB' => '1999-01-29','nationality' => 'USA','information' => 'nullable'],
    		['name' => 'giang tu','DOB' => '1999-01-29','nationality' => 'USA','information' => 'nullable'],
    		['name' => 'my linh','DOB' => '1999-01-29','nationality' => 'USA','information' => 'nullable'],
    		['name' => 'ha giang','DOB' => '1999-01-29','nationality' => 'USA','information' => 'nullable'],
    		['name' => 'chau linh','DOB' => '1999-01-29','nationality' => 'USA','information' => 'nullable'],
    	];

        DB::table('directors')->insert($arr);
    }
}
