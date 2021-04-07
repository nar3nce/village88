<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .td2{
            width: 50px;
            height: 50px;
            background-color: #FF0000;
            border: 2px solid black;
            color: white;
            text-align: center;
        }
        .td1{
            width: 50px;
            height: 50px;
            background-color: black;
            border: 2px solid black;
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        
        <?php for($i = 1; $i < 5; $i++){?>
        <div>
            <tr>
                <?php for($j = 1; $j < 5; $j++){?>
                    <td class="td1"></td>
                    <td class="td2"></td>
                <?php } ?>
            </tr>
        </div>
        <div>
            <tr>
                <?php for($j = 1; $j < 5; $j++){?>
                    <td class="td2"></td>
                    <td class="td1"></td>
                <?php } ?>
            </tr>
        </div>
        <?php } ?>
    </table>
</body>
</html>