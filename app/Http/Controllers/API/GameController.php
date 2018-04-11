<?php

namespace App\Http\Controllers\API;

use App\Game;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GameController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Game::where('game_number', $id)->firstOrFail()->load('homeTeam', 'outTeam');
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
        $game = Game::where('game_number', $id)->firstOrFail()->load('homeTeam', 'outTeam');

        $game->game_number = $request->game_number;
        $game->game_schedule = $request->game_schedule;
        $game->competition_logo = $request->competition_logo;
        $game->save();

        $game->homeTeam->short_name = $request->home_team_short_name;
        $game->homeTeam->name = $request->home_team_name;
        $game->homeTeam->color = $request->home_team_color;
        $game->homeTeam->logo = $request->home_team_logo;
        $game->homeTeam->save();

        $game->outTeam->short_name = $request->out_team_short_name;
        $game->outTeam->name = $request->out_team_name;
        $game->outTeam->color = $request->out_team_color;
        $game->outTeam->logo = $request->out_team_logo;
        $game->outTeam->save();

        return $game;
    }
}
