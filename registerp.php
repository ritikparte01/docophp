<?php
include("register.php");

error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>DOCOFINDER</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

<link href="assets/img/favicon.png" rel="icon">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/feather.css">

<link rel="stylesheet" href="assets/css/style.css">

<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>
<body class="account-page">

<div class="main-wrapper">

<header class="header">
<nav class="navbar navbar-expand-lg header-nav">
<div class="navbar-header">
<a id="mobile_btn" href="javascript:void(0);">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
</a>
<!-- <a href="index.html" class="navbar-brand logo">
<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
</a> -->

<a href="index.html" class="navbar-brand logo">
	<h1 style="color: #0071dc; font-weight: 900;">DOCOFINDER</h1>
	</a>
</div>
<div class="main-menu-wrapper">
<div class="menu-header">
<!-- <a href="index.html" class="menu-logo">
<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
</a> -->

<a href="index.html" class="navbar-brand logo">
	<h1 style="color: #0071dc; font-weight: 900;">DOCOFINDER</h1>
	</a>
<a id="menu_close" class="menu-close" href="javascript:void(0);">
<i class="fas fa-times"></i>
</a>
</div>
<ul class="main-nav">
<li>
<a href="index.html"><i class="fas fa-plus"></i> Home</a>
</li>
<!-- <li class="has-submenu">
<a href="register.html"><i class="fas fa-plus"></i> Doctors</a>
<ul class="submenu">
<li><a href="doctor-dashboard.html">Doctor Dashboard</a></li>
<li><a href="appointments.html">Appointments</a></li>
<li><a href="schedule-timings.html">Schedule Timing</a></li>
<li><a href="my-patients.html">Patients List</a></li>
<li><a href="patient-profile.html">Patients Profile</a></li>
<li><a href="chat-doctor.html">Chat</a></li>
<li><a href="invoices.html">Invoices</a></li>
<li><a href="doctor-profile-settings.html">Profile Settings</a></li>
<li><a href="reviews.html">Reviews</a></li>
<li><a href="doctor-register.html">Doctor Register</a></li>
</ul>
</li> -->
<li class="has-submenu">
<a href="register.html"><i class="fas fa-plus"></i> Patients</a>
<ul class="submenu">
<li class="has-submenu">
</li>
<li><a href="search.html">Search Doctor</a></li>
<li><a href="booking.html">Booking</a></li>
<li><a href="booking-success.html">Booking Success</a></li>
</ul>
</li>




<li class="login-link">
<a href="login.html">Login / Signup</a>
</li>
</ul>
</div>
<ul class="nav header-navbar-rht">
<li class="nav-item">
<a class="nav-link header-login" href="login.html">Login</a>
</li>
<li class="nav-item">
<a class="nav-link header-login login" href="register.html">Sign Up</a>
</li>
</ul>
</nav>
</header>


<div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-md-8 offset-md-2">

<div class="account-content">
<div class="row align-items-center justify-content-center">
<div class="col-md-7 col-lg-6 login-left">
<img src="assets/img/login-banner.png" class="img-fluid" alt="Doccure Register">
</div>
<div class="col-md-12 col-lg-6 login-right">
<div class="login-header">
<h3>Patient Register <a href="doctor-register.html">Are you a Doctor?</a></h3>
</div>

<form>
<div class="form-group">
<label>Name</label>
<input type="text" name="Name" class="form-control">
</div>
<div class="form-group">
<label>Mobile Number</label>
<input type="text" name="Mobile" class="form-control">
</div>
<div class="form-group">
<label>Create Password</label>
<input type="password" name="Password" class="form-control">
</div>
<div class="text-start">
<a class="forgot-link" href="login.html">Already have an account?</a>
</div>
<button class="btn btn-primary btn-lg login-btn" name="Submit" type="submit">Register</button>
<div class="login-or">
<span class="or-line"></span>
<span class="span-or">or</span>
</div>
 <div class="row form-row social-login">
<div class="col-6">
<a href="register.html#" class="btn btn-facebook w-100"><img src="assets/img/fb.png" class="img-fluid" alt="fb"> Login</a>
</div>
<div class="col-6">
<a href="register.html#" class="btn btn-google w-100"><img src="assets/img/google.png" class="img-fluid" alt="Logo"> Login</a>
</div>
</div>
</form>

</div>
</div>
</div>

</div>
</div>
</div>
</div>


<!-- -->

</div>


<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>


<?php
	$nm=$_GET['Name'];
	$mb=$_GET['Mobile'];
	$pw=$_GET['Password'];

	$query="INSERT INTO REGISTER VALUES ('$nm', '$mb','$pw') ";
	$data=mysqli_query($conn,$query);

	// if($data)
	// {
	// 	echo"Data Inserted into Database";
	// }

	// else
	// {
	// 	echo "Failed To Insert Data";
	// }
?>