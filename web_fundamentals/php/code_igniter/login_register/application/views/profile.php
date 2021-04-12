<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome <?= $this->session->user_info["fullname"]; ?></h1>
    <p>firstname : <?= $this->session->user_info["fullname"]; ?></p>
    <p>Email : <?= $this->session->user_info["email"]; ?></p>
    <a href="../logout">logoff</a>
</body>
</html>