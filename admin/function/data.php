<?php
session_start();
include_once('../../db/dpconfig.php');
header('Content-Type: application/json');

$sqlQuery = "SELECT id,name,activecase FROM policestation ORDER BY id";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

echo json_encode($data);