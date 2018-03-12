<?php
require_once('config.php');
// Initialize the session
session_start();
var_dump($_SESSION);
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: index.php");
  exit;
 
}
?>

<!DOCTYPE html>
<html>
<head>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="stile.css">
	  <!-- css welcome page-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="assets/css/style.css" rel="stylesheet" media="screen">
  <link href="color/default.css" rel="stylesheet" media="screen">
  <script src="js/modernizr.custom.js"></script>
  		<!-- css end -->

	<title>Profile</title>
</head>
<body>

<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/jquery-1.12.4.min.js"></script>
  <!-- js welcome page-->
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.smooth-scroll.min.js"></script>
  <script src="assets/js/jquery.dlmenu.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
  <!-- js end -->
<!-- Include the above in your HEAD tag -->


<div class="container">
    <div class="row profile" style="margin-left: -170px;">
		<div class="col-md-3">
			<div class="profile-sidebar" style="margin-left: 80px;">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="login.png" class="img-responsive" style="width: 75%; height: 20%; margin: 0 auto;">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<p><?php
							if($_SESSION['username'])
							{
							$SESSION = $_SESSION['username'];
							$sql = mysqli_query($link, "select * from `biodata` where 
							`username` = '$SESSION'");
							$show = mysqli_fetch_assoc($sql);
							echo 'Welcome, <strong style="color: purple; font-size: 20px;">' . $show['fname'] . '</strong>';
							//echo '<p style="color: purple; font-size: 15px;">' . $show['email'] . '</p>'; 
							//echo '<p style="color: purple; font-size: 15px;">' . $show['fname'] . " " . $show['lname'] . '</p>';
							//echo '<p style= "color: purple; font-size: 15px;">' . $show['nik'] . '</p>';
							}
							 ?>
						<p> </p>
						<a class="btn btn-danger" href="logout.php" ><i class="glyphicon glyphicon-trash"></i>Logout</a>
					</div>
					<div class="profile-usertitle-job">
						
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu" style="background-color: #fffff0;">
					<ul class="nav">
						<li class="active">
							<a href="home.php">
							<i class="glyphicon glyphicon-home"></i>
							Home </a>
							
						</li>
						<li>
							<a href="profile.php">
							<i class="glyphicon glyphicon-user"></i>
							My Profile </a>
						</li>
						<li>
							<a href=".php">
							<i class="glyphicon glyphicon-ok"></i>
							Jadwal </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>			
			    <!-- intro area start -->
				<div id="intro" style="overflow: hidden; width: 990px;">
					<img src="img/bg-mac.png" style="position: absolute; margin-top: 100px; margin-left: 100px;">
					<div class="intro-text">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="brand">
									<h1 style="margin-left: 380px;"><a>Welcome</a></h1>
									<div class="line-spacer" style="margin-left: 370px;"></div>
              						<p><span></span></p>
            						</div>
        						</div>
        					</div>
    					</div>
					</div>
				</div> 
				<!-- intro area end -->

</div>
</div>

<center>
<strong>@ Copyright </strong>
</center>
<br>
<br>
</body>
</html>