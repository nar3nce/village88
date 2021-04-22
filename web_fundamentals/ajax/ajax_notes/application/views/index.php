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

            $.get('<?=base_url()?>notes/json', function(res) {
                        $('#quotes').append(res);
            });

            //delete
            $(document).on('click', 'p', function(){
                var alrt =  $(this).text();
                $("#d_id").val(alrt);
                $('#delete_form').submit();
            });

            //UPDATE
            $(document).on('click', 'h4', function(){
                $( this ).replaceWith( "<textarea>" + $( this ).text() + "</textarea>" );
                var alrt =  $(this).text();
                alert(alrt);
            });

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
        
    .notes{
        border: 1px solid black;
        display: inline-block;
        padding: 20px;
        margin: 10px;
    }
    span{
        display: inline;
    }
</style>
<body>
    <h1>My Posts : </h1>
    <div class="" id="quotes">
    </div>
    <h3>add a note</h3>

    
    <form id="delete_form" action="<?=base_url()?>delete" method="post">
        <input type="hidden" name="delete_id" id="d_id">
    </form>

    <form action="<?=base_url()?>notes/create" method="post">
        <h4>title</h4>
        <input type="text" name="title">
        <h4></h4>
        <textarea name="description" id="" cols="30" rows="10"></textarea>
        <h6></h6>
        <input id="quotes_submit" type="submit" value="Post">
    </form>
</body>
</html>