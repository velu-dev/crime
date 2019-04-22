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

       <!-- JQuery DataTable Css -->
       <link href="assets/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">


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
                             <div class="text">CONTROLL STATIONS</div>
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

            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>LIVE CASE CHART</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                             <canvas id="graphCanvas"></canvas>
                        </div>
                    </div>
                </div>
            </div>
    
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

    <!-- Custom Js -->
    <script src="assets/admin.js"></script>

    <script  type="text/javascript" src="assets/pages/charts/chart.js"></script>

    <!-- <script src="assets/pages/tables/jquery-datatable.js"></script> -->

    <!-- Demo Js -->
    <script src="assets/demo.js"></script>

    <script>
        $(document).ready(function () {
            showGraph();
        });


        function showGraph()
        {
            {
                $.post("function/close.php",
                function (data)
                {
                    console.log(data);
                     var name = [];
                    var marks = [];

                    for (var i in data) {
                        name.push(data[i].name);
                        marks.push(data[i].closedcase);
                    }

                    var chartdata = {
                        labels: name,
                        datasets: [
                            {
                                label: 'Closed Case',
                                backgroundColor: '#E91E63',
                                borderColor: '#E91E63',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: marks
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                });
            }
        }
        </script>


</body>

</html>
