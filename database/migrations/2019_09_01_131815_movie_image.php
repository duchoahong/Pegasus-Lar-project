<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MovieImage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ImageURL');
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
        Schema::dropIfExists('movie_images');
    }
}
