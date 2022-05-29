<?php
//edit.php
include '../connect.php';
include '../Includes/functions/functions.php';

$query = "
SELECT * FROM tbl_image 
WHERE image_id = '" . $_POST["image_id"] . "'
";
$statement = $con->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

foreach ($result as $row) {
    $file_array = explode(".", $row["image_name"]);
    $output['image_name'] = $file_array[0];
    $output['image_description'] = $row["image_description"];
}

echo json_encode($output);
