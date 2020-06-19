<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cast extends Migration
{
    public function up()
    {
        Schema::create('casts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->date('DOB');
            $table->string('nationality');
            $table->text('information');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('casts');
    }
}
