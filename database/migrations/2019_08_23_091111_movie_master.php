<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MovieMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_masters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('MovieName');
            $table->string('Title');
            $table->text('Description');
            $table->string('Note');
            $table->string('Duration_Min');
            $table->date('Date_Premiere');
            $table->integer('Status');
            // $table->string('Poster_Image_url');
            // $table->string('Trailer_url');
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
        Schema::dropIfExists('movie_masters');
    }
}
