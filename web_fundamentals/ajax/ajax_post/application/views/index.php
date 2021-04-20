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
                $.post($(this).attr('action'), $(this).serialize(), function(res) {
                    $.get('<?=base_url()?>notes/json', function(res) {
                        $('#quotes').html(res);
                    });
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
    <h1>My Posts : </h1>
    <div id="quotes">
        
    </div>

    <h3>add a note</h3>
    <form action="<?=base_url()?>notes/create" method="post">
        <textarea name="description" id="" cols="30" rows="10"></textarea>
        <h6></h6>
        <input id="quotes_submit" type="submit" value="Post">
    </form>
</body>
</html>