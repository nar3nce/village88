<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<title>Document</title>
</head>
<script>
        $(document).ready(function(){
            var key = "519eed86bc926c863952f9baf652788e"; 
            $('form').submit(function(){
                $.post($(this).attr('action'), $(this).serialize(), function(city) {
                    $.get('https://api.openweathermap.org/data/2.5/weather?q='+ city +'&APPID='+ key, function(weather) {
                        //alert(weather.weather[0].description);
                        $("#weather").append(
                            '<h2>' +weather.name +'</h2>',
                            '<h3> Forecast: ' + weather.weather[0].description + '</h3>',
                            '<p> Temperature: ' + Math.ceil((1.8*(weather.main.temp - 273) + 32)) +'</p>',
                            '<p> Max Temperature: ' + Math.ceil((1.8*(weather.main.temp_max - 273) + 32)) + '</p>',
                            '<p> Min Temperature: ' + Math.ceil((1.8*(weather.main.temp_min - 273) + 32)) + '</p>'
                        );
                    });
                });
                return false;
            });
        });
</script>
<body>
    <h2>Weather Api</h2>
    <form action="<?=base_url()?>get_weather" method="post">
        <label for="city">Enter a city</label>
        <input type="text" name="city">
        <input type="submit" value="Search">
    </form>

    <div id="weather">
    </div>
</body>
</html>
