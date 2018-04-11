<?php

use Faker\Generator as Faker;

$factory->define(App\Game::class, function (Faker $faker) {
    return [
        'game_number' => $faker->unique()->numberBetween(100000, 999999),
        'game_schedule' => $faker->dateTimeThisYear,
        'competition_logo' => $faker->imageUrl,
        'home_team_short_name' => $faker->unique()->countryCode,
        'home_team_long_name' => $faker->unique()->country,
        'home_team_tv_name' => $faker->unique()->countryCode,
        'home_team_color' => $faker->hexcolor,
        'home_team_logo' => $faker->imageUrl,
        'out_team_short_name' => $faker->unique()->countryCode,
        'out_team_long_name' => $faker->unique()->country,
        'out_team_tv_name' => $faker->unique()->countryCode,
        'out_team_color' => $faker->hexcolor,
        'out_team_logo' => $faker->imageUrl
    ];
});
