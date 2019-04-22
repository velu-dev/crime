<?php
session_start();
include_once('../../db/dpconfig.php');

$case_id = $_REQUEST['case_id'];
$officer = $_REQUEST['officer'];

$query = "UPDATE `firdetails` SET `officer`='$officer',`status`='2' WHERE id='$case_id'";
$result=mysqli_query($conn, $query);

if ($result) {
    $_SESSION['message']['success'] = "<center><span class='col-teal'>Staff Allocated successfully..!</span></center>";
    header("Location: ../viewfir.php");
} else {
    $_SESSION['message']['err'] = "<center><span class='col-pink'>Please Try Again..!</span><center>";
    header("Location: ../viewfir.php");
}

?>