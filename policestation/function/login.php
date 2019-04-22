<?php
session_start();
include_once('../../db/dpconfig.php');
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$md5 = md5($password);
$sql = "SELECT * FROM policestation WHERE id='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
         $uname = $row["id"];
         $upassword = $row["password"];
         if( $uname == $username && $upassword == $md5){
             $_SESSION['police'] = $uname;
            header('Location: ../dashboard.php');
         }
    }
}
?>