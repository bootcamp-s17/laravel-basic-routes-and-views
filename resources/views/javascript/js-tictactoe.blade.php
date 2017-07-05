<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tic-Tac-Toe</title>

@include('partials._bootstrap3')

  <link rel="stylesheet" href="/js-tictactoe/style.css">
</head>
<body>

@include('partials._nav')

  <div class="tictactoe container">
    <h1 class="text-center">Tic-Tac-Toe</h1>
    <div class="row bg-info img-rounded" id="notification">
      <p class="text-center" id="winnerMessage"></p>
    </div>
    <div id="gameBoard">
      <div class="row">
        <div class="space col-xs-4 line-right line-bottom"></div>
        <div class="space col-xs-4 line-right line-bottom"></div>
        <div class="space col-xs-4 line-bottom"></div>
      </div>
      <div class="row">
        <div class="space col-xs-4 line-right line-bottom"></div>
        <div class="space col-xs-4 line-right line-bottom"></div>
        <div class="space col-xs-4 line-bottom"></div>
      </div>
      <div class="row">
        <div class="space col-xs-4 line-right"></div>
        <div class="space col-xs-4 line-right"></div>
        <div class="space col-xs-4"></div>
      </div>
    </div>
    <div class="row center-text">
      <button class="btn btn-primary" id="restartButton">New Game</button>
    </div>
  </div>
    
</body>
<script src="/js-tictactoe/main.js"></script>
</html>
