<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeatNo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seat_nos', function (Blueprint $table) {
            $table->bigIncrements('SeatID');
            $table->string('SeatNo', 10);
            $table->bigInteger('RowID')->unsigned();
            $table->foreign('RowID')->references('RowID')->on('seat_rows');
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
        Schema::dropIfExists('seat_nos');
    }
}
