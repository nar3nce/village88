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
<h1>Products Listing</h1>
    <table>
        <tr>
            <th>Manufacturer Name</th>
            <th>product Name</th>
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
    <h1>Add new Product</h1>
    <form action="create" method="post">
        <label>Manufacturer Name :</label>
        <select name="manufacturer" id="">
<?php
        foreach($manufacturer as $manufacturer_){ 
?>
            <option value="<?= $manufacturer_->manufacturer_id; ?>"><?= $manufacturer_->manufacturer_name; ?></option>
<?php
        }
?>
        </select>
        <p></p>
        <label>Product Name :</label>
        <input name="name" type="text">
        <p></p>
        <label>price :</label>
        <input name="price" type="text">
        <p></p>
        <p>desctiption : </p>
        <textarea name="description" id="" cols="30" rows="10"></textarea>
        <p></p>
        <input type="submit" value="submit">
    </form>

    
</body>
</html>