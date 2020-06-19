<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Eloquent::unguard();
        // $this->call(UserTableSeeder::class);

        $this->call(RowClassifySeeder::class);

        $this->call(RoomTableSeeder::class);

        $this->call(SeatRowTableSeeder::class);

        $this->call(SeatNoTableSeeder::class);

        // $this->call(SeatShowSeeder::class);
        
        $this->call(ProducerSeeder::class);
        
        // $this->call(MovieMasterSeeder::class);
        
        // $this->call(RoomShowTimeSeeder::class);
        
        $this->call(CastSeeder::class);
        
        $this->call(DirectorSeeder::class);

    }
}
