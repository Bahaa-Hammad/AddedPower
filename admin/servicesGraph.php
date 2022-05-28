<?php


$stmt = $con->prepare("SELECT * FROM services_booked s where = service_id = 1");
$stmt->execute(array());
$rows = $stmt->fetchAll();
$EngineDiagnosticsCount = $stmt->rowCount();

$stmt = $con->prepare("SELECT * FROM services_booked s where = service_id = 2");
$stmt->execute(array());
$rows = $stmt->fetchAll();
$LubeOilandFiltersCount = $stmt->rowCount();

$stmt = $con->prepare("SELECT * FROM services_booked s where = service_id = 3");
$stmt->execute(array());
$rows = $stmt->fetchAll();
$BeltsandHosesCount = $stmt->rowCount();

$stmt = $con->prepare("SELECT * FROM services_booked s where = service_id = 4");
$stmt->execute(array());
$rows = $stmt->fetchAll();
$AirConditioningCount = $stmt->rowCount();

$stmt = $con->prepare("SELECT * FROM services_booked s where = service_id = 5");
$stmt->execute(array());
$rows = $stmt->fetchAll();
$BrakeRepairCount = $stmt->rowCount();

$stmt = $con->prepare("SELECT * FROM services_booked s where = service_id = 6");
$stmt->execute(array());
$rows = $stmt->fetchAll();
$TireandWheelServicesCount = $stmt->rowCount();
 
$dataPoints = array(
	array("label"=> "Food + Drinks", "y"=> $EngineDiagnosticsCount),
	array("label"=> "Activities and Entertainments", "y"=> $LubeOilandFiltersCount),
	array("label"=> "Health and Fitness", "y"=> $BeltsandHosesCount),
	array("label"=> "Shopping & Misc", "y"=> $AirConditioningCount),
	array("label"=> "Transportation", "y"=> $BrakeRepairCount),
	array("label"=> "Rent", "y"=> $TireandWheelServicesCount),
);
	
?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	title:{
		text: "Average Expense Per Day  in Thai Baht"
	},
	subtitles: [{
		text: "Currency Used: Thai Baht (฿)"
	}],
	data: [{
		type: "pie",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - #percent%",
		yValueFormatString: "฿#,##0",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>  