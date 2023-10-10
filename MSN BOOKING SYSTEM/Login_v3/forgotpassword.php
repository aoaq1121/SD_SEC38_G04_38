<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>

<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form action="" method="post" class="login100-form validate-form">
					<span class="login100-form-logo">
						<img style="height:90px;weight:90px"src="images/logo.png">
						<!--<i class="zmdi zmdi-landscape"></i>-->
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Password Recovery
					</span>
					
					<!--<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="name" id="name" placeholder="Name" required="">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>-->

					<div class="wrap-input100 validate-input" data-validate = "Enter email">
						<input class="input100" type="email" name="email" id="email" placeholder="Email" maxlength="30" required="">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter new password">
						<input class="input100" type="password" name="password" id="password" placeholder="New Password" title="Must contain at least one number and one uppercase and lowercase letter and at least 6 or more characters" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" minlength="6" maxlength="15" required="">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<!--<div class="wrap-input100 validate-input" data-validate="Confirm password">
						<input class="input100" type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" title="Must contain at least one number and one uppercase and lowercase letter and at least 6 or more characters" pattern="[._%+\-@#](?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" minlength="6" maxlength="15" required="">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>-->

					<!--<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>-->

					<div class="container-login100-form-btn">
						<button type="submit" name="resetpasswordbutton" class="login100-form-btn">
							Reset My Password
						</button>
					</div>

					<div class="text-center p-t-90">
						<label for="ckb1" style="font-size: 13px;">
						<a  href="login.php">
							Back to LogIn
						</a>
						</label>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>

<?php

include('db.php');

if (isset($_POST['resetpasswordbutton'])) {

$email = $_POST['email'];

$password = md5($_POST['password']);

$code = rand();

$sql =  "UPDATE users SET password ='$password' WHERE email = '$email'";
$qry = mysqli_query($conn,$sql);

if($qry){
	echo '<script>';
	echo 'alert("Reset Succesfully")';
	echo '</script>';
}




}

 

?>
