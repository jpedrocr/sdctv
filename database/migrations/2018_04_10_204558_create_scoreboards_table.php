<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoreboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('scoreboards', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('quarter')->nullable();
            $table->time('timer')->nullable();
            $table->unsignedInteger('scoreA')->nullable();
            $table->unsignedInteger('scoreB')->nullable();
            $table->timestamps();

            $table->foreign('game_id')->references('id')->on('games');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scoreboards');
    }
}
