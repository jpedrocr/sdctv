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
    return $this->belongsTo('App\Team', 'home_team_id');
  }
  public function outTeam()
  {
    return $this->belongsTo('App\Team', 'out_team_id');
  }
}
