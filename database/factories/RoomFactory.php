<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\room;
use Faker\Generator as Faker;



$factory->define(App\Model\room::class, function (Faker $faker) {
    return [
        'RoomName' => $faker->state,
    ];
});
