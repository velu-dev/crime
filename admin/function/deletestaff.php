<?php
session_start();
include_once('../../db/dpconfig.php');
$staffid = $_REQUEST['staffid'];
$query = "UPDATE `staffinfo` SET `status`='0' WHERE id='$staffid'";
$result=mysqli_query($conn, $query);
if ($result) {
    $_SESSION['message']['success'] = "<center><span class='col-teal'>Delete Staff..!</span></center>";
    header("Location: ../addstaff.php");
} else {
    $_SESSION['message']['err'] = "<center><span class='col-pink'>Please Try Again..!</span><center>";
    header("Location: ../addstaff.php");
}
?>