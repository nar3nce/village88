<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="process.php" method="post">
        <h1>Welcome to quoting dojo !</h1>
        <p>Your name : </p>
        <input type="text" name="name" id="" required>
        <p>Your quote : </p>
        <textarea name="quote" id="" cols="30" rows="10" required></textarea>
        <p></p>
        <input type="submit" value="add quote" name="submit">
        <input type="button" onclick="window.location.href='main.php'"  value="skip to quotes" name="submit">
    </form>
</body>
</html>