<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CallRoomRowNoViewCmd extends Migration
{
    /**
     * Run the migrations.
     *
     * Now every time you need to update the SQL view, you can update the console command
     */
    public function up()
    {
        Artisan::call("view:room_row_noViewCmd");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
