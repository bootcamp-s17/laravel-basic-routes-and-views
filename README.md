# Test application in Laravel

## New concepts and class notes

$ laravel new [name_of_project]   // creates a new Laravel project

$ php artisan serve   // starts the built-in server

Reviewed Laravel project architecture:
  /routes/web.php - used this to create URLs in our project
  /resources/views - directory where views live

Blade templates:
  - use {{ }} notation
  - can use <?php tags and do whatever we want!
  - butts heads with Angular because they use the same notation
  - {{ }} is a shortcut, sort of, for <?= ?>
  - worked with partials!
  - Commands beginning with @ are special to blade

## Pattern for making a new webpage in our application

1. Added a route

  Route::get('/examples/js/calculator', function () {
      return view('javascript.js-calculator');
  }); 

2. Created a view

  The one in the example above is /resources/views/javascript/js-calculator.blade.php

