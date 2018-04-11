<?php

namespace App\Http\Controllers;

use App\Game;
use App\Scoreboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GameController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('games.index', ['games' => Game::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('games.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $game = new Game;
        $game->game_number = $request->game_number;
        $game->game_schedule = $request->game_schedule;
        $game->home_team_tv_name = $request->home_team_tv_name;
        $game->out_team_tv_name = $request->out_team_tv_name;
        $game->save();
        $scoreboard = new Scoreboard;
        $scoreboard->game_id = $game->id;
        $scoreboard->save();
        return redirect()->route('games.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        Scoreboard::where('status', 'ACTIVE')->update(['status' => 'INACTIVE']);
        $game->scoreboard->status = 'ACTIVE';
        $game->scoreboard->save();
        return view('scoreboards.show', ['scoreboard' => $game->scoreboard]);
        // return view('games.show', ['game' => $game]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        return view('games.edit', ['game' => $game]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        $game->game_number = $request->game_number;
        $game->game_schedule = $request->game_schedule;
        $game->competition_logo = $request->competition_logo;
        $game->home_team_tv_name = $request->home_team_tv_name;
        $game->home_team_logo = $request->home_team_logo;
        $game->out_team_tv_name = $request->out_team_tv_name;
        $game->out_team_logo = $request->out_team_logo;
        $game->save();
        return redirect()->route('games.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        $game->delete();
        return redirect()->route('games.index');
    }
}
