<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'make' => $faker->unique()->safeEmail,
        'make_year' => now()
    ];
});
