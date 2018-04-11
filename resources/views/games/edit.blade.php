@extends('layouts.app')

@section('content')
    <!-- <example-component></example-component>
    <passport-clients></passport-clients>
    <passport-authorized-clients></passport-authorized-clients>
    <passport-personal-access-tokens></passport-personal-access-tokens> -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <form method="POST" action="{{ route('games.update', [$game->id]) }}">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label for="game_number">Número do Jogo</label>
          <input type="number" class="form-control" name="game_number" id="game_number" placeholder="Número do Jogo" value="{{ $game->game_number }}">
        </div>
        <div class="form-group">
          <label for="game_schedule">Horário</label>
          <input type="text" class="form-control" name="game_schedule" id="game_schedule" placeholder="Horário" value="{{ $game->game_schedule }}">
        </div>
        <div class="form-group">
          <label for="competition_logo">Logotipo Competição</label>
          <input type="url" class="form-control" name="competition_logo" id="competition_logo" placeholder="Logotipo Competição" value="{{ $game->competition_logo }}">
        </div>
        <div class="form-group">
          <label for="home_team_tv_name">Equipa Casa</label>
          <input type="text" class="form-control" name="home_team_tv_name" id="home_team_tv_name" placeholder="Equipa Casa" value="{{ $game->home_team_tv_name }}">
        </div>
        <div class="form-group">
          <label for="home_team_logo">Logotipo Equipa Casa</label>
          <input type="url" class="form-control" name="home_team_logo" id="home_team_logo" placeholder="Logotipo Equipa Casa" value="{{ $game->home_team_logo }}">
        </div>
        <div class="form-group">
          <label for="out_team_tv_name">Equipa Visitante</label>
          <input type="text" class="form-control" name="out_team_tv_name" id="out_team_tv_name" placeholder="Equipa Visitante" value="{{ $game->out_team_tv_name }}">
        </div>
        <div class="form-group">
          <label for="out_team_logo">Logotipo Equipa Visitante</label>
          <input type="url" class="form-control" name="out_team_logo" id="out_team_logo" placeholder="Logotipo Equipa Visitante" value="{{ $game->out_team_logo }}">
        </div>
        <button type="submit" class="btn btn-primary">Gravar</button>
      </form>
    </div>
  </div>
</div>
@endsection
