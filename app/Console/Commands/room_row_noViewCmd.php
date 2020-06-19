<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class room_row_noViewCmd extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'view:room_row_noViewCmd';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {  
        // DB::statement('
        //     DROP VIEW room_row_no_records;
        // ');

        DB::statement('
            CREATE VIEW if NOT EXISTS screen_detail 
            AS
            SELECT d.RoomID RoomID, d.RoomName ScreenName, c.RowNo ScreenRow, b.SeatNo SeatNo, a.TimeVal ShowTime, a.DateVal ShowDate, CASE WHEN a.Status = 1 THEN b.SeatNo ELSE 0 END Status
            FROM SeatShows AS a
            LEFT JOIN seat_nos AS b ON b.SeatID = a.SeatNoID
            LEFT JOIN seat_rows AS c ON c.RowID = b.RowID
            LEFT JOIN rooms AS d ON d.RoomID = c.RoomID
            ORDER BY a.id ASC
        ');
    }
}
