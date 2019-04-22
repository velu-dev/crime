<?php
session_start();
include_once('../db/dpconfig.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In | Crime Rate - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="assets/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="assets/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="assets/style.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Crime Rate</a>
            <small>Coimbatore City - Police Dashboard</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" action="function/login.php" method="POST">
                    <div class="msg">Sign in to start your session</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <select class="form-control show-tick" name="username" required>
                                        <option value="">-- Please select --</option>
                                        <?php
                                            $sql = "SELECT * FROM `policestation` WHERE status='1'";
                                            $result = $conn->query($sql);										
                                            if ($result->num_rows > 0) {
                                                while($row = $result->fetch_assoc()) {
                                                        $name = $row["name"];	
                                                        $id = $row["id"];	
                                                    ?> <option value="<?php echo $id;?>"><?php echo $name; ?></option><?php											
                                                }
                                            }
                                         ?>
                                    </select>
                            <!-- <input type="text" class="form-control" name="username" placeholder="Username" required autofocus> -->
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="assets/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="assets/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="assets/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="assets/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="assets/admin.js"></script>
    <script src="assets/pages/examples/sign-in.js"></script>
</body>

</html>