<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Form Test</title>
    </head>
    <body>

<h1>Form Test</h1>


<?php 

  $name = "Fred";
  $password = "whoohoo!";

  if ($_SERVER['PATH_INFO'] == '/barney/rubble') {
    $name = "Barney";
    $password = "okilydokily";
  }

  // Did not work!
  //return view('partials._form');

?>

@include('partials._form')


</body>
</html>

