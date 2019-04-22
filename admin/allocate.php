<?php
session_start();
include_once('../db/dpconfig.php');
if (isset($_SESSION['police']) && $_SESSION['police'] != '') {
     $id = $_SESSION['police']; 
}
$sql = "SELECT * FROM policestation WHERE status='1'";
if ($result = mysqli_query($conn,$sql)){
    $policestation = mysqli_num_rows($result);      
    mysqli_free_result($result);
    }
$sql1 = "SELECT * FROM firdetails WHERE  status != '0'";
    if ($result1=mysqli_query($conn,$sql1)){
    $rowcount = mysqli_num_rows($result1);      
    mysqli_free_result($result1);
    }
$sql2 = "SELECT * FROM staffinfo WHERE  status = '1'";
    if ($result2=mysqli_query($conn,$sql2)){
    $staffinfo = mysqli_num_rows($result2);      
    mysqli_free_result($result2);
    }
$sql3 = "SELECT * FROM firdetails WHERE  status = '0'";
    if ($result3=mysqli_query($conn,$sql3)){
    $close = mysqli_num_rows($result3);      
    mysqli_free_result($result3);
    }
$caseid = $_REQUEST['caseid'];
$sqlfir = "SELECT * FROM firdetails WHERE id='$caseid' AND status != '0'";
$result=mysqli_query($conn, $sqlfir);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $id = $row["id"];        
        $name = $row["name"];
        $city = $row["city"];
        $mobile = $row["mobile"];
        $address = $row["address"];
        $against = $row["against"];
        $reason = $row["reason"];
        $date = $row["date"];
        $description = $row["description"];
        $officer = $row["officer"];
        $status = $row["status"];
        $policestationid = $row['policestationid'];
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | Controll  Room - Coimbatore City</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="assets/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="assets/animate-css/animate.css" rel="stylesheet" />

    <link href="assets/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />

        <!-- Bootstrap Select Css -->
    <link href="assets/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="assets/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="assets/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="assets/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
     <?php require 'topnav.php' ?>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
       <?php require 'leftnav.php' ?>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <?php //require 'rightnav.php' ?>
    
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">accessibility_new</i>
                        </div>
                        <div class="content">
                             <div class="text">CONTROLLED STATIONS</div>
                            <span><?php echo $policestation; ?></span>
                            <!-- <div class="number count-to" data-from="0" data-to="" data-speed="15" data-fresh-interval="20"></div> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person</i>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL STAFF</div>
                            <span><?php echo $staffinfo;?></span>
                            <!-- <div class="number count-to" data-from="0" data-to="<?php// echo $contactno;?>" data-speed="1000" data-fresh-interval="20"></div> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">desktop_access_disabled</i>
                        </div>
                        <div class="content">
                            <div class="text">CLOSED CASE</div>
                            <span><?php echo $close ;?></span>
                            <!-- <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">queue_play_next</i>
                        </div>
                        <div class="content">
                            <div class="text">LIVE CASE</div>
                            <span><?php echo $rowcount; ?> </span>
                            <!-- <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>UPDATE FIR</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <!-- <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul> -->
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                        <form class="form-horizontal" method="post" action="function/updatefir.php">
                            <input type="hidden" name="case_id" value="<?php echo $id;?>">
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Enter Name" value="<?php echo $name;?>" disabled name="username">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">phonelink_ring</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Enter Mobile Number" value="<?php echo $mobile;?>" disabled name="mobile">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon">
                                            <i class="material-icons">directions</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Enter Adddress" value="<?php echo $address;?>" disabled name="address">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">directions_railway</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Enter City" name="city" value="<?php echo $city;?>" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon">
                                            <i class="material-icons">border_color</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Reson for Complaint" value="<?php echo $reason;?>" disabled name="reason">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">how_to_reg</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Against Name" name="against" value="<?php echo $against;?>" disabled >
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon">
                                            <i class="material-icons">today</i>
                                        </span>
                                        <div class="form-group">
                                            <div class="form-line" id="bs_datepicker_container">
                                                <input type="text" class="form-control" value="<?php echo $date;?>" disabled name="date">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">create</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Discription" value="<?php echo $description;?>" disabled name="description">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                             <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">label</i>
                                        </span>
                                        <select class="form-control show-tick" name="officer">
                                        <?php
										$sql = "SELECT * FROM `staffinfo` WHERE policestationid='$policestationid' AND status='1'";
										$result = $conn->query($sql);										
										if ($result->num_rows > 0) {
											while($row = $result->fetch_assoc()) {
												 $name = $row["Name"];	
												 $id = $row["id"];	
												?> <option value="<?php echo $name;?>"><?php echo $name; ?></option>
                                                            <?php											
                                                        }
                                                    }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                </div>
                            <input type="submit" class="btn btn-primary m-t-15 waves-effect" value="SUBMIT">
                        </form>                       
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# CPU Usage -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="assets/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="assets/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="assets/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="assets/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="assets/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="assets/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="assets/raphael/raphael.min.js"></script>
    <script src="assets/morrisjs/morris.js"></script>

    <script src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

    <!-- ChartJs -->
    <script src="assets/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="assets/flot-charts/jquery.flot.js"></script>
    <script src="assets/flot-charts/jquery.flot.resize.js"></script>
    <script src="assets/flot-charts/jquery.flot.pie.js"></script>
    <script src="assets/flot-charts/jquery.flot.categories.js"></script>
    <script src="assets/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="assets/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="assets/admin.js"></script>
    <script src="assets/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="assets/demo.js"></script>
</body>

</html>
