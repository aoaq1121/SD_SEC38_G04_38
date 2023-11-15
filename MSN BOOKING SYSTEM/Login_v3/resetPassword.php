<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
      <title>Reset Password</title>
       <!-- CSS -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
       <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
       <link rel="stylesheet" type="text/css" href="css/main.css"><link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
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

   </head>
   <body>
          <?php
            if(isset($_POST["resetpasswordbutton"]))
            {
              include "db.php";
               
              $email = $_GET['key'];
                
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


<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form action="" method="post" class="login100-form validate-form">
					<span class="login100-form-logo">
						<img style="height:90px;weight:90px"src="images/logo.png">
					
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Password Recovery
					</span>

					<div class="wrap-input100 validate-input" data-validate="Enter new password">
						<input class="input100" type="password" name="password" id="password" placeholder="New Password" title="Must contain at least one number and one uppercase and lowercase letter and at least 6 or more characters" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" minlength="6" maxlength="15" required>
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

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
 
   </body>
</html>