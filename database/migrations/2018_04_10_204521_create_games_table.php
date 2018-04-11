<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('game_number')->nullable();
            $table->string('game_schedule')->nullable();
            $table->string('competition_logo')->nullable();
            $table->string('home_team_short_name')->nullable();
            $table->string('home_team_long_name')->nullable();
            $table->string('home_team_tv_name')->nullable();
            $table->string('home_team_color')->nullable();
            $table->string('home_team_logo')->nullable();
            $table->string('out_team_short_name')->nullable();
            $table->string('out_team_long_name')->nullable();
            $table->string('out_team_tv_name')->nullable();
            $table->string('out_team_color')->nullable();
            $table->string('out_team_logo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
}
