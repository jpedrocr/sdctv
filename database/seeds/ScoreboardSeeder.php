<?php

use Illuminate\Database\Seeder;

class ScoreboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Scoreboard::class, 1)->create();
    }
}
