<html>
<head>
<title>Weather App</title>
<link rel="stylesheet" 
  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
  crossorigin="anonymous">
<link rel="stylesheet" href="/js-weather/style.css">
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script 
  src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
  crossorigin="anonymous"></script>
</head>
<body>
<div class='app container'>

  <h1>Weather App</h1>

  <div id="input-form" class="panel panel-default">
    <div class="panel-heading">
      <div class="panel-title">Zipcode</div>
    </div>
    <div class="panel-body">
      <div class="input-group">
        <input type="number" id="zipInput" class="form-control" id="zipInput" placeholder="Enter zipcode...">
        <span class="input-group-btn">
          <button class="btn btn-primary" id="weatherButton" type="button">Get Weather</button>
        </span>
      </div>
    </div>
  </div>

  <div id="error">

    <div id="input-form" class="panel panel-danger">
      <div class="panel-heading">
        <div class="panel-title">Error</div>
      </div>
      <div class="panel-body">
        <p id='errorMessage'></p>
      </div>
    </div>
  </div>
  
  <div id="output">

    <div id="input-form" class="panel panel-success">
      <div class="panel-heading">
        <div class="panel-title">City</div>
      </div>
      <div class="panel-body">
        <p id='cityOutput'></p>
      </div>
    </div>

    <div id="input-form" class="panel panel-success">
      <div class="panel-heading">
        <div class="panel-title">Condition</div>
      </div>
      <div class="panel-body">
        <p id='conditionOutput'></p>
      </div>
    </div>

    <div id="input-form" class="panel panel-success">
      <div class="panel-heading">
        <div class="panel-title">Temperature</div>
      </div>
      <table class="table">
        <tr>
          <th>Kelvin</th>
          <th>Fahrenheit</th>
          <th>Celcius</th>
        </tr>
        <tr>
          <td><p id='temperatureOutputK'></p></td>
          <td><p id='temperatureOutputF'></p></td>
          <td><p id='temperatureOutputC'></p></td>
        </tr>
      </table>
    </div>

    <div id="input-form" class="panel panel-success">
      <div class="panel-heading">
        <div class="panel-title">Season Display</div>
      </div>
      <div class="panel-body">
        <img alt='' src='' id='weatherImage' width='300'>
      </div>
    </div>
  
</div>
</body>
<script src="/js-weather/main.js"></script>
</html>