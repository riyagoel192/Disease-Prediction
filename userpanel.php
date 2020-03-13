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
        	<h5 style="margin-left: 410px;color:#32c69a;"><center>Welcome to your panel</center></h5>
        </nav>

	</div>

	<span id="summary" style="height: 490px;width: 370px;position: absolute;margin-top:103px;margin-left:255px;box-shadow: 0 4px 10px 0 rgba(50,198,154,0.5);">
		
  <h4 style="margin-top: 10px;color:#32c69a;"><center><b>Summary</b></center></h4>  	

  <div id="summ" style="height: 300px;width: 300px;position: absolute;margin-top:25px;margin-left:35px;">
    <ul style="list-style-type: none;">

      <li style="margin-top: 25px;font-size: 40px;margin-left: 30px;">
      60
      <div id="desc" style="height: 50px;width: 50px;font-size: 15px;position: absolute;"><center>Age</center></div>
      </li>

      <div class="vertical_line">
        
        <li style="margin-top: -5px;font-size: 40px;margin-left: 25px;">
        70 kg
        <div id="desc" style="height: 50px;width: 50px;font-size: 15px;position: absolute;"><center>Weight</center></div>
        </li>

      </div>


      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSsEfbrwUFJe-gXZKKTlDtM1h0799UxQZzNniFNS11881S6Q2MI" style="height: 120px;width: 120px;margin-top: 60px;">

      <div id="heighting" style="margin-top: -100px;font-size: 40px;margin-left: 120px;">
      160 cm
      <div id="desc" style="height: 50px;width: 50px;font-size: 15px;position: absolute;"><center>Height</center></div>
      </div>

    </ul>
  </div>

  <div id="last_visit" style="height: 54px;width: 350px;margin-top: 322px;margin-left: 10px;position: absolute;background-color:#1E90FF;box-shadow: 0 4px 10px 0 rgba(0,0,0,0.5)">
    
    <i class="fa fa-calendar fa-2x" aria-hidden="true" style="margin-left: 110px;margin-top: 10px;color:white;">

    <ul style="list-style-type: none;margin-left: 10px;font-size: 13px;margin-top: -30px;">
      <li>LAST VISIT</li>
      <li style="margin-top: 6px;">05.12.2019</li>
    </ul>

    </i>

  </div>

  <div id="next_visit" style="height: 54px;width: 350px;margin-top: 383px;px;margin-left: 10px;position: absolute;background-color:#1E90FF;box-shadow: 0 4px 10px 0 rgba(0,0,0,0.5)">
    
    <i class="fa fa-stethoscope fa-2x" aria-hidden="true" style="margin-left: 110px;margin-top: 10px;color:white;">
      
    <ul style="list-style-type: none;margin-left: 10px;font-size: 13px;margin-top: -30px;">
      <li>SUFFERING DISEASE</li>
      <li style="margin-top: 6px;">Pneumonia</li>
    </ul>

    </i>

  </div>

  
	</span>

  <span id="body_temp" style="height: 150px;width: 330px;position: absolute;margin-top:103px;margin-left:650px;box-shadow: 0 4px 10px 0 rgba(50,198,154,0.9);">
    
  <h6 style="margin-top: 10px;color:#32c69a;"><center><b>Body Temperature</b></center></h6>  

  <img src="https://www.oneyearnobeer.com/wp-content/uploads/2019/12/thermometer.gif" style="height: 110px;width: 110px;margin-left: 8px;float: left;position: absolute;">

  <div id="content" style="height: 90px;width: 150px;margin-left: 150px;float: right;position: absolute;margin-top: 15px;">
    <h4><center>&degC</center></h4>
    <h4><center>36.2</center></h4>
  </div>

  </span>

  <span id="body_temp" style="height: 150px;width: 330px;position: absolute;margin-top:267px;margin-left:650px;box-shadow: 0 4px 10px 0 rgba(50,198,154,0.9);">
    
  <h6 style="margin-top: 10px;color:#32c69a;"><center><b>Heart Rate</b></center></h6>  

  <img src="https://cdn.shopify.com/s/files/1/0056/1233/9271/t/33/assets/heart-pumping.gif?8987" style="height: 100px;width: 100px;margin-left: 20px;float: left;position: absolute;"> 

  <div id="content" style="height: 90px;width: 150px;margin-left: 150px;float: right;position: absolute;margin-top: 27px;">
    <h4><center>88 BPM</center></h4>
  </div>

  </span>

  <span id="body_temp" style="height: 150px;width: 330px;position: absolute;margin-top:433px;margin-left:650px;box-shadow: 0 4px 10px 0 rgba(50,198,154,0.9);">
    
  <h6 style="margin-top: 10px;color:#32c69a;"><center><b>Nutrition</b></center></h6>  

  <img src="https://uniquespicedartford.co.uk/images/loader.gif" style="height: 110px;width: 110px;margin-left: 10px;float: left;position: absolute;"> 

  <div id="content" style="height: 90px;width: 150px;margin-left: 150px;float: right;position: absolute;margin-top: 23px;">
    <h5><center>Calories: 360</center></h5>
    <h5><center>Protein: 55g</center></h5>
  </div>

  </span>

	<div id="profile-card" style="height: 490px;width: 340px;margin-left: 1006px;position: absolute;margin-top:103px;float: right;box-shadow: 0 4px 10px 0 rgba(0,0,0,0.5);">
		<br>
    <center style="color:#32c69a;"><h5><b>Basic Profile</b></h5></center>
		 <img src="images/sign.png" style="height: 120px;width: 120px;margin-left: 120px;"><br> 
		<div class="title">

      <?php

         $email=$_GET['id'];
         $sql="SELECT * FROM registration WHERE email='$email'";
         $result=mysqli_query($con,$sql);
         while($row = mysqli_fetch_array($result)) {

      ?>

			<h4><center><b><?php echo $row["name"]; ?></b></center></h4>
		</div>
		
      <div class="main-content" style="padding: 20px;">
      <p><i class="fa fa-envelope" style="color:#32c69a;"></i>&nbsp;&nbsp;<b><?php echo $_GET['id']; ?></b></p>
      <p><i class="fa fa-phone" style="color:#32c69a"></i>&nbsp;&nbsp;<b><?php echo $row["phone"]; ?></b></p>
      <p><i class="fa fa-home" style="color:#32c69a"></i>&nbsp;&nbsp;<b>India</b></p>

			<hr>
		</div>
	</div>

    <?php  } ?>

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
        <a class="nav-link" href="appoint.php?id=<?php echo $_GET['id']; ?>">
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
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Logout</span></a>
      </li>
      </li>
	</div>
	</ul>
	<!-- End of Sidebar -->

	
</body>
</html>