<?php

use Faker\Generator as Faker;

$factory->define(App\Game::class, function (Faker $faker) {
    return [
        'gameNumber' => $faker->unique()->randomNumber(6),
        'hometeam_id' => $faker->function () {
            return factory(App\Team::class)->create()->id;
        },
        'outteam_id' => $faker->function () {
            return factory(App\Team::class)->create()->id;
        },
        'gameSchedule' => $faker->dateTimeThisYear(),
        'competitionLogo' => $faker->imageUrl()
    ];
});
