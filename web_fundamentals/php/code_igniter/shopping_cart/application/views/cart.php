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
<h1>My Cart</h1>
    <table>
        <tr>
            <th>product Name</th>
            <th>product description</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>total Price</th>
            <th>action</th>
        </tr>
        <?php
        //foreach($products as $index => $products_){
            
        ?>
        <?php
        $total = 0;
        $cart = (array)$this->session->userdata("cart");
        foreach($cart as $index => $cart_){
            $total += $cart_['total'];
        ?>
        <tr>
            <td><?= $cart_['name']; ?> </td>
            <td><?= $cart_['desc']; ?></td>
            <td><?= $cart_['price']; ?></td>
            <td><?= $cart_['qty']; ?></td>
            <td><?= $cart_['total']; ?></td>
            <td><a href="remove/<?= $index; ?>">remove</a></td>
        </tr>
        
        <?php   
        }
        ?>
    </table>
    <h3>total : <?= $total; ?></h3>
</body>
</html>