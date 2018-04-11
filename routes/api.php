<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/game', function (Request $request) {
//     return App\Game::with(['homeTeam', 'outTeam', 'scoreboard'])->first();
// });
Route::apiResource('scoreboards', 'API\ScoreboardController')->only([
    'show', 'update'
])->middleware('auth:api');
Route::apiResource('games', 'API\GameController')->only([
    'show', 'update'
])->middleware('auth:api');
