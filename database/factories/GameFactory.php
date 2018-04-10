<?php

use Faker\Generator as Faker;

$factory->define(App\Game::class, function (Faker $faker) {
    return [
        'gameNumber' => $faker->unique()->numberBetween(100000, 999999),
        'hometeam_id' => factory(App\Team::class)->create()->id,
        'outteam_id' => factory(App\Team::class)->create()->id,
        'gameSchedule' => $faker->dateTimeThisYear,
        'competitionLogo' => $faker->imageUrl
    ];
});
