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
}
