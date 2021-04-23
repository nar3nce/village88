<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <title>Document</title>
    <script type="text/javascript">
$(document).ready(function() {
    
                
<?php
    foreach($tasks as $tasks_){
?>
$(document).on('change', '#task<?= $tasks_['id']; ?>', function(){
    if (this.checked) {
        $('#form_update<?= $tasks_['id']; ?>').submit();
    }
});

$(document).on('click', '#task_label<?= $tasks_['id']; ?>', function(){
    $(this).hide();
    $('#task_name<?= $tasks_['id']; ?>').each (function() { this.type = 'text'; });     
});
<?php
    }
?>



});
</script>
</head>
<style>
    div{
        margin: 15px;
    }
    .grey{
        color: grey;
    }
</style>
<body>
    <h3>Create a new task</h3>
    <form id="form" action="<?= base_url(); ?>process_add_task" method="post">
        <input type="text" name="task">
        <p></p>
        <input type="submit" value="Add task">
    </form>

    <h2>List of Tasks</h2>
<?php
    foreach($tasks as $tasks_){
?>
    <div>
        <form id="form_update<?= $tasks_['id']; ?>" action="<?= base_url(); ?>process_edit_task" method="post">
        <input id="edit" type="submit" value="edit" name="edit">
        <input type="hidden" name="id" id="id<?= $tasks_['id']; ?>" value="<?= $tasks_['id']; ?>">
<?php
    if($tasks_['status'] == "completed"){
?>
        <input type="checkbox" name="" id="" checked disabled>
        <label class="grey"><?= $tasks_['name']; ?></label>
<?php
    } else {
?>
        <input name="complete_task" type="checkbox" id="task<?= $tasks_['id']; ?>">
        <label for="" id="task_label<?= $tasks_['id']; ?>"><?= $tasks_['name']; ?></label>
        <input type="hidden" name="task_name" id="task_name<?= $tasks_['id']; ?>" value="<?= $tasks_['name']; ?>">
<?php
    }
?>
    </form>
    </div>
<?php
    }
?>
    
    
</body>
</html>