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
      return $this->hasMany('App\Game', 'home_team_id');
    }
    public function outGames()
    {
      return $this->hasMany('App\Game', 'out_team_id');
    }
}
