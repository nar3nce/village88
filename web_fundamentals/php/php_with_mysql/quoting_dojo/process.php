<?php 
    include_once 'conn.php'; 
    
    if(isset($_POST['submit'])){
        $name = escape_string($_POST['name']);
        $quote = escape_string($_POST['quote']);
        $date = date('y-m-d');
        run_query("INSERT INTO `quotes` (`id`, `name`, `quote`, `date`) VALUES (NULL, '$name', '$quote', '$date');");
        header('Location: main.php');
    }

?>