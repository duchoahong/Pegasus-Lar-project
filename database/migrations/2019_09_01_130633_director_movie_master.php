<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DirectorMovieMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('director_movie_master', function (Blueprint $table) {
            $table->bigInteger('DirectorID')->unsigned();
            $table->foreign('DirectorID')->references('id')->on('directors');
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
        Schema::dropIfExists('director_movie_master');
    }
}
