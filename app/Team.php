<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function homeGames()
    {
      return $this->hasMany('App\Game', 'hometeam_id');
    }
    public function outgames()
    {
      return $this->hasMany('App\Game', 'outteam_id');
    }
}
