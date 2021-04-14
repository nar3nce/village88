<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .left{
        border: 1px solid black;
        display: inline-block;
        padding: 20px;
        height: 400px;
    }
    .right{
        border: 1px solid black;
        display: inline-block;
        padding: 20px;
        vertical-align: top;
        height: 400px;
        width: 800px;
    }
    .right img{
        width: 100px;
    }
    .right div{
        display: inline-block;
        margin: 10px;
        text-align: center;
    }
</style>
<body>
    <div class="left">
        <form action="search" method="post">
            <h3>Search Users</h3>
            <input name="name" type="text">
            <p></p>
            <input type="checkbox" name="gender[]" value="female" id=""><label for=""> Female</label>
            <p></p>
            <input type="checkbox" name="gender[]" value="male"  id=""><label for=""> Male</label>
            <h3>Sports</h3>
            <input type="checkbox" name="sport[]" value="boxer" id=""><label for=""> Boxing</label>
            <p></p>
            <input type="checkbox" name="sport[]" value="cyclist" id=""><label for=""> Cycling</label>
            <p></p>
            <input type="checkbox" name="sport[]" value="diver" id=""><label for=""> Diving</label>
            <p></p>
            <input type="checkbox" name="sport[]" value="fencer" id=""><label for=""> Fencer</label>
            <p></p>
            <input type="checkbox" name="sport[]" value="curler" id=""><label for=""> Curling</label>
            <p></p>
            <input type="submit" value="search">
        </form>
    </div>
    <div class="right">
        <?php
        if($this->session->flashdata('players')){
        $players = $this->session->flashdata('players');
        foreach ($players as $players_) {
        ?>
        <div>
            <img src="https://www.marismith.com/wp-content/uploads/2014/07/facebook-profile-blank-face.jpeg" alt="">
            <p><?= $players_['name']; ?></p>
        </div>
        <?php
        }
        }
        ?>
    </div>
</body>
</html>