<!DOCTYPE html>
<html>
    <head>
    <?php header('Access-Control-Allow-Origin: *'); ?>

        <meta charset="utf-8">
        <title>Gotta Catch'em All</title>
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script>
            $(document).ready(function(){
                $.get("http://pokeapi.co/api/v1/pokemon/1/", function(res) {
    console.log(res.types[0].name);
    console.log(res.types[1].name);
},  "json");
            })
        </script>
    </head>
    <body>
        <div id="bulbasaur">
        </div>
    </body>
</html>
