<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php/surveys/process_form" method="POST">
        <p></p>
        <label>Firstname : </label>
        <input type="text" name="fname">

        <p></p>
        <label>Dojo Location : </label>
        <select name="location" id="">
            <option value="philippines">philippines</option>
            <option value="canada">canada</option>
            <option value="america">america</option>
        </select>

        <p></p>
        <label>Favorite Language : </label>
        <select name="language" id="">
            <option value="JavaScript">JavaScript</option>
            <option value="PHP">PHP</option>
            <option value="C#">C#</option>
        </select>

        <p>Comment :</p>
        <textarea name="comment" id="" cols="30" rows="10"></textarea>
        
        <p></p>
        <input name="submit" type="submit" value="submit">
    </form> 
</body>
</html>