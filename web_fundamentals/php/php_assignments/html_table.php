<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 20%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(5n+2) {
        background-color: #dddddd;
    }
</style>
</head>
<body>
    <?php
    $users = array( 
        array('first_name' => 'Michael', 'last_name' => 'Choi'),
        array('first_name' => 'John', 'last_name' => 'Supsupin'),
        array('first_name' => 'Mark', 'last_name' => 'Guillen'),
        array('first_name' => 'KB', 'last_name' => 'Tonel'),
        array('first_name' => 'Mark', 'last_name' => 'Guillen'),
        array('first_name' => 'janelle', 'last_name' => 'Martinez'),
        array('first_name' => 'divine', 'last_name' => 'Cruz'),
        array('first_name' => 'jhazz', 'last_name' => 'Zapaanta'),
        array('first_name' => 'charisse', 'last_name' => 'Cha'),
        array('first_name' => 'maibel', 'last_name' => 'Almario'),
        array('first_name' => 'lester', 'last_name' => 'Tibar'),
        array('first_name' => 'kenneth', 'last_name' => 'Rico'),
        array('first_name' => 'john', 'last_name' => 'Lester'),
        array('first_name' => 'jomari', 'last_name' => 'Tibar'),
    );
    ?>
    <table>
        <tr>
            <th>User number#</th>
            <th>first_name</th>
            <th>last_name</th>
            <th>length</th>
        </tr>
        <?php foreach($users as $index => $users_){ ?>
        <tr>
            <td><?= $index ?></td>
            <td><?= $users_['first_name']; ?></td>
            <td><?= $users_['last_name']; ?></td>
            <td><?= strlen($users_['first_name'].$users_['last_name']); ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>