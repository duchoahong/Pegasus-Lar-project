<?php

use Illuminate\Database\Seeder;

class MovieMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$arr = [
            ['MovieName' => 'Train to Tokyo', 'Title' => 'The Hustle - Comedy','Description' => 'good good good good' ,'note' => 'note note','Duration_Min' => '120','Date_Premiere' => '2019-10-20'],
            ['MovieName' => 'Star Wars', 'Title' => 'The Hustle - Comedy', 'Description' => 'good good good good' ,'note' => 'note note','Duration_Min' => '120','Date_Premiere' => '2019-10-22'],
            ['MovieName' => 'Battle LosAngles', 'Title' => 'The Hustle - Comedy', 'Description' => 'good good good good' ,'note' => 'note note','Duration_Min' => '120','Date_Premiere' => '2019-10-24'],
            ['MovieName' => 'OneDay', 'Title' => 'The Hustle - Comedy','Description' => 'good good good good' ,'note' => 'note note','Duration_Min' => '120','Date_Premiere' => '2019-10-20']
    	];
        DB::table('movie_masters')->insert($arr);
    }
}
