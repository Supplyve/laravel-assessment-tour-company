<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tour;
use Faker\Generator as Faker;

$factory->define(Tour::class, function (Faker $faker) {
    return [
        'destination' => $faker->city,
        'start' => $faker->dateTimeBetween('now', '+1 year'),
        'end' => $faker->dateTimeBetween('+1 year', '+2 years'),
        'price' => $faker->randomFloat(2, 100, 5000),
    ];
});
