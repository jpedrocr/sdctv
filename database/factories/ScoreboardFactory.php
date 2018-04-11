<?php

use Faker\Generator as Faker;

$factory->define(App\Scoreboard::class, function (Faker $faker) {
    return [
        'game_id' => factory(App\Game::class)->create()->id,
        'quarter' => $faker->numberBetween(1,4),
        'timer' => $faker->time('H:i:s'),
        'home_score' => $faker->numberBetween(0,120),
        'out_score' => $faker->numberBetween(0,120)
    ];
});
