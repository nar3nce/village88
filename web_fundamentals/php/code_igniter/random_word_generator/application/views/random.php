<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    div{
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 300px;
        text-align: center;
    }
    h1{
        border: 1px solid black;
        padding: 10px;
        
    }
</style>
<body>
    <div>
        <form action="index.php/welcome/generate" method="post">
            <p>Random Word Attempt # <?= $attempt; ?></p>
            <h1><?php 
            foreach($random as $random_){
                echo $random_;
            }
            ?></h1>
            <input type="submit" value="Generate">
        </form>
    </div>
</body>
</html>