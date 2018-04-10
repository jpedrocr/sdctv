<?php

use Faker\Generator as Faker;

$factory->define(App\Scoreboard::class, function (Faker $faker) {
    return [
        'game_id' => $faker->function () {
            return factory(App\Game::class)->create()->id;
        },
        'quarter' => $faker->numberBetween(1,4),
        'timer' => $faker->time('H:i:s'),
        'scoreA' => $faker->numberBetween(0,120),
        'scoreB' => $faker->numberBetween(0,120)
    ];
});
