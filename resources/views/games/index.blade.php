@extends('layouts.app')

@section('content')
    <!-- <example-component></example-component>
    <passport-clients></passport-clients>
    <passport-authorized-clients></passport-authorized-clients>
    <passport-personal-access-tokens></passport-personal-access-tokens> -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-12">
          <a href="{{ route('games.create') }}" class="btn btn-primary" role="button">Novo Jogo</a>
        </div>
      </div>
      @foreach ($games as $game)
      <div class="row">
        <div class="col-md-2">
          <span>Jogo FIBA {{ $game->game_number }}</span>
        </div>
        <div class="col-md-3">
          <img style="max-width: 40px;" src="{{ $game->competition_logo }}">
          <span>{{ $game->game_schedule }}</span>
        </div>
        <div class="col-md-2">
          <img style="max-width: 40px;" src="{{ $game->home_team_logo }}">
          <span>{{ $game->home_team_tv_name }}</span>
        </div>
        <div class="col-md-2">
          <img style="max-width: 40px;" src="{{ $game->out_team_logo }}">
          <span>{{ $game->out_team_tv_name }}</span>
        </div>
        <div class="col-md-3">
          <a href="{{ route('games.edit', [$game->id]) }}" class="btn btn-primary" role="button">Editar</a>
          <a href="{{ route('games.show', [$game->id]) }}" class="btn btn-success" role="button">Transmitir</a>
          <form method="POST" action="{{ route('games.destroy', [ 'id' => $game->id ]) }}">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Apagar</a>
          </form>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
