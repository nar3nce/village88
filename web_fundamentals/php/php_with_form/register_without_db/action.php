<?php
session_start();
$error = 0;

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $password = $_POST['password'];
    $confirm_password = $_POST['password2'];
    $bday = $_POST['bday'];

    

    if(empty($email)){
        $_SESSION['email_error'] = "Enter email";
        $error++;
        
    }

    if(is_numeric($fname)){
        $_SESSION['fname_error'] = "Firstname must be string";
        $error++;
        
    }

    if(is_numeric($lname)){
        $_SESSION['lname_error'] = "Lastname must be string";
        $error++;
    }

    if($confirm_password != $password){
        $_SESSION['confirm_error'] = "Password not match";
        $error++;
    }

    if(strlen($password) < 7){
        $_SESSION['password_error'] = "password should be more than 6 characters";
        $error++;
    }

    if(empty($bday)){
        $_SESSION['bday_error'] = "Invalid date";
        $error++;
    }


    if($error == 0){
        echo "Thanks for submitting your information.";
        session_destroy();
    }
    else{
        header("Location: index.php");  
    }

    
    
}

?>