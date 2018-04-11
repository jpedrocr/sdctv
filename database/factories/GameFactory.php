<?php

use Faker\Generator as Faker;

$factory->define(App\Game::class, function (Faker $faker) {
    return [
        'game_number' => $faker->unique()->numberBetween(100000, 999999),
        'home_team_id' => factory(App\Team::class)->create()->id,
        'out_team_id' => factory(App\Team::class)->create()->id,
        'game_schedule' => $faker->dateTimeThisYear,
        'competition_logo' => $faker->imageUrl
    ];
});
