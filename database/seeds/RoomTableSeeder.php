<?php

use Illuminate\Database\Seeder;

class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		// factory(App\Model\room::class, 7)->create();
		$arr = [
			['RoomName' => 'phong 1'],
			['RoomName' => 'phong 2'],
			['RoomName' => 'phong 3']
		];
        DB::table('rooms')->insert($arr);
    }
}
