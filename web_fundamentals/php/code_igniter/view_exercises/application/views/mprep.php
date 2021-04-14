<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>User Name: <?= $name; ?></h1>
    <h2>User Age: <?= $age; ?>, Location: <?= $location; ?></h2>
    <h3>5 Hobbies</h3>
    <ul>
        <?php 
        foreach($hobbies as $hobbies_){
        ?>
        <li><?= $hobbies_; ?></li>
        <?php
        }
        ?>
    </ul>
</body>
</html>