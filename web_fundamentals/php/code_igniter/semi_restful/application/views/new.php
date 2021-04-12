<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h3{
            color: red;
        }
    </style>
</head>
<body>
<h3><?= $this->session->flashdata("errors"); ?></h3>
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
</body>
</html>