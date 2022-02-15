<?php
include("checkout-c.php");
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
<body>

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

<li class="has-submenu active">
<a href="checkout.html"><i class="fas fa-plus"></i> Patients</a>
<ul class="submenu">
<li class="has-submenu">
<ul class="submenu">
<li><a href="map-grid.html">Map Grid</a></li>
<li><a href="map-list.html">Map List</a></li>
</ul>
</li>
<li><a href="search.html">Search Doctor</a></li>
<li><a href="booking.html">Booking</a></li>
<li><a href="booking-success.html">Booking Success</a></li>
</ul>
</li>
</ul>
</div>
<ul class="nav header-navbar-rht">

<li class="nav-item dropdown has-arrow logged-item">
<a href="checkout.html#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
<span class="user-img">
<img class="rounded-circle" src="assets/img/doctors/doctor-thumb-02.jpg" width="31" alt="Fred Ortego">
</span>
</a>
<div class="dropdown-menu dropdown-menu-end">
<div class="user-header">
<div class="avatar avatar-sm">
<img src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image" class="avatar-img rounded-circle">
</div>
<div class="user-text">
<h6>Doctor Name</h6>
<p class="text-muted mb-0">Doctor</p>
</div>
</div>
<a class="dropdown-item" href="login.html">Logout</a>
</div>
</li>

</ul>
</nav>
</header>


<div class="breadcrumb-bar">
<div class="container-fluid">
<div class="row align-items-center">
<div class="col-md-12 col-12">
<h2 class="breadcrumb-title">Checkout</h2>
<nav aria-label="breadcrumb" class="page-breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Checkout</li>
</ol>
</nav>
</div>
</div>
</div>
</div>


<div class="content">
<div class="container">
<div class="row">
<div class="col-md-5 col-lg-4 theiaStickySidebar">

<div class="card booking-card">
<div class="card-header">
<h4 class="card-title">Booking Summary</h4>
</div>
<div class="card-body">

<div class="booking-doc-info">
<a class="booking-doc-img">
<img src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
</a>
<div class="booking-info">
<h4>Dr. Darren Elder</h4>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
</div>
<div class="clinic-details">
<p class="doc-location"><i class="feather-map-pin"></i> Mumbai, India</p>
</div>
</div>
</div>

<div class="booking-summary border-0">
<div class="booking-item-wrap">
<ul class="booking-date">
<li>Date <span>16 Nov 2019</span></li>
<li>Time <span name="Time">10:00 AM</span></li>
</ul>
<ul class="booking-fee">
<li>Consulting Fee <span>Rs.100</span></li>
<li>Booking Fee <span>Rs.80</span></li>
<li class="mb-0">Video Call <span>Rs.100</span></li>
</ul>
</div>
</div>
</div>
<div class="card-footer">
<div class="booking-total">
<ul class="booking-total-list">
<li>
<span>Total</span>
<span class="total-cost">Rs.280</span>
</li>
</ul>
</div>
</div>
</div>

</div>
<div class="col-md-7 col-lg-8">
<div class="card book-info">

<div class="info-widPOST">
<div class="card-header">
<h4 class="card-title">Personal Information</h4>
</div>
<div class="card-body">

<div class="row">
<div class="col-md-6 col-sm-12">
<form method="POST" action="checkout.php">
<div class="form-group">
<label>First Name</label>
<input class="form-control" type="text" name="First">
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="form-group">
<label>Last Name</label>
<input class="form-control" type="text" name="Last">
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="form-group">
<label>Email</label>
<input class="form-control" type="email" name="Email">
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="form-group">
<label>Phone</label>
<input class="form-control" type="text" name="Phone">
</div>
</div>
</div>


<div class="card-body inf-widPOST">
<div class="payment-widPOST">
<h4 class="card-title">Payment Method</h4>

<div class="payment-list">
<label class="payment-radio credit-card-option">
<input type="radio" name="radio" checked>
<span class="checkmark"></span>
Credit card
</label>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="card_name">Name on Card</label>
<input class="form-control" id="card_name" type="text">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="card_number">Card Number</label>
<input class="form-control" id="card_number" type="text">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label for="expiry_month">Expiry Month</label>
<input class="form-control" id="expiry_month" type="text">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label for="expiry_year">Expiry Year</label>
<input class="form-control" id="expiry_year" type="text">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label for="cvv">CVV</label>
<input class="form-control" id="cvv" type="text">
</div>
</div>
</div>
</div>


<div class="payment-list">
<label class="payment-radio paypal-option">
<input type="radio" name="radio">
<span class="checkmark"></span>
Paypal
</label>
</div>


<div class="terms-accept">
<div class="custom-checkbox">
<input type="checkbox" id="terms_accept">
<label for="terms_accept"> I have read and accept Terms &amp; Conditions</a></label>
</div>
</div>


<div class="submit-section mt-4">
<input type="submit" class="btn btn-primary submit-btn submit" name="Submit" value="Confirm and Pay">
</div>
<!-- </form> -->
</div>
</div>

</div>
</form>
</div>
</div>
</div>
</div>
</div>


<footer class="footer">

<div class="footer-top">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-6">

<div class="footer-widPOST footer-about">
<div class="footer-logo">
	<h1 style="color: #0071dc; font-weight: 900;">DOCOFINDER</h1>
</div>
<div class="footer-about-content">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
<div class="social-icon">
<ul>
<li>
<a href="checkout.html#" tarPOST="_blank"><i class="feather-facebook"></i></a>
</li>
<li>
<a href="checkout.html#" tarPOST="_blank"><i class="feather-instagram"></i></a>
</li>
<li>
<a href="checkout.html#" tarPOST="_blank"><i class="feather-linkedin"></i></a>
</li>
<li>
<a href="checkout.html#" tarPOST="_blank"><i class="feather-twitter"></i></a>
</li>
</ul>
</div>
</div>
</div>

</div>
<div class="col-lg-3 col-md-6">

<div class="footer-widPOST footer-menu">
<h2 class="footer-title">For Patients</h2>
<ul>
<li><a href="search.html">Search for Doctors</a></li>
<li><a href="login.html">Login</a></li>
<li><a href="register.html">Register</a></li>
<li><a href="booking.html">Booking</a></li>
</ul>
</div>

</div>
<div class="col-lg-3 col-md-6">

 <div class="footer-widPOST footer-menu">
<h2 class="footer-title">For Doctors</h2>
<ul>
<li><a href="login.html">Login</a></li>
<li><a href="doctor-register.html">Register</a></li>
</ul>
</div>

</div>
<div class="col-lg-3 col-md-6">

<div class="footer-widPOST footer-contact">
<h2 class="footer-title">Contact Us</h2>
<div class="footer-contact-info">
<div class="footer-address">
<span><i class="feather-map-pin"></i></span>
<p> 3556 Beech Street,Mumbai,<br> India </p>
</div>
<p>
<i class="feather-phone"></i>
+1 315 369 5943
</p>
<p class="mb-0">
<i class="feather-mail"></i>
<a href="gmail.com" class="__cf_email__">contact@docofinder.com</a>
</p>
</div>
</div>

</div>
</div>
</div>
</div>


<div class="footer-bottom">
<div class="container">

<div class="copyright">
<div class="row">
<div class="col-md-6 col-lg-6">
<div class="copyright-text">
<p class="mb-0">&copy; 2021 Doccure. All rights reserved.</p>
</div>
</div>
<div class="col-md-6 col-lg-6">

<div class="copyright-menu">
<ul class="policy-menu">
<li>Terms and Conditions</a></li>
<li>Policy</a></li>
</ul>
</div>

</div>
</div>
</div>

</div>
</div>

</footer>

</div>


<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>



<?php

	$First=$_POST["First"];
	$Last=$_POST["Last"];
	$Email=$_POST["Email"];
	$Phone=$_POST["Phone"];
	$radio=$_POST["radio"];
	

	$query2="INSERT INTO DETAILS  VALUES ('$First', '$Last','$Email','$Phone','$radio')";
	$data=mysqli_query($conn2,$query2);

	// if($data)
	// {
	// 	echo"Data Inserted into Database";
	// }

	// else
	// {
	// 	echo "Failed To Insert Data";
	// }
?>