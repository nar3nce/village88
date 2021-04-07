<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
    session_start(); 
    if(!isset($_SESSION['email_error'])){

        $_SESSION['email_error'] = "";
        $_SESSION['fname_error'] = "";
        $_SESSION['lname_error'] = "";
        $_SESSION['password_error'] = "";
        $_SESSION['confirm_error'] = "";
        $_SESSION['bday_error'] = "";
    }
    ?>

    <style>
        span{
            color: red;
        }
    </style>
</head>
<body>
    <h1>Registration Form</h1>
        <form action="action.php" method="POST">
            <p></p>
            <label>Email : </label>
            <input type="email" name="email" id="">  <span><?= $_SESSION['email_error']; ?></span>

            <p></p>
            <label>Firstname : </label>
            <input name="fname" type="text"> <span><?= $_SESSION['fname_error']; ?></span>
            
            <p></p>
            <label>Lastname : </label>
            <input name="lname" type="text"> <span><?= $_SESSION['lname_error']; ?></span>

            <p></p>
            <label>Password : </label>
            <input name="password" type="password" name="" id=""> <span><?= $_SESSION['password_error']; ?></span>

            <p></p>
            <label>Confirm Password : </label>
            <input name="password2" type="password" name="" id=""> <span><?= $_SESSION['confirm_error']; ?></span>


            <p></p>
            <label>Birthday : </label>
            <input name="bday" type="date" name="" id=""> <span><?= $_SESSION['bday_error']; ?></span>
            
            <p></p>
            <input name="submit" type="submit" value="create">
        </form>
</body>
</html>