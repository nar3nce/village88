<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script>
        
    </script>
<body>
    <h1>Get Direction</h1>
    <form action="<?= base_url(); ?>maps/direction" method="post">
        <label for="">From </label><input type="text" name="origin" id="origin">
        <label for="">To </label><input type="text" name="destination" id="destination">
        <p></p>
        <input type="submit" value="Get Direction!">
    </form>

    <p id="quotes"></p>
</body>
</html>