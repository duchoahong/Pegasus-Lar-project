<?php

use Illuminate\Database\Seeder;

class CastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$arr = [
    		['name' => 'huyen','DOB' => '1999-01-29','nationality' => 'USA','information' => 'nullable'],
    		['name' => 'hien','DOB' => '1999-01-29','nationality' => 'USA','information' => 'nullable'],
    		['name' => 'hoa','DOB' => '1999-01-29','nationality' => 'USA','information' => 'nullable'],
    		['name' => 'huong','DOB' => '1999-01-29','nationality' => 'USA','information' => 'nullable'],
    		['name' => 'hoa','DOB' => '1999-01-29','nationality' => 'USA','information' => 'nullable'],
    		['name' => 'lan','DOB' => '1999-01-29','nationality' => 'USA','information' => 'nullable'],
    		['name' => 'duyen','DOB' => '1999-01-29','nationality' => 'USA','information' => 'nullable'],
    		['name' => 'dung','DOB' => '1999-01-29','nationality' => 'USA','information' => 'nullable'],
    		['name' => 'tien','DOB' => '1999-01-29','nationality' => 'USA','information' => 'nullable'],
    		['name' => 'trang','DOB' => '1999-01-29','nationality' => 'USA','information' => 'nullable'],
    	];

        DB::table('casts')->insert($arr);
    }
}
