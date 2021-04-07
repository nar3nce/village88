<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        width: 50%;
        }
    </style>
    <?php 
    include_once 'connn.php'; 


    ?>
</head>
<body>
    <table>
        <tr>
            <th>email</th>
            <th>date</th>
            <th>action</th>
        </tr>
        <?php
        
        $email = display_all("select * from emails");
        foreach($email as $index => $email_){
            $date = date_create($email_['date']);
        ?>
        <tr>
            <td><?= $email_['email']; ?></td>
            <td><?= date_format($date,"F m, Y"); ?></td>
            <td><a href="action.php?id=<?= $email_['id']; ?>">delete</a></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>