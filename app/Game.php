<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
  /*
  |--------------------------------------------------------------------------
  | RELATIONS
  |--------------------------------------------------------------------------
  */
  public function scoreboard()
  {
    return $this->hasOne('App\Scoreboard');
  }
  public function homeTeam()
  {
    return $this->belongsTo('App\Game', 'hometeam_id');
  }
  public function outTeam()
  {
    return $this->belongsTo('App\Game', 'outteam_id');
  }
}
