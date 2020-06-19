<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RoomRowNoView extends Migration
{
    public function up()
    {
        DB::statement('
            CREATE VIEW if NOT EXISTS screen_detail 
            AS
            SELECT d.RoomID RoomID, d.RoomName ScreenName, c.RowNo ScreenRow, b.SeatNo SeatNo, a.TimeVal ShowTime, a.DateVal ShowDate, CASE WHEN a.Status = 1 THEN b.SeatNo ELSE 0 END Status
            FROM SeatShows AS a
            LEFT JOIN seat_nos AS b ON b.SeatID = a.SeatNoID
            LEFT JOIN seat_rows AS c ON c.RowID = b.RowID
            LEFT JOIN rooms AS d ON d.RoomID = c.RoomID
            ORDER BY a.id ASC

            
            -- CREATE VIEW room_row_no_records
            -- AS
            -- SELECT 
            --     b.RoomName AS ScreenName,
            --     a.RowNo AS ScreenRow,
            --     c.SeatNO AS SeatNo,
            --     CASE WHEN c.status = 1 THEN c.SeatNo ELSE 0 END AS Status
            -- FROM
            --     seat_rows AS a
            --     LEFT JOIN rooms AS b ON a.RoomID = b.RoomID
            --     LEFT JOIN seat_nos AS c ON a.RowID = c.RowID
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
