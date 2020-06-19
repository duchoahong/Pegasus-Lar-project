<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeatRow extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seat_rows', function (Blueprint $table) {
            $table->bigIncrements('RowID');
            $table->bigInteger('RoomID')->unsigned();
            $table->foreign('RoomID')->references('RoomID')->on('rooms');
            $table->string('RowNo',10);
            $table->bigInteger('ClassID')->unsigned();
            $table->foreign('ClassID')->references('id')->on('row_classifys');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seat_rows');
    }
}
