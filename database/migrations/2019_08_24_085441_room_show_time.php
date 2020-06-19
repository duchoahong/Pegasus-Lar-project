<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RoomShowTime extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_show_times', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('Room_id')->unsigned();
            $table->foreign('Room_id')->references('RoomId')->on('rooms');
            $table->bigInteger('MovieID')->unsigned();
            $table->foreign('MovieID')->references('id')->on('movie_masters');
            $table->time('TimeVal');
            $table->date('DateBegin');
            $table->date('DateEnd');
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
        Schema::dropIfExists('room_show_times');
    }
}
