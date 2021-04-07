<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .tr1 td{
            width: 50px;
            height: 50px;
            background-color: #808080;
            border: 2px solid black;
            color: white;
            text-align: center;
        }
        .tr2 td{
            width: 50px;
            height: 50px;
            background-color: white;
            border: 2px solid black;
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <?php
        for($i = 1; $i < 10; $i++){
        ?>
            <?php 
            $style = "";
            if($i % 2 == 0){
                $style = "tr1";
            }
            else {
                $style = "tr2";
            }
            ?>
        <tr class="<?php echo $style; ?>">
            <?php
            for($j = 1; $j <10; $j++) { 
                $output = $i * $j;
            echo "<td>$output</td>";
            }    
            
            ?>
        </tr>
        <?php } ?>
    </table>

</body>
</html>
