<?php
session_start();
include_once('../../db/dpconfig.php');

$close = $_REQUEST['close'];
$station = $_REQUEST['station'];

$query = "UPDATE `firdetails` SET `status`='0' WHERE id='$close'";
$result=mysqli_query($conn, $query);

if ($result) {

    $sql = "SELECT * FROM policestation WHERE id='$station' AND status ='1'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
                $id = $row["id"];        
                $closedcase = $row["closedcase"];
         }
       }

       $active = $closedcase + 1;

       $queryes = "UPDATE `policestation` SET `closedcase`='$active' WHERE id='$station'";
       $output=mysqli_query($conn, $queryes);

       
    $_SESSION['fir']['success'] = "<center><span class='col-teal'>Case Close Successfully..!</span></center>";
    header("Location: ../viewfir.php");
} else {
    $_SESSION['fir']['err'] = "<center><span class='col-pink'>Please Try Again..!</span><center>";
    header("Location: ../viewfir.php");
}

?>