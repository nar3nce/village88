<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Product</h1>
    <form action="add" method="post">
        <p>Name : <?=$product['name']; ?></p>
        <p>desctiption : <?=$product['description']; ?></p>
        <p>price : <?=$product['price']; ?></p>
        <p></p>
        <p><a href="../edit/<?= $product['id']; ?>">edit</a> / <a href="http://localhost/village88/web_fundamentals/php/code_igniter/semi_restful/">back</a></p>
    </form>
</body>
</html>