<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script>
        $(document).ready(function(){
            $('form').submit(function(){
                $.post($(this).attr('action'), $(this).serialize(), function(url) {
                    $("#result").val(url);
                });
                return false;
            });
        });
    </script>
</head>
<style>
    p{
        display: inline-block;
        border: 1px solid black;
        padding: 20px;
        margin: 10px;
    }
</style>
<body>
    <h3>Input url to fetch by Ajax</h3>
    <form action="<?=base_url()?>api/http_analyze" method="post">
        <input type="text" name="url">
        <h6></h6>
        <input id="quotes_submit" type="submit" value="Post">
    </form>
    <h1>http response : </h1>
    <textarea name="" id="result" cols="120" rows="30"></textarea>
</body>
</html>