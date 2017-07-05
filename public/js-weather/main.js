// Input/form
var zipInput = document.getElementById('zipInput');
var weatherButton = document.getElementById('weatherButton');

// Output
var cityOutput = document.getElementById('cityOutput');
var temperatureOutput = document.getElementById('temperatureOutput');
var conditionOutput = document.getElementById('conditionOutput');
var weatherImage = document.getElementById('weatherImage');
var error = document.getElementById('error');
var errorMessage = document.getElementById('errorMessage');
var output = document.getElementById('output');
var apiRequest;

// Waits for page to load before firing
document.onreadystatechange = function () {
    if (document.readyState == "interactive") {
        // Initialize your application or run some code.
        start();
    }
};

function start() {
  weatherButton.onclick = getWeather;
}

// Fetch weather data from API endpoint when user clicks 
// the submit button
function getWeather() {
  var url = "http://api.openweathermap.org/data/2.5/weather?zip=<zipCode>&us&appid=ef6a94dab254dc386b931af4d5ca58c7";
  url = url.replace("<zipCode>",zipInput.value );
  console.log(url);
  apiRequest = new XMLHttpRequest();
  apiRequest.onload = catchResponse;
  apiRequest.onerror = httpRequestOnError;
  apiRequest.open('get', url, true);
  apiRequest.send();
}

// Show error message
function httpRequestOnError() {
  alert("Request Error: Try using Http instead of Https. Ex: http://codepen.io");
}

// Catches the response and determines status
function catchResponse() {
  console.log(apiRequest.statusText);
  if (apiRequest.statusText == "OK") {
    parseResponse(JSON.parse(this.responseText));
  } else {
    console.dir(this.responseText);
    errorMessage.innerHTML = JSON.parse(this.responseText).message;
    error.style.display = 'block';
    output.style.display = 'none';
  }
}

// Parses JSON object
function parseResponse(results) {
  console.log(results);
  var city = results.name;
  var tempK = results.main.temp;
  var tempF = kelvinToFahrenheit(tempK);
  var tempC = kelvinToCelsius(tempK);
  var conditions = results.weather[0].description;
  displayWeather(city, tempK, tempF, tempC, conditions); //Calls display func
  displayImage(tempF); 
  console.log(tempC);

  error.style.display = 'none';
  output.style.display = 'block';

}

// Convert temperature from K to F
// Formula: T(°F) = 300K × 9/5 - 459.67 = 80.33 °F
function kelvinToFahrenheit(tempK) {
  var tempF = tempK * (9 / 5) - 459.67;
  return Math.round(tempF);
}

// Convert temperature from K to C
// Formula: T(°C) = 300K - 273.15 = 26.85 °C
function kelvinToCelsius(tempK) {
  var tempC = tempK - 273.15;
  return Math.round(tempC);
}

// Updates the DOM with data
function displayWeather(city, tempK, tempF, tempC, conditions) {
  cityOutput.innerHTML = city;
  temperatureOutputK.innerHTML = tempK + 'K';
  temperatureOutputF.innerHTML = tempF + 'F';
  temperatureOutputC.innerHTML = tempC + 'C';
   conditionOutput.innerHTML = conditions;
}

// Select an image to display based on temperature
function displayImage(tempF) {
  if (tempF > 75) {
    weatherImage.src = "http://bit.ly/2mLNXtv";
  } else if (tempF > 50) {
    weatherImage.src = "http://bit.ly/2mqbYWe";
  } else {
    weatherImage.src = "http://bit.ly/2mqimfZ";
  }
}