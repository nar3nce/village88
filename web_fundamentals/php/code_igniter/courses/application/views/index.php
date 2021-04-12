<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    width: 800px;
    text-align: center;
    }
</style>
<body>
    <?php
    echo $this->session->flashdata("errors");
    ?>
    <h1>Add new Course</h1>
    <form action="add" method="post">
        <p>Name :</p>
        <input name="name" type="text">
        <p>desctiption : </p>
        <textarea name="description" id="" cols="30" rows="10"></textarea>
        <p></p>
        <input type="submit" value="submit">
    </form>
    <h1>Courses</h1>
    <table>
        <tr>
            <th>course name</th>
            <th>description</th>
            <th>date</th>
            <th>action</th>
        </tr>
        <?php
        foreach($courses as $index => $courses_){
            //$date = date_create($email_['date']);
        ?>
        <tr>
            <td><?= $courses_['name']; ?></td>
            <td><?= $courses_['description']; ?></td>
            <td><?= $courses_['date']; ?></td>
            <td><a href="destroy/<?= $courses_['id']; ?>">remove</a></td>
        </tr>
        <?php   
        }
        ?>
    </table>

</body>
</html>