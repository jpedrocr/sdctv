<?php

use Faker\Generator as Faker;

$factory->define(App\Team::class, function (Faker $faker) {
    return [
        'short_name' => $faker->unique()->countryCode,
        'name' => $faker->unique()->country,
        'color' => $faker->hexcolor,
        'logo' => $faker->imageUrl
    ];
});
