<?php

namespace App\Http\Controllers\API;

use App\Game;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ScoreboardController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Game::where('game_number', $id)->firstOrFail()->scoreboard;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $scoreboard = Game::where('game_number', $id)->firstOrFail()->scoreboard;

        $scoreboard->quarter = $request->quarter;
        $scoreboard->timer = $request->timer;
        $scoreboard->home_score = $request->home_score;
        $scoreboard->out_score = $request->out_score;
        
        $scoreboard->save();
    }
}
