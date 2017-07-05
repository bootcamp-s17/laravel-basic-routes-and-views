<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('hello');
});

Route::get('/fred/flintstone', function () {
    return view('form');
});

Route::get('/barney/rubble', function () {
    return view('form');
});

Route::get('/examples/js/calculator', function () {
    return view('javascript.js-calculator');
}); 

Route::get('/examples/js/tictactoe', function () {
    return view('javascript.js-tictactoe');
});

Route::get('/examples/js/weather', function () {
    return view('javascript.js-weather');
});