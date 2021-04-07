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
    </style>
    <?php
    session_start();
    if(!isset($_SESSION['number'])){
        generate();
    }

    function generate(){
        $_SESSION['number'] = rand(1, 100);
    }
    if(isset($_POST['submit'])){
        $user_guess = $_POST['t_guess'];
        if($user_guess > $_SESSION['number']){
            echo "<script type='text/javascript'>alert('guess lower');</script>";
        }
        else if($user_guess < $_SESSION['number']){
            echo "<script type='text/javascript'>alert('guess higher');</script>";
        }
        else{
            echo "<script type='text/javascript'>alert('WIN! Play Again??');</script>";
            generate();
        }
    }

    ?>
</head>
<body>
    <h1>Welcome to the Great Number Game !</h1>
    <p>Im thinking of number between 1 - 100, take a guess!</p>
    <form method="POST">
        <input type="text" name="t_guess">
        <p></p>
        <input name="submit" type="submit" value="Guess">
    </form>
</body>
</html>