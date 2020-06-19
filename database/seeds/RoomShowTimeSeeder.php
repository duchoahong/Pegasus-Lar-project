<?php

use Illuminate\Database\Seeder;

class RoomShowTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$arr = [
    		['Room_id' => '1','MovieID' => '1','TimeVal' => '09:30','DateBegin' => '2019-10-22','DateEnd' => '2019-10-25',],
        ['Room_id' => '1','MovieID' => '1','TimeVal' => '17:30','DateBegin' => '2019-10-22','DateEnd' => '2019-10-25',],
    		['Room_id' => '1','MovieID' => '1','TimeVal' => '20:00','DateBegin' => '2019-10-22','DateEnd' => '2019-10-25',],
    		['Room_id' => '1','MovieID' => '2','TimeVal' => '11:30','DateBegin' => '2019-10-20','DateEnd' => '2019-10-23',],
    		['Room_id' => '1','MovieID' => '2','TimeVal' => '15:30','DateBegin' => '2019-10-20','DateEnd' => '2019-10-23',],
        ['Room_id' => '1','MovieID' => '3','TimeVal' => '10:30','DateBegin' => '2019-10-23','DateEnd' => '2019-10-26',],
        ['Room_id' => '1','MovieID' => '3','TimeVal' => '21:00','DateBegin' => '2019-10-23','DateEnd' => '2019-10-26',],
    	];
        DB::table('room_show_times')->insert($arr);
    }
}
