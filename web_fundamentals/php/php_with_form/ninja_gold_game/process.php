<?php
session_start();

if(isset($_POST['farm'])){
    $gold = rand(10, 20);
    $_SESSION['gold'] += $gold;
    $_SESSION['activity'][] =  "You Entered a farm. And earned " . $gold . " Gold.";
    @header('Location: index.php');
}

else if(isset($_POST['cave'])){
    $gold = rand(5, 10);
    $_SESSION['gold'] += $gold;
    $_SESSION['activity'][] =  "You Entered a cave. And earned " . $gold . " Gold.";
    header('Location: index.php');
}

else if(isset($_POST['house'])){
    $gold = rand(2, 5);
    $_SESSION['gold'] += $gold;
    $_SESSION['activity'][] =  "You Entered a house. And earned " . $gold . " Gold.";
    header('Location: index.php');
}

else if(isset($_POST['casino'])){
    $gold = rand(0, 50);

    $value = array('earn', 'take');
    $action = $value[array_rand($value)];
    
    if($action == "earn"){
        $_SESSION['gold'] += $gold;
        $_SESSION['activity'][] =  "You Entered a casino. And earned " . $gold . " Gold.";
        header('Location: index.php');
    }
    else if($action == "take"){
        $_SESSION['gold'] -= $gold;
        $_SESSION['activity'][] =  "You Entered a casino. And lost " . $gold . " Gold.";
        header('Location: index.php');
    }
    //header('Location: index.php');
}


?>
