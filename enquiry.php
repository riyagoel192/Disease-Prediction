<?php
//require('db_conn.php');

if (isset($_POST['submit'])) {
  # code...
  echo "Message sent successfully";

}
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

</head>

<body id="page-top">

  	<div id="page-bottom" style="height: 100px;width: 1139px;margin-left: 224px;position: absolute;">
		
		<!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        	<h5 style="margin-left: 410px;color:#32c69a;"><center>Welcome to your panel</center></h5>
        </nav>

	  </div>

	<span id="div1" style="height: 380px;width: 370px;position: absolute;margin-top:135px;margin-left:400px;box-shadow: 0 4px 10px 0 rgba(50,198,154,1.2);">
		
    <!-- <ul style="list-style-type: none;">
      <li>Let's Get In Touch</li>
    </ul> -->
    <h5 style="margin-top: 20px;margin-left: 30px;"><b>Let's get in touch</b></h5>
    <p style="margin-left: 30px;">We are open for any enquiries!</p>

    <br>

    <i class="fa fa-phone" style="margin-left: 55px;color:#32c69a;position: absolute;">
      
      <div id="phn" style="height: 100px;width: 100px;position: absolute;margin-left: 30px;margin-top: -30px;">
        
        <ul>
          <li style="padding: 3px;">9873101106</li>
          <li style="padding: 3px;">7861814968</li>
          <li style="padding: 3px;">7042832214</li>
        </ul>

      </div>

    </i>

    <i class="fa fa-envelope" style="margin-top: 100px;position: absolute;color:#32c69a;margin-left: 55px;">
      
      <div id="mail" style="height: 100px;width: 100px;position: absolute;margin-left: 30px;margin-top: -30px;">
        
        <ul>
          <li style="padding: 3px;">info@healthplus.in</li>
          <li style="padding: 3px;">care@health.in</li>
        </ul>

      </div>

    </i>

    <i class="fa fa-map-marker" style="margin-top: 185px;position: absolute;color:#32c69a;margin-left: 55px;">
      
      <div id="mail" style="height: 100px;width: 300px;position: absolute;margin-left: 12px;margin-top: -30px;">
        
        <ul style="list-style-type: none;">
          <li style="padding: 3px;">600 Congress Avenue</li>
          <li style="padding: 3px;">Floor-14</li>
          <li style="padding: 3px;">Austin, TX 78701</li>
        </ul>

      </div>

    </i>



	</span>

  <span id="div2" style="height: 380px;width: 370px;position: absolute;margin-top:135px;margin-left:773px;box-shadow: 0 4px 10px 0 rgba(50,198,154,1.2);background-color: #32c69a;">

    <div id="name" style="border: 1px solid white;border-radius: 3px;height: 50px;width: 290px;margin-top: 30px;margin-left: 40px;">

      <i class="fa fa-user" style="color:white;margin-top: 15px;margin-left: 10px;"></i>
      <input type="text" name="name" placeholder="Full Name" style="background: rgba(0,0,0,0);height: 48px;width: 288px;border-style: none;color:white;padding: 10px;margin-left: 8px;margin-top: -1px;position: absolute;" required />

    </div>

    <div id="email" style="border: 1px solid white;border-radius: 3px;height: 50px;width: 290px;margin-top: 30px;margin-left: 40px;">

      <i class="fa fa-envelope" style="color:white;margin-top: 15px;margin-left: 10px;"></i>
      <input type="text" name="email" placeholder="Email" style="background: rgba(0,0,0,0);height: 48px;width: 288px;border-style: none;color:white;padding: 10px;margin-left: 8px;margin-top: -1px;position: absolute;" required />

    </div>

    <div id="message" style="border: 1px solid white;border-radius: 3px;height: 100px;width: 290px;margin-top: 30px;margin-left: 40px;">

      <textarea rows="20" cols="40" style="background: rgba(0,0,0,0);border-style: none;color:white;padding: 10px;" placeholder="Message"></textarea>

    </div>

    <div id="btn" style="border: 1px solid white;border-radius: 20px;height: 45px;width: 200px;margin-top: 20px;margin-left: 80px;">

      <input type="submit" name="submit" value="Send message" style="background: rgba(0,0,0,0);height: 43px;width: 198px;border-style: none;color:white;padding: 10px;margin-left: 8px;margin-top: -1px;position: absolute;">

    </div>

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
        <a class="nav-link" href="#">
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