<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>OpenWeather API</title>
	<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
	<script src="script.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Find The Weather</h1>
	<form method="GET">
		<input type="text" name="q" placeholder="Indian City">
		<button type="submit">Get Weather</button>
	</form>

	<div class="weather-container">
		<p class="information"></p>
		<img class="icon" src="hackberry_hawk.png" height="100">
		<p class="description"><label>Condition: </label></p>
		<p class="humidity"><label>Humidity: </label></p>
		<p class="temp"><label>Temperature: </label></p>
	</div>
</body>
</html>