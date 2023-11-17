<?php
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>DeskApp - MSN Dashboard HTML Template</title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="vendors/images/apple-touch-icon.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="vendors/images/favicon-32x32.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="vendors/images/favicon-16x16.png"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="vendors/styles/icon-font.min.css"
		/>
		<link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script
			async
			src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
		></script>
		<script
			async
			src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
			crossorigin="anonymous"
		></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());

			gtag("config", "G-GBZ3SGGX85");
		</script>
		<!-- Google Tag Manager -->
		<script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
		</script>
		<!-- End Google Tag Manager -->
	</head>

	<body>
		<div class="login-header box-shadow">
			<div
				class="container-fluid d-flex justify-content-between align-items-center"
			>
				<div class="brand-logo">
					<a href="adminLogin.php">
						<img src="vendors/images/deskapp-logo.svg" alt="" />
					</a>
				</div>
				<div class="login-menu">
					<ul>
						<li><a href="adminLogin.php">Login</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div
			class="login-wrap d-flex align-items-center flex-wrap justify-content-center"
		>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6">
						<img src="vendors/images/forgot-password.png" alt="" />
					</div>
					<div class="col-md-6">
						<div class="login-box bg-white box-shadow border-radius-10">
							<div class="login-title">
								<h2 class="text-center text-primary">Forgot Password</h2>
							</div>
							<!--columns-->
							<h6 class="mb-20">Enter your Username</h6>
							<form method="POST"> <!-- Updated the form method -->
								<div class="input-group custom">
									<input type="text" class="form-control form-control-lg" placeholder="Username" name="username" />
									<div class="input-group-append custom">
										<span class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
									</div>
								</div>
								<!-- New Password Field -->
								<div class="input-group custom">
									<input type="password" class="form-control form-control-lg" placeholder="New Password" name="password" />
									<div class="input-group-append custom">
										<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
									</div>
								</div>
								<!-- Confirm Password Field -->
								<div class="input-group custom">
									<input type="password" class="form-control form-control-lg" placeholder="Confirm Password" name="password" />
									<div class="input-group-append custom">
										<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
									</div>
								</div>
								<div class="row align-items-center">
									<div class="col-5">
										<div class="input-group mb-0">
											
												<input class="btn btn-primary btn-lg btn-block" type="submit" value="Submit" name="resetpasswordbutton">
											
										</div>
									</div>
									<div class="col-2">
										<div class="font-16 weight-600 text-center" data-color="#707373">
											OR
										</div>
									</div>
									<div class="col-5">
										<div class="input-group mb-0">
											<a class="btn btn-outline-primary btn-lg btn-block" href="adminLogin.php">Login</a>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- js -->
		<script src="vendors/scripts/core.js"></script>
		<script src="vendors/scripts/script.min.js"></script>
		<script src="vendors/scripts/process.js"></script>
		<script src="vendors/scripts/layout-settings.js"></script>
	

		<?php

			

			include 'dbconnect.php';

			if (isset($_POST['resetpasswordbutton'])) {
				$username = $_POST['username'];
				$newPassword = md5($_POST['password']);
				var_dump("password:".$_POST['password']);
				var_dump($newPassword);

				// Check if the username exists in your database
				$checkUsernameSql = "SELECT * FROM staff WHERE username = '$username'";
				$checkUsernameQuery = mysqli_query($con, $checkUsernameSql);

				if (mysqli_num_rows($checkUsernameQuery) > 0) {
					// Update the password
					$updateSql = "UPDATE staff SET password = '$newPassword' WHERE username = '$username'";
					$updateQuery = mysqli_query($con, $updateSql);

					if ($updateQuery) {
						echo '<script>';
						echo 'alert("Password Reset Successfully")';
						echo '</script>';
					} else {
						echo '<script>';
						echo 'alert("Password Reset Failed")';
						echo '</script>';
					}
				} else {
					echo '<script>';
					echo 'alert("Username not found")';
					echo '</script>';
				}
			}
		?>
	</body>
</html>
