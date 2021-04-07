<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            border: 2px solid black;
            width:  200px;
            padding: 10px;
            display: inline-block;
            margin: 10px;
            text-align: center;
        }
    </style>
    <?php 
    session_start();
    if(!isset($_SESSION['gold'])){
        $_SESSION['gold'] = 0;
    }
    ?>
</head>
<body>
    <h1>gold : <?= $_SESSION['gold']; ?> </h1>
    <div>
        <h1>farm</h1>
        <p>earns 10 - 20 gold</p>
        <form action="process.php" method="post">
            <input type="hidden" name="farm" value="farm" />
            <input name="farm" type="submit" value="Find Gold!"/>
        </form>
    </div>
    <div>
        <h1>Cave</h1>
        <p>earns 5 - 10 gold</p>
        <form action="process.php" method="post">
            <input type="hidden" name="building" value="farm" />
            <input name="cave" type="submit" value="Find Gold!"/>
        </form>
    </div>
    <div>
        <h1>House</h1>
        <p>earns 2 - 5 gold</p>
        <form action="process.php" method="post">
            <input type="hidden" name="building" value="farm" />
            <input name="house" type="submit" value="Find Gold!"/>
        </form>
    </div>
    <div>
        <h1>Casino</h1>
        <p>earns/takes  0 - 50 gold</p>
        <form action="process.php" method="post">
            <input type="hidden" name="building" value="farm" />
            <input name="casino" type="submit" value="Find Gold!"/>
        </form>
    </div>
    <h2>Activities : </h2>
    <h3></h3>
    <textarea name="" id="" cols="100" rows="10">
    <?php
    if(isset($_SESSION['activity'])){
        foreach($_SESSION['activity'] AS $activity){
            echo $activity."&#13";
        }
    } 
    ?>
    </textarea>
</body>
</html>