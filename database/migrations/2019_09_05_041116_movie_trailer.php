<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MovieTrailer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_trailers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('TrailerUrl');
            $table->bigInteger('MovieID')->unsigned();
            $table->foreign('MovieID')->references('id')->on('movie_masters');
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
        Schema::dropIfExists('movie_trailers');
    }
}
