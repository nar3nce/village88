<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        text-align: center;
    }
        div{
            border: 1px solid rgb(65,192,192);
            width: 250px;
            padding: 10px;
            margin: 10px;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
    <h1>Here are some Awsome Quotes</h1>
    <?php
    include_once 'conn.php'; 
    $quotes = display_all("select * from quotes");

    foreach($quotes as $quotes_){
        $date = date_create($quotes_['date']);
    ?>
        <div>
            <h3><?= $quotes_['quote']; ?></h3>
            <p>-<?= $quotes_['name']; ?> at <?= date_format($date,"F m, Y"); ?></p>
        </div>
    <?php
    }
    ?>
</body>
</html>