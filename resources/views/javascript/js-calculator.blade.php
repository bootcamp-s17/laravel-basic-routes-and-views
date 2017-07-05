<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
    <script src="/js-calculator/main.js"></script>
    <link rel="stylesheet" href="/js-calculator/style.css">
</head>
<body>
    <div class='calculator'>
      <input class='display' type='readonly' value='0' id='display' disabled>
      <div class='keys'>
        <div class='row'>
          <button class='key numeric'>C</button>
          <button class='key numeric'>&nbsp</button>
          <button class='key numeric'>&nbsp</button>
          <button class='key func'>/</button>
        </div>
        <div class='row'>
          <button class='key numeric'>7</button>
          <button class='key numeric'>8</button>
          <button class='key numeric'>9</button>
          <button class='key func'>X</button>
        </div>
        <div class='row'>
          <button class='key numeric'>4</button>
          <button class='key numeric'>5</button>
          <button class='key numeric'>6</button>
          <button class='key func'>-</button>
        </div>
        <div class='row'>
          <button class='key numeric'>1</button>
          <button class='key numeric'>2</button>
          <button class='key numeric'>3</button>
          <button class='key func'>+</button>
        </div>
        <div class='row'>
          <button class='key numeric'>0</button>
          <button class='key numeric'>&nbsp</button>
          <button class='key numeric'>.</button>
          <button class='key func'>=</button>
        </div>
      </div>
    </div>
</body>
</html>
