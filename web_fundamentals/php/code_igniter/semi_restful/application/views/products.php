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
    <h1>Products</h1>
    <table>
        <tr>
            <th>product Name</th>
            <th>product description</th>
            <th>Price</th>
            <th>action</th>
        </tr>
        <?php
        foreach($products as $index => $products_){
            
        ?>
        <tr>
            <td><?= $products_['name']; ?></td>
            <td><?= $products_['description']; ?></td>
            <td><?= $products_['price']; ?></td>
            <td><a href="show/<?= $products_['id']; ?>">show</a> <a href="edit/<?= $products_['id']; ?>">edit</a> <a href="destroy/<?= $products_['id']; ?>">remove</a></td>
        </tr>
        <?php   
        }
        ?>
    </table>
    <h2><a href="new">add new product</a></h2>

</body>
</html>