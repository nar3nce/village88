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
        width: 800px;
        text-align: center;
        }
    </style>
</head>
<body>
    <h1>Add new Product</h1>
    <form action="create" method="post">
        <p>Name :</p>
        <input name="name" type="text">
        <p>desctiption : </p>
        <textarea name="description" id="" cols="30" rows="10"></textarea>
        <p>price :</p>
        <input name="price" type="text">
        <p></p>
        <input type="submit" value="submit">
    </form>

    <h1>Products</h1>
    <table>
        <tr>
            <th>product Name</th>
            <th>product description</th>
            <th>Price</th>
            <th>Date Created</th>
            <th>action</th>
        </tr>
<?php   
        foreach($products as $products_){ 
?>
        <tr>
            <td><?= $products_->name; ?></td>
            <td><?= $products_->description; ?></td>
            <td><?= $products_->price; ?></td>
            <td><?= $products_->date_created; ?></td>
            <td><a href="delete/<?= $products_->id; ?>">delete</a></td>
        </tr>
<?php 
        }
?>
    </table>
</body>
</html>