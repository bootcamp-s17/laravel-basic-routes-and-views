<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Janine's Test</title>
    </head>
    <body>


<h1>Janine's Test</h1>

{{ time() }}

<br />

{{ $name = 'Janine' }}

<br />

{{ "Hello, " . $name . "!" }}

<br />

{{ ceil(5.6789) }}

<br />

<?php
    echo "Welcome, Janine!";
?>

<br />

<?php 
    $message = "Welcome, $name. Have a nice day!";
    echo $message;
?>

<br />

<blockquote>

<?php
    $db = pg_connect("host=localhost port=5432 dbname=icecreamdev_dev user=icecream password=nomnomnom");
    $stmt = "select * from menu_items";
    $request = pg_query($db, $stmt);
    $results = pg_fetch_all($request);

    foreach ($results as $item) {
?>

    <p> {{ $item['name'] }}, {{ $item['description'] }}</p>

<?php
    }
?>

</blockquote>


    </body>
</html>
