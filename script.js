$.getJSON("http://api.openweathermap.org/data/2.5/weather"+window.location.search+",In&units=Imperial&APPID=d2ff186b61d4fa60a091e41195f8351a", function(data){
	console.log(data);
	var icon ="https://openweathermap.org/img/w/" + data.weather[0].icon+".png";
	var temp = data.main.temp+" °F";
	var humidity = data.main.humidity+" %";
	var description = data.weather[0].description;

	var location = data.name;
	$('.information').html(location);
	$('.icon').attr('src',icon);
	$('.description').append(description);
	$('.temp').append(temp);
	$('.humidity').append(humidity);

	console.log(window.location.search);
})