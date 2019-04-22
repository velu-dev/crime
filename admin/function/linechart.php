<?php
session_start();
include_once('../../db/dpconfig.php');
header('Content-Type: application/json');


$query = sprintf("SELECT id,activecase,closedcase FROM policestation");

//execute query
$result = mysqli_query($conn,$query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
  $data[] = $row;
}

//now print the data
print json_encode($data);