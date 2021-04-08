<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            border: 2px solid black;
            width:  200px;
            padding: 10px;
            display: inline-block;
            margin: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>gold :  <?= $gold; ?></h1>
    <div>
        <h1>farm</h1>
        <p>earns 10 - 20 gold</p>
        <form action="process_money" method="post">
            <input type="hidden" name="farm" value="farm" />
            <input name="find_farm" type="submit" value="Find Gold!"/>
        </form>
    </div>
    <div>
        <h1>Cave</h1>
        <p>earns 5 - 10 gold</p>
        <form action="process_money" method="post">
            <input type="hidden" name="cave" value="cave" />
            <input name="find_cave" type="submit" value="Find Gold!"/>
        </form>
    </div>
    <div>
        <h1>House</h1>
        <p>earns 2 - 5 gold</p>
        <form action="process_money" method="post">
            <input type="hidden" name="house" value="house" />
            <input name="find_farm" type="submit" value="Find Gold!"/>
        </form>
    </div>
    <div>
        <h1>Casino</h1>
        <p>earns/takes  0 - 50 gold</p>
        <form action="process_money" method="post">
            <input type="hidden" name="casino" value="casino" />
            <input name="find_casino" type="submit" value="Find Gold!"/>
        </form>
    </div>
    <h2>Activities : </h2>
    <h3></h3>
    <textarea name="" id="" cols="100" rows="10">
    <?php 
        foreach($activity as $activity_){
			echo $activity_.".&#13";
		}
    ?>
    </textarea>
    
</body>
</html>