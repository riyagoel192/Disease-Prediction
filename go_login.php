<?php

 require('db_conn.php');
 session_start();


if (isset($_GET['submit'])) {
     $email=$_GET['email'];
     $password=$_GET['password'];
      if($con)
      {
         echo '<h1>Connected to mysql</h1>';
         $sql="SELECT * FROM registration WHERE email='$email'and password='$password'";
         $result=mysqli_query($con,$sql);
         $count=mysqli_num_rows($result);
         if($count>0)
         {
            header('Location: userpanel.php?id='.$email);

         }
         else
         {
             echo 'Login failed';
         }

      }
}

?>


<!DOCTYPE html>
<html>
<head>

	<title></title>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <!-- main css -->
    <link rel="stylesheet" href="styles/reg_style.css" /> 
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">

    <style>
        
        .bg {
  /* The image used */
  background-image: url("https://makeovertravelplasticsurgery.com/wp-content/uploads/2017/12/filling-out-medical-forms-1.jpg");

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-repeat: no-repeat;
  background-size: cover;
    }


    </style>

</head>
<body class="bg">

<!-----------------Modal section ------------------------->
    		<!-- <div class="bg-modal">
    			<div class="modal-content">

    				<div class="close">+</div>
    				<img src="https://cdn0.iconfinder.com/data/icons/user-icon-profile-businessman-finance-vector-illus/100/19-1User-512.png" style="height:100px;width: 100px;" alt="sign photo">

    				<form action="">
    					<input type="text" name="email" placeholder="Type your email"><br><br>
    					<input type="password" name="password" placeholder="Enter password"><br><br>
    					<a href="" class="button">Submit</a>
    				</form>
    		    </div>
			</div> -->
		<div class="loginBox">
			<img src="https://cdn0.iconfinder.com/data/icons/user-icon-profile-businessman-finance-vector-illus/100/19-1User-512.png" class="user">
			<h2>Log In Here</h2>
			<form action="" method="GET">
    					<input type="text" name="email" placeholder="Type your email"><br><br>
    					<input type="password" name="password" placeholder="Enter password"><br><br>
    					<input type="submit" name="submit" value="Sign In">
    					<a href="#">Forget Password?</a>
    		</form>
		</div>
</body>
</html>

