<?php
session_start();
include_once('../../db/dpconfig.php');
$firstname          = $_REQUEST['firstname'];
$depearment         = $_REQUEST['depearment'];
$email              = $_REQUEST['email'];
$police             = $_REQUEST['police'];
$mobile             = $_REQUEST['mobile'];
$register           = $_REQUEST['register'];
$city               = $_REQUEST['city'];
$address            = $_REQUEST['address'];
// $password           = $_REQUEST['password'];
// $confirmpassword    = $_REQUEST['confirmpassword'];
$status = "1";

// $pass = md5($password);
// $cpass = md5($confirmpassword);

// if($password != $confirmpassword){
//           $_SESSION['message']['err'] = "<div class = 'alert alert-danger'><span class = 'label label-danger'>Password And Confirm Password Not Same.!</span></div>";
//             header("Location: ../staffregister.php");
// }
// else{
     $query = "INSERT INTO `staffinfo`(`Name`, `posting`, `E-Mail`, `policestationid`, `Mobile`, `Staffid`, `Address`, `City`,`Status`) VALUES ('$firstname','$depearment','$email','$police','$mobile','$register','$city','$address','$status')";
     $result=mysqli_query($conn, $query);
     
        if ($result) {
            $_SESSION['message']['success'] = "<center><span class='col-teal'>Added New Staff..!</span></center>";
            header("Location: ../addstaff.php");
        } else {
            $_SESSION['message']['err'] = "<center><span class='col-pink'>Please Try Again..!</span><center>";
            header("Location: ../addstaff.php");
        }
    //}

