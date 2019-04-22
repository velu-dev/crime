<?php
session_start();
include_once('../../db/dpconfig.php');
 $stationid = $_REQUEST['stationid'];
 $username = $_REQUEST['username'];
 $address = $_REQUEST['address'];
 $city = $_REQUEST['city'];
 $mobile = $_REQUEST['mobile'];
 $reason = $_REQUEST['reason'];
 $against = $_REQUEST['against'];
 $date = $_REQUEST['date'];
 $description = $_REQUEST['description'];
 $status ='1';
      $query = "INSERT INTO `firdetails`(`policestationid`, `name`, `address`, `city`, `mobile`, `reason`, `against`, `date`, `description`, `officer`, `status`) VALUES ('$stationid','$username','$address','$city',' $mobile',' $reason',' $against','$date','$description','','$status')";
      $excute=mysqli_query($conn, $query);
     
        if ($excute) {

         $sql = "SELECT * FROM policestation WHERE id='$stationid' AND status ='1'";
         $result = $conn->query($sql);
         if ($result->num_rows > 0) {
             while($row = $result->fetch_assoc()) {
                     $id = $row["id"];        
                     $activecase = $row["activecase"];
              }
            }

            $active = $activecase + 1;

            $queryes = "UPDATE `policestation` SET `activecase`='$active' WHERE id='$stationid'";
            $output=mysqli_query($conn, $queryes);

            $_SESSION['police'] = $stationid;
            $_SESSION['fir']['success'] = "<center><span class='col-teal'>Added New FIR..!</span></center>";
           header("Location: ../viewfir.php");
        } else {
            $_SESSION['fir']['err'] = "<center><span class='col-pink'>Please Try Again..!</span><center>";
           header("Location: ../viewfir.php");
        }