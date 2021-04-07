<?php 
    include_once 'connn.php'; 
    
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $date = date('y-m-d');
        run_query("INSERT INTO `emails` (`id`, `email`, `date`) VALUES (NULL, '$email', '2021-04-06');");
        header('Location: success.php');
    }

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        run_query("DELETE FROM `emails` WHERE `emails`.`id` = '$id'");
        header('Location: success.php');
    }
?>