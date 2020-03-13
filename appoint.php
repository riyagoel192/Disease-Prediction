<?php
require('db_conn.php');
?>


<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta name="description" content="">
  	<meta name="author" content="">

	<title></title>

	<!-- Custom fonts for this template-->
 <!--  <link href="css/all.min.css" rel="stylesheet" type="text/css"> --> 
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Custom styles for this template-->
  <link href="styles/sb-admin-2.min.css" rel="stylesheet">

  <style>
    .vertical_line{
      border-left: 2px solid grey;
      height: 50px;
      position: absolute;
      left: 50%;
      margin-left: -2px;
      top: 30px;
    }  
  </style>


</head>

<body id="page-top">

  	<div id="page-bottom" style="height: 100px;width: 1139px;margin-left: 224px;position: absolute;">
		
		<!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        	<h5 style="margin-left: 410px;color:#32c69a;"><center>My Appointments</center></h5>
        </nav>

  </div>
  
  <span id="show_appoint" style="height: 600px;width: 500px;position: absolute;margin-top:103px;margin-left:600px;box-shadow: 0 4px 10px 0 rgba(50,198,154,0.5);">
      <?php

      $email=$_GET['id'];
      $sql="SELECT * FROM appointment WHERE pemail='$email'";
      $result=mysqli_query($con,$sql);
      while($row = mysqli_fetch_array($result)) {

      ?>

      <div class="main-content" style="padding: 20px;">
      <p><i class="fa fa-envelope" style="color:#32c69a;"></i>&nbsp;&nbsp;<b><?php echo $_GET['id']; ?></b></p>
      <p><i class="fa fa-phone" style="color:#32c69a"></i>&nbsp;&nbsp;<b><?php echo $row["pphone"]; ?></b></p>
      <p><i class="fa fa-user" style="color:#32c69a"></i>&nbsp;&nbsp;<b><?php echo $row["doctor"]; ?></b></p>
      <p><i class="fa fa-hospital-o" style="color:#32c69a"></i>&nbsp;&nbsp;<b><?php echo $row["dept"]; ?></b></p>
      <p><i class="fa fa-bed" style="color:#32c69a"></i>&nbsp;&nbsp;<b><?php echo $row["ward"]; ?></b></p>
      <p><i class="fa fa-clock-o" style="color:#32c69a"></i>&nbsp;&nbsp;<b><?php echo $row["time"]; ?></b></p>

			<hr>
		</div>

    <?php  } ?>
	</span>

  	<!-- Page Wrapper -->
  	<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Welcome User</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="userpanel.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Contents
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <li class="nav-item active">
        <a class="nav-link" href="appoint.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>My Appointments</span></a>
      </li>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Settings</span></a>
      </li>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <li class="nav-item active">
        <a class="nav-link" href="faq.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>FAQ's</span></a>
      </li>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <li class="nav-item active">
        <a class="nav-link" href="enquiry.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Make an Enquiry</span></a>
      </li>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <li class="nav-item active">
        <a class="nav-link" href="general_info.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>General Info</span></a>
      </li>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Logout</span></a>
      </li>
      </li>
	</div>
	</ul>
	<!-- End of Sidebar -->

	
</body>
</html>