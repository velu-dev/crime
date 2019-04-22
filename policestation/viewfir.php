<?php
session_start();
include_once('../db/dpconfig.php');
if (isset($_SESSION['police']) && $_SESSION['police'] != '') {
     $id = $_SESSION['police']; 
}
$sql = "SELECT * FROM policestation WHERE id='$id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $name = $row["name"];
        $address = $row["address"];
        $contactno = $row["contactno"];
    }
}
$sql1 = "SELECT * FROM firdetails WHERE policestationid ='$id' AND status = '1'";
if ($result1=mysqli_query($conn,$sql1)){
   $rowcount = mysqli_num_rows($result1);      
   mysqli_free_result($result1);
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

    <!-- JQuery DataTable Css -->
    <link href="assets/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

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
           
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">details</i>
                        </div>
                        <div class="content">
                            <div class="text"><?php echo $name; ?></div>
                            <!-- <div class="number count-to" data-from="0" data-to="" data-speed="15" data-fresh-interval="20"></div> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">smartphone</i>
                        </div>
                        <div class="content">
                            <div class="text">CONNTACT</div>
                            <span><?php echo $contactno;?></span>
                            <!-- <div class="number count-to" data-from="0" data-to="<?php// echo $contactno;?>" data-speed="1000" data-fresh-interval="20"></div> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">NEW COMMENTS</div>
                            <span><?php echo $address ;?></span>
                            <!-- <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">create_new_folder</i>
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
            <!-- #END# Widgets -->
            <?php 
             if (isset($_SESSION['fir']['success']) && $_SESSION['fir']['success'] != '') {
                echo $msg = $_SESSION['fir']['success'];   
            }else if(isset($_SESSION['fir']['err']) && $_SESSION['fir']['err'] != '') {
                echo $msg = $_SESSION['fir']['err']; 
            }
            unset($_SESSION['fir']);   
            ?>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                ACTIVE CASE
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                        <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>City</th>
                                        <th>Mobile</th>
                                        <th>Against</th>
                                        <th>Reason</th>
                                        <th>Date</th>
                                        <th>Description</th>
                                        <th>Handdle</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                          
                                    <tbody>
                                        <?php 
                                            $sql = "SELECT * FROM firdetails WHERE policestationid='$id' AND status !='0'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while($row = $result->fetch_assoc()) {
                                                        $id = $row["id"];        
                                                        $name = $row["name"];
                                                        $city = $row["city"];
                                                        $mobile = $row["mobile"];
                                                        $against = $row["against"];
                                                        $reason = $row["reason"];
                                                        $date = $row["date"];
                                                        $station = $row["policestationid"];
                                                        $description = $row["description"];
                                                        $officer = $row["officer"];
                                                        $status = $row["status"];
                                                ?>
                                                <tr>
                                                    <th><?php  echo $id; ?></th>
                                                    <td><?php  echo $name; ?></td>
                                                    <td><?php  echo $city; ?></td>
                                                    <td><?php  echo $mobile; ?></td>
                                                    <td><?php  echo $against; ?></td>
                                                    <td><?php  echo $reason; ?></td>
                                                    <td><?php  echo $date; ?></td>
                                                    <td><?php  echo $description;?></td>
                                                    <td><?php  echo $officer; ?></td>
                                                    <td> <?php if($officer == ''){ ?>
                                                        <span class="col-orange">Pending</span>
                                                    <?php  }else{?>
                                                            <span class="col-teal">Allocate</span>
                                                        <?php } ?>
                                                    </td>
                                                    <td><?php if($status == '1') { ?>
                                                        <a href="#" class='col-pink'>Open</a>
                                                        <?php }elseif($status == '2'){ ?>
                                                        <a href="function/closecase.php?close=<?php echo $id;?>&station=<?php echo $station; ?>" class="btn btn-danger">pending</a>
                                                        <?php } ?> </td>
                                                </tr>
                                                <?php
                                                }
                                            }
                                        ?>              
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
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

    <!-- Jquery DataTable Plugin Js -->
    <script src="assets/jquery-datatable/jquery.dataTables.js"></script>
    <script src="assets/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="assets/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="assets/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="assets/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="assets/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="assets/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="assets/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="assets/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="assets/admin.js"></script>
    <script src="assets/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="assets/demo.js"></script>
</body>

</html>
