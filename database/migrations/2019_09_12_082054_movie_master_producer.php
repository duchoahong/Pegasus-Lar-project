<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MovieMasterProducer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_master_producer', function (Blueprint $table) {
            $table->bigInteger('ProducerID')->unsigned();
            $table->foreign('ProducerID')->references('id')->on('producers');
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
        Schema::dropIfExists('movie_master_producer');
    }
}
