@extends('layouts.app')

@section('content')
    <!-- <example-component></example-component>
    <passport-clients></passport-clients>
    <passport-authorized-clients></passport-authorized-clients>
    <passport-personal-access-tokens></passport-personal-access-tokens> -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <form method="POST" action="{{ route('games.store') }}">
        @method('POST')
        @csrf
        <div class="form-group">
          <label for="game_number">Número do Jogo</label>
          <input type="number" class="form-control" name="game_number" id="game_number" placeholder="Número do Jogo">
        </div>
        <div class="form-group">
          <label for="game_schedule">Horário</label>
          <input type="datetime-local" class="form-control" name="game_schedule" id="game_schedule" placeholder="Horário">
        </div>
        <div class="form-group">
          <label for="home_team_tv_name">Equipa Casa</label>
          <input type="text" class="form-control" name="home_team_tv_name" id="home_team_tv_name" placeholder="Equipa Casa">
        </div>
        <div class="form-group">
          <label for="out_team_tv_name">Equipa Visitante</label>
          <input type="text" class="form-control" name="out_team_tv_name" id="out_team_tv_name" placeholder="Equipa Visitante">
        </div>
        <button type="submit" class="btn btn-primary">Gravar</button>
      </form>
    </div>
  </div>
</div>
@endsection
