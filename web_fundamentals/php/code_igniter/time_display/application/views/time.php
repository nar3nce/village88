<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    p, h1{
        border: 1px solid black;
        padding: 20px;
        width: 250px;
        margin-left: auto;
        margin-right: auto;
    }
</style>
<body>
    <p>The Current time and Date </p> 
    <h1><?= date_format($date,"F m, Y  h:i:s"); ?>  </h1>
</body>
</html>