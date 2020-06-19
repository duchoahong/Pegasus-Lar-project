<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\seat_row;
use Faker\Generator as Faker;

$factory->define(App\Model\seat_row::class, function (Faker $faker) {
    return [
    	'RoomID' => $faker->numberBetween($min = 1, $max = 7),
    	'RowNo' =>  $faker->randomElement($array = array ('A','B','C')) 
    ];
});
