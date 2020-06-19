<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeatShow extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SeatShows', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('SeatNoID')->unsigned();
            $table->foreign('SeatNoID')->references('SeatID')->on('seat_nos');
            $table->time('TimeVal');
            $table->date('DateVal');
            $table->tinyInteger('Status')->nullable();
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
        Schema::dropIfExists('SeatShows');
    }
}
