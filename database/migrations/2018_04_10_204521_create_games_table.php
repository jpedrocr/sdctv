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
            $table->unsignedInteger('gameNumber')->nullable();
            $table->unsignedInteger('hometeam_id')->nullable();
            $table->unsignedInteger('outteam_id')->nullable();
            $table->dateTime('gameSchedule')->nullable();
            $table->string('competitionLogo')->nullable();
            $table->timestamps();

            $table->foreign('hometeam_id')->references('id')->on('teams');
            $table->foreign('outteam_id')->references('id')->on('teams');
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
