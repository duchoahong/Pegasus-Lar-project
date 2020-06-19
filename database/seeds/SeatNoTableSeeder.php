<?php

use Illuminate\Database\Seeder;

class SeatNoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		// factory(App\Model\seat_no::class, 120)->create();
		$arr = [
			['SeatNo' => 1, 'RowID' => 1],
			['SeatNo' => 2, 'RowID' => 1],
			['SeatNo' => 3, 'RowID' => 1],
			['SeatNo' => 4, 'RowID' => 1],
			['SeatNo' => 5, 'RowID' => 1],
			['SeatNo' => 6, 'RowID' => 1],
			['SeatNo' => 7, 'RowID' => 1],
			['SeatNo' => 8, 'RowID' => 1],
			['SeatNo' => 9, 'RowID' => 1],
			['SeatNo' => 10, 'RowID' => 1],
			['SeatNo' => 1, 'RowID' => 2],
			['SeatNo' => 2, 'RowID' => 2],
			['SeatNo' => 3, 'RowID' => 2],
			['SeatNo' => 4, 'RowID' => 2],
			['SeatNo' => 5, 'RowID' => 2],
			['SeatNo' => 6, 'RowID' => 2],
			['SeatNo' => 7, 'RowID' => 2],
			['SeatNo' => 1, 'RowID' => 3],
			['SeatNo' => 2, 'RowID' => 3],
			['SeatNo' => 3, 'RowID' => 3],
			['SeatNo' => 1, 'RowID' => 4],
			['SeatNo' => 2, 'RowID' => 4],
			['SeatNo' => 1, 'RowID' => 5],
			['SeatNo' => 2, 'RowID' => 5],
			['SeatNo' => 1, 'RowID' => 6],
			['SeatNo' => 2, 'RowID' => 6],
			['SeatNo' => 1, 'RowID' => 7],
			['SeatNo' => 2, 'RowID' => 7],
		//end seat_row room 1
			['SeatNo' => 1, 'RowID' => 8],
			['SeatNo' => 2, 'RowID' => 8],
			['SeatNo' => 3, 'RowID' => 8],
			['SeatNo' => 1, 'RowID' => 9],
			['SeatNo' => 2, 'RowID' => 9],
			['SeatNo' => 3, 'RowID' => 9],
			['SeatNo' => 1, 'RowID' => 10],
			['SeatNo' => 2, 'RowID' => 10],
			['SeatNo' => 3, 'RowID' => 10],
			['SeatNo' => 1, 'RowID' => 11],
			['SeatNo' => 2, 'RowID' => 11],
			['SeatNo' => 3, 'RowID' => 11],
		//end seat_row room 2
			['SeatNo' => 1, 'RowID' => 12],
			['SeatNo' => 2, 'RowID' => 12],
			['SeatNo' => 3, 'RowID' => 12],
			['SeatNo' => 1, 'RowID' => 13]
		//end seat_row room 3
		];
		DB::table('seat_nos')->insert($arr);
    }
}
