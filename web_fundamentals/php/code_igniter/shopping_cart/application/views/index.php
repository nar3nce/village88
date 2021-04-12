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
            <th>Quantity</th>
            <th>action</th>
        </tr>
        <?php
        foreach($products as $index => $products_){
            
        ?>
        <tr>
            <td><?= $products_['name']; ?></td>
            <td><?= $products_['description']; ?></td>
            <td><?= $products_['price']; ?></td>
            <form action="add" method="post">
            <td><input type="number" name="qty" id="" value="1"></td>
            <input name="id" value="<?= $products_['id']; ?>" type="hidden">
            <td><input type="submit" value="add to cart"></td>
            </form>
        </tr>
        
        <?php   
        }
        ?>
    </table>
    <h2><a href="cart">Your Cart (<?= count((array)$this->session->userdata("cart")); ?>)</a></h2>

</body>
</html>