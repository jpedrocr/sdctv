@extends('layouts.app')

@section('content')
    <!-- <example-component></example-component>
    <passport-clients></passport-clients>
    <passport-authorized-clients></passport-authorized-clients>
    <passport-personal-access-tokens></passport-personal-access-tokens> -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="input-group input-group-sm mb-3">
        <button type="button" class="btn btn-primary btn-sm" id="btnNumeroJogo">Número do Jogo</button>
        <div class="input-group-prepend">
          <span class="input-group-text" id="numeroJogo">#</span>
        </div>
        <input type="text" class="form-control" placeholder="Número do Jogo" aria-label="Número do Jogo" aria-describedby="numeroJogo" value="{{ $game->game_number }}">
        <div class="input-group-prepend">
          <span class="input-group-text" id="horarioJogo">Horário</span>
        </div>
        <input type="text" class="form-control" placeholder="Data e Hora do Jogo" aria-label="Data e Hora do Jogo" aria-describedby="horarioJogo" value="{{ $game->game_schedule }}">
        <div class="input-group-prepend">
          <span class="input-group-text" id="equipaA">Equipas</span>
        </div>
        <input type="text" class="form-control" placeholder="Equipa A" aria-label="Equipa A" aria-describedby="equipaA" value="{{ $game->home_team_tv_name }}">
        <div class="input-group-prepend">
          <span class="input-group-text" id="equipaB">vs</span>
        </div>
        <input type="text" class="form-control" placeholder="Equipa B" aria-label="Equipa B" aria-describedby="equipaB" value="{{ $game->out_team_tv_name }}">
      </div>
      <div class="input-group input-group-sm mb-3">
        <button type="button" class="btn btn-primary btn-sm" id="btnLogotipos">Logotipos</button>
        <div class="input-group-prepend">
          <span class="input-group-text" id="logotipoC">C</span>
        </div>
        <input type="text" class="form-control" placeholder="Logotipo da Competição" aria-label="Logotipo da Competição" aria-describedby="logotipoC" value="http://www.fpb.pt/fpb_zone/sa/img/COM/COM_7021_LOGO.gif">
        <div class="input-group-prepend">
          <span class="input-group-text" id="logotipoA">A</span>
        </div>
        <input type="text" class="form-control" placeholder="Logotipo da Equipa A" aria-label="Logotipo da Equipa A" aria-describedby="logotipoA" value="http://www.fpb.pt/fpb_zone/sa/img/CLU/CLU_16_LOGO.gif">
        <div class="input-group-prepend">
          <span class="input-group-text" id="logotipoB">B</span>
        </div>
        <input type="text" class="form-control" placeholder="Logotipo da Equipa B" aria-label="Logotipo da Equipa B" aria-describedby="logotipoB" value="http://www.fpb.pt/fpb_zone/sa/img/CLU/CLU_2404_LOGO.gif">
      </div>
    </div>
  </div>
</div>
@endsection
