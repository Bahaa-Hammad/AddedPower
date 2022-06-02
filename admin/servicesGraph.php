<?php
session_start();

include 'connect.php';
include 'Includes/templates/header.php';


$stmt = $con->prepare("SELECT * FROM services_booked where service_id = 1;");
$stmt->execute(array());
$rows = $stmt->fetchAll();
$EngineDiagnosticsCount = $stmt->rowCount();

$stmt = $con->prepare("SELECT * FROM services_booked  where  service_id = 2");
$stmt->execute(array());
$rows = $stmt->fetchAll();
$LubeOilandFiltersCount = $stmt->rowCount();

$stmt = $con->prepare("SELECT * FROM services_booked  where  service_id = 3");
$stmt->execute(array());
$rows = $stmt->fetchAll();
$BeltsandHosesCount = $stmt->rowCount();

$stmt = $con->prepare("SELECT * FROM services_booked  where  service_id = 4");
$stmt->execute(array());
$rows = $stmt->fetchAll();
$AirConditioningCount = $stmt->rowCount();

$stmt = $con->prepare("SELECT * FROM services_booked  where  service_id = 5");
$stmt->execute(array());
$rows = $stmt->fetchAll();
$BrakeRepairCount = $stmt->rowCount();

$stmt = $con->prepare("SELECT * FROM services_booked  where  service_id = 6");
$stmt->execute(array());
$rows = $stmt->fetchAll();
$TireandWheelServicesCount = $stmt->rowCount();
 
$dataPoints = array(
	array("label"=> "Engine Diagnostics", "y"=> $EngineDiagnosticsCount),
	array("label"=> "A Lube Oil and Filters", "y"=> $LubeOilandFiltersCount),
	array("label"=> "Belts and Hoses", "y"=> $BeltsandHosesCount),
	array("label"=> "Air Conditioning", "y"=> $AirConditioningCount),
	array("label"=> "Brake Repair", "y"=> $BrakeRepairCount),
	array("label"=> "Tire and Wheel Services", "y"=> $TireandWheelServicesCount),
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
		text: " Booked Services "
	},
	subtitles: [{
		text: "Based On Current and Upcomming Appoinments"
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