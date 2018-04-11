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
            $table->unsignedInteger('home_team_id')->nullable();
            $table->unsignedInteger('out_team_id')->nullable();
            $table->dateTime('game_schedule')->nullable();
            $table->string('competition_logo')->nullable();
            $table->timestamps();

            $table->foreign('home_team_id')->references('id')->on('teams');
            $table->foreign('out_team_id')->references('id')->on('teams');
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
