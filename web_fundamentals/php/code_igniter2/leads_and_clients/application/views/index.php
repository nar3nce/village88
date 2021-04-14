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
        margin-top: 50px;
        margin-bottom: 50px;
    }
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    width: 500px;
    text-align: center;
    }
</style>
<script>
window.onload = function () {

var options = {
	title: {
		text: "Customers and number of leads"
	},
	subtitles: [{
		text: "January 1, 2011 to December 31, 2011?"
	}],
	animationEnabled: true,
	data: [{
		type: "pie",
		startAngle: 40,
		toolTipContent: "<b>{label}</b>: {y}%",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - {y}%",
		dataPoints: [
            <?php foreach($customer as $customer_){ ?>
			{ y: <?= $customer_['num_leads'] ?>, label: "<?= $customer_['client_name'] ?>" },
            <?php
            }
            ?>
		]
	}]
};
$("#chartContainer").CanvasJSChart(options);

}
</script>
</head>
<body>
    <h1>list of customers and # of leads</h1>
    <form action="change_date" method="post">
        <input type="date" name="from_date" min="2011-01-01" value="2011-01-01" id=""> - <input type="date" value="2013-12-31" max="2013-12-31"  name="to_date" id="">
        <input type="submit" value="update">
    </form>
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
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
</body>
</html>