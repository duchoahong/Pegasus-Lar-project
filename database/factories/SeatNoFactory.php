<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\seat_no;
use Faker\Generator as Faker;

$factory->define(App\Model\seat_no::class, function (Faker $faker) {
    return [
    	'SeatNo' => $faker->numberBetween($min = 1, $max = 15),
    	'RowID' => $faker->numberBetween($min = 1, $max = 50),
    	'Status' => $faker->numberBetween($min = 0, $max = 2)
    ];
});
