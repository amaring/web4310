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
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://webmail.uscourts.gov/">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
              Email
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
              Time Cards (non-working link)
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
              Wiki Page (non-working link)
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="directory.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
              Employee Directory
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="calendars.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
              Calendars
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dcn.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
              DCN Services
            </a>
          </li>
        </ul>
        <?php
        if ($_SERVER['PHP_SELF'] == '/directory.php') { ?>
        <h6 class="sidebar-heading d-flex justify-content-between-align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Offices</span>
        </h6>
        <ul class="nav flex-column mb-2">
        <li class="nav-item">
        <a class="nav-link" href="#">
        Grand Rapids</a></li>
        <li class="nav-item">
        <a class="nav-link" href="#">
        Lansing</a></li>
        <li class="nav-item">
        <a class="nav-link" href="#">
        Kalamazoo</a></li>
        <li class="nav-item">
        <a class="nav-link" href="#">
        Marquette</a></li>
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-between-align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Departments</span>
        </h6>
        <ul class="nav flex-column mb-2">
        <li class="nav-item">
        <a class="nav-link" href="#">
        Chambers</a></li>
        <li class="nav-item">
        <a class="nav-link" href="#">
        Clerks</a></li>
        <li class="nav-item">
        <a class="nav-link" href="#">
        Finance</a></li>
        <li class="nav-item">
        <a class="nav-link" href="#">
        Information Technology</a></li>
        <li class="nav-item">
        <a class="nav-link" href="#">
        Library</a></li>
        <li class="nav-item">
        <a class="nav-link" href="#">
        Pro Se</a></li>
        <li class="nav-item">
        <a class="nav-link" href="#">
        Probation</a></li>
        <li class="nav-item">
        <a class="nav-link" href="#">
        Other</a></li>
        </ul>
        <? } ?>
      </div>
    </nav>
