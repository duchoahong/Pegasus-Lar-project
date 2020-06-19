<?php

use Illuminate\Database\Seeder;

class SeatRowTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		// factory(App\Model\seat_row::class, 50)->create();
		$arr = [
			['RoomID' => 1, 'RowNo' => 'A', 'ClassID' => 1],
			['RoomID' => 1, 'RowNo' => 'B', 'ClassID' => 1],
			['RoomID' => 1, 'RowNo' => 'C', 'ClassID' => 1],
			['RoomID' => 1, 'RowNo' => 'D', 'ClassID' => 1],
			['RoomID' => 1, 'RowNo' => 'E', 'ClassID' => 2],
			['RoomID' => 1, 'RowNo' => 'F', 'ClassID' => 2],
			['RoomID' => 1, 'RowNo' => 'G', 'ClassID' => 2],
			['RoomID' => 2, 'RowNo' => 'A', 'ClassID' => 1],
			['RoomID' => 2, 'RowNo' => 'B', 'ClassID' => 1],
			['RoomID' => 2, 'RowNo' => 'C', 'ClassID' => 1],
			['RoomID' => 2, 'RowNo' => 'D', 'ClassID' => 1],
			['RoomID' => 3, 'RowNo' => 'A', 'ClassID' => 1],
			['RoomID' => 3, 'RowNo' => 'B', 'ClassID' => 1]
		];
		DB::table('seat_rows')->insert($arr);
    }
}
