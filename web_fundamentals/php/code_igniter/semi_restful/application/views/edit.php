<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>edit product <?= $product['name']; ?></h1>
    <form action="../update/<?= $product['id']; ?>" method="post">
        <p>Name :</p>
        <input name="name" type="text" value="<?= $product['name']; ?>">
        <p>desctiption : </p>
        <textarea name="description" id="" cols="30" rows="10"><?= $product['description']; ?></textarea>
        <p>price :</p>
        <input name="price" type="text" value="<?= $product['price']; ?>">
        <p></p>
        <input type="submit" value="submit">
    </form>
</body>
</html>