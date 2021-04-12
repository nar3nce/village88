<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h4{
        text-align: center;
        color: red;
    }
    form{
        border: 1px solid black;
        width:  250px;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
        margin-bottom: 10px;
        padding: 20px;
    }
    
</style>
<body>
    <h4><?= $this->session->flashdata("errors"); ?></h4>
    <form action="register" method="post">
        <h1>Register</h1>
        <p>fullname : </p>
        <input type="text" name="fullname" id="" >
        <p>email : </p>
        <input type="text" name="email" id="" >
        <p>password : </p>
        <input type="password" name="password" id="" >
        <p></p>
        <p>Confirm password : </p>
        <input type="password" name="confirm" id="" >
        <p></p>
        <input type="submit" value="Register" name="register">
    </form>


    <h4><?= $this->session->flashdata("login_message"); ?></h4>
    <form action="login" method="post">
        <h1>Login</h1>
        <p>email : </p>
        <input type="text" name="email" id="" >
        <p>password : </p>
        <input type="password" name="password" id="" >
        <p></p>
        <input type="submit" value="Login" name="login">
    </form>
</body>
</html>