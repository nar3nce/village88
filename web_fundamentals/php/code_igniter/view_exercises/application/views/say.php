<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if(is_numeric($number)){
        for($i = 0; $i < $number; $i++){
            echo $word."<br>";
        }
    }
    else{
        echo "Sorry.  This url does not meet our requirement";
    }
    ?>
</body>
</html>