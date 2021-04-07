<?php 
    include_once 'conn.php'; 
    session_start();
    $_SESSION['errors'] = array();
    $error = 0;
    
    if(isset($_POST['register'])){
        $fullname = escape_string($_POST['fullname']);
        $email = escape_string($_POST['email']);
        $password = escape_string($_POST['password']);
        $encrypted_password = md5($password);
        $date = date('y-m-d');

        
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
            $_SESSION['user_id'] = $user['id'];
            header('Location: main.php');
        }
        else{
            echo "no user";
        }   
        
    }

    if(isset($_POST['post_message'])){
        $user_id = escape_string($_POST['user_id']);
        $message = escape_string($_POST['message']);
        $date = date('y-m-d h:i:s');
        run_query("INSERT INTO `messages` (`message_id`, `user_id`, `message`, `date`) VALUES (NULL, '$user_id', '$message', '$date');");
        header("Location: main.php");
    }

    if(isset($_POST['submit_comment'])){
        $user_id = escape_string($_POST['user_id']);
        $message_id = escape_string($_POST['message_id']);
        $comment = escape_string($_POST['comment']);
        $date = date('y-m-d h:i:s');
        run_query("INSERT INTO `comments` (`comment_id`, `message_id`, `user_id`, `comment`, `date`) VALUES (NULL, '$message_id', '$user_id', '$comment', '$date')");
        header("Location: main.php");
    }

    if(isset($_GET['delete_msg_id'])){
        $msg = $_GET['delete_msg_id'];
        run_query("DELETE FROM `messages` WHERE `messages`.`message_id` = '$msg'");
        header("Location: main.php");
    }

    if(isset($_GET['delete_comment_id'])){
        $comment = $_GET['delete_comment_id'];
        run_query(" DELETE FROM `comments` WHERE `comments`.`comment_id` = '$comment' ");
        header("Location: main.php");
    }

?>