<?php
    //include ('config/config.php');
    //session start();
    //Check if user is admin
    //if(isset($_SESSION['u_type']) == 1) {
        //assuming admin users have a user_type in the user table of 1, do the following
        //$admin_visible = TRUE;
        //}
        // now we can use this elsewhere
        //}
        //include('config/config.php');
?>

<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Portal Project</title>
<!--<link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
<link rel="stylesheet" href="//fonts.googlapis.com/css?family=font1|font2" type="text/css" -->
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/dashboard.css" type="text/css">
<!-- move to footer -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQ1LNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<?php
if ($_SERVER['PHP_SELF'] == '/index.php') { ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<? } ?>
</head>
<body>
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
<!--<input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
<ul class="navbar-nav px-3">
<li class="nav-item text-nowrap">
<a class="nav-link" href="#" data-toggle="modal" data-target="#login-modal">Sign in</a>
</li>
</ul>
</nav>
<div class="modal-fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display:none;">
<div class="modal-dialog">
<div class="loginmodal-container">
<h1>Log In to Your Account</h1>
<form>
<input type="text" name="user" placeholder="Username">
<input type="password name="pass" placeholder="Password">
<input type="submit" name="login" class="login loginmodal-submit" value="Login">
</form>
<div class="login-help">
<a href="#">Register</a> - <a href="#">Forgot Password</a>
</div>
</div>
</div>
</div>
<div class="container-fluid">
<div class="row">
<nav class="col-md-2 d-none d-md-block bg-light sidebar">
<div class="sidebar-sticky">
<ul class="nav flex-column">
<li class="nav-item">
<a class="nav-link active" href="index.php">












