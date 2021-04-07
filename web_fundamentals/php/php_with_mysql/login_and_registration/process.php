<?php 
    include_once 'conn.php'; 
    session_start();
    $error = 0;
    
    if(isset($_POST['register'])){
        $fullname = escape_string($_POST['fullname']);
        $email = escape_string($_POST['email']);
        $password = escape_string($_POST['password']);
        $encrypted_password = md5($password);
        $date = date('y-m-d');

        $_SESSION['errors'] = array();
        if(empty($fullname)){
            $_SESSION['errors'][] = "enter fullname";
            $error++;
        }
        if(empty($email)){
            $_SESSION['errors'][] = "enter email";
            $error++;
        }
        if(empty($password)){
            $_SESSION['errors'][] = "enter password";
            $error++;
        }
        if($error == 0){
            run_query("INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `date`) VALUES (NULL, '$fullname', '$email', '$encrypted_password', '$date');");
            header('Location: index.php');
        }
        else{   
            header('Location: index.php'); 
        }
        
    }

    if(isset($_POST['login'])){
        $email = escape_string($_POST['email']);
        $password = escape_string($_POST['password']);
        $encrypted_password = md5($password);

        $sql = "SELECT * from users where email = '$email' and password = '$encrypted_password'";
        $user = display($sql);

        if(count($user > 0)){
            $_SESSION['fullname'] = $user['fullname'];
            header('Location: main.php');
        }
        else{
            echo "no user";
        }   
        
    }

?>