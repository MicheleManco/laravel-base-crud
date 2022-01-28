<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comic;
use Faker\Generator as Faker;

$factory->define(Comic::class, function (Faker $faker) {
    return [
        'title'=>$faker->name(),
        'author'=>$faker->name(), 
        'release'=>$faker->date(),
        'pages'=>$faker->numberBetween(10, 10000)
    ];
});
