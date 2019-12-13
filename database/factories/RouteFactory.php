<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Route;
use Faker\Generator as Faker;

$factory->define(Route::class, function (Faker $faker) {
    return [
        'route_name' -> $faker->name,
        'courier_name' -> $faker->name,
    ];
});
