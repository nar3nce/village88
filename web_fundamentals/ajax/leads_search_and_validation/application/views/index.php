<!DOCTYPE HTML>
<html>
<head>
<style>
    body{
        text-align: center;
    }
    table{
        margin-left: auto;
        margin-right: auto;
        margin-top: 10px;
        margin-bottom: 50px;
    }
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        width: 500px;
        text-align: center;
    }

    .pagination {
        display: inline-block;
    }

    .pagination a {
        color: blue;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
    }
</style>
<link rel="stylesheet" type="text/css" href="https://jqueryui.com/resources/demos/style.css">
<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.10.3/themes/eggplant/jquery-ui.css">

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('#date-pick').datepicker({
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        changeYear: true,
    });
    $('#date-pick2').datepicker({
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        changeYear: true,
        onSelect : function (dateText, inst) {
            $('#form').submit(); 
        }
    });
    $('#name').change(function(){
        $('#form1').submit();
    });

    //pagination
    $("#page1").click(function(){
        $("#page_number").val(5);
        $('#form3').submit();
    });
    $("#page2").click(function(){
        $("#page_number").val(10);
        $('#form3').submit();
    });
    $("#page3").click(function(){
        $("#page_number").val(15);
        $('#form3').submit();
    });
    $("#page4").click(function(){
        $("#page_number").val(20);
        $('#form3').submit();
    });

});
</script>
</head>
<body>
    <h1>list of customers and # of leads</h1>
    <form action="change_date" id="form1" method="post">
        <input id="name" type="text" name="name" placeholder="Search Name">
        <p></p>
    </form>

    <form action="change_date" id="form3" method="post">
        <input id="page_number" type="hidden" name="page_number" placeholder="Search Name">
    </form>


    <form action="change_date" id="form" method="post">
        <input type="text" name="from_date" min="2011-01-01" value="2011-01-01" id="date-pick"> - <input type="text" value="2013-12-31" max="2013-12-31"  name="to_date" id="date-pick2">
    </form>


    <div class="pagination">
    <a href="#">&laquo;</a>
    <a id="page1" href="#">1</a>
    <a id="page2" href="#">2</a>
    <a id="page3" href="#">3</a>
    <a id="page4" href="#">4</a>
    <a href="#">&raquo;</a>
    </div>
    
    <table>
        <tr>
            <th>Customer Name</th>
            <th>Number of Leads</th>
        </tr>
        <?php foreach($customer as $customer_){ ?>
        <tr>
            <td><?= $customer_['client_name'] ?></td>
            <td><?= $customer_['num_leads'] ?></td>
        </tr>
        <?php } ?>
    </table>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>

</body>
</html>