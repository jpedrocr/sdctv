@extends('layouts.clean_app')

@section('inlinecss')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Inline CSS -->
    <style media="screen">
body{
  margin: 0px;
}
div.scoreboard{
  /* background-color: aqua; */
  position: absolute;
  color: #ffffff;
  top: 15px;
}
div.scoreboard.teamLogo{
  top: 10px;
  text-align: center;
  width: 40px;
}
div.scoreboard.teamLogo.teamA{
  left: 0px;
}
div.scoreboard.teamLogo.teamB{
  left: 520px;
}
div.scoreboard.teamLogo>img{
  max-height: 40px;
  max-width: 40px;
}
div.scoreboard.teamName{
  font-weight: 700!important;
  top: 20px;
  width: 180px;
}
div.scoreboard.teamName.teamA{
  left: 40px;
  text-align: left;
}
div.scoreboard.teamName.teamB{
  left: 340px;
  text-align: right;
}
div.scoreboard.teamScore{
  font-size: 22px;
  font-weight: bold;
  text-align: center;
  width: 40px;
}
div.scoreboard.teamScore.teamA{
  left: 220px;
}
div.scoreboard.teamScore.teamB{
  left: 300px;
}
div.scoreboard.compLogo{
  left: 260px;
  text-align: center;
  top: 5px;
  width: 40px;
}
div.scoreboard.compLogo>img{
  max-height: 40px;
  max-width: 40px;
}
div.scoreboard.timer{
  font-size: 1.5rem;
  text-align: center;
  top: 45px;
  width: 560px;
  font-weight: 500;
  line-height: 1.2;
}
div.scoreboard.quarter{
  width: 560px;
  text-align: center;
  top: 70px;
  font-size: 80%;
  font-weight: 400;
}
div.canvas{
  z-index: 100;
}
    </style>
@endsection

@section('content')
    <div class="scoreboardContainer">
      <div class="scoreboard teamLogo teamA"><img src="{{ $scoreboard->game->home_team_logo }}" alt=""></div>
      <div class="scoreboard teamName teamA">{{ $scoreboard->game->home_team_tv_name }}</div>
      <div class="scoreboard teamScore teamA">101</div>
      <div class="scoreboard compLogo"><img src="{{ $scoreboard->game->competition_logo }}" alt=""></div>
      <div class="scoreboard teamScore teamB">101</div>
      <div class="scoreboard teamName teamB">{{ $scoreboard->game->out_team_tv_name }}</div>
      <div class="scoreboard teamLogo teamB"><img src="{{ $scoreboard->game->out_team_logo }}" alt=""></div>
      <div class="scoreboard timer" id="timer">10:00</div>
      <div class="scoreboard quarter" id="quarter">Nº Período</div>
    </div>
    <div class="canvas">
      <canvas id="myCanvas" width="560" height="90"></canvas>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript">
function startCanvas() {
  var canvas = document.getElementById("myCanvas");
  var ctx = canvas.getContext("2d");

  var grd=ctx.createRadialGradient(280,0,5,280,50,600);
  grd.addColorStop(0,"#336699");
  grd.addColorStop(1,"#ccffff");
  ctx.fillStyle=grd;
  ctx.lineWidth=2;
  ctx.strokeStyle="#334d66";

  // ctx.fillStyle = "#FF000010";
  // ctx.fillRect(0,0,560,90);
  ctx.beginPath();
  ctx.moveTo(280,19);
  ctx.lineTo(553,19);
  ctx.arcTo(558,19,555,45,5);
  ctx.lineTo(555,40);
  ctx.arcTo(555,45,550,45,5);
  ctx.lineTo(320,45);
  ctx.arcTo(315,45,315,50,5);
  ctx.lineTo(315,83);
  ctx.arcTo(315,88,310,88,5);
  ctx.lineTo(250,88);
  ctx.arcTo(245,88,245,45,5);
  ctx.lineTo(245,50);
  ctx.arcTo(245,45,240,45,5);
  ctx.lineTo(7,45);
  ctx.arcTo(2,45,2,24,5);
  ctx.lineTo(5,24);
  ctx.arcTo(5,19,10,19,5);
  ctx.lineTo(280,19);
  ctx.closePath();
  ctx.stroke();
  ctx.fill();

  grd=ctx.createRadialGradient(20,30,10,20,30,20);
  grd.addColorStop(0,"#ccffffff");
  grd.addColorStop(1,"#ccffff00");
  ctx.fillStyle=grd;

  ctx.beginPath();
  ctx.arc(20,30,20,0,2*Math.PI);
  ctx.fill();

  grd=ctx.createRadialGradient(540,30,10,540,30,20);
  grd.addColorStop(0,"#ccffffff");
  grd.addColorStop(1,"#ccffff00");
  ctx.fillStyle=grd;

  ctx.beginPath();
  ctx.arc(540,30,20,0,2*Math.PI);
  ctx.fill();
}
startCanvas();
    </script>
@endsection
