<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8" />
	<title>MSN - Administrator Dashboard</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png" />

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css" />
	<link rel="stylesheet" type="text/css" href="src/plugins/cropperjs/dist/cropper.css" />
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258" crossorigin="anonymous"></script>
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
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				"gtm.start": new Date().getTime(),
				event: "gtm.js"
			});
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
	<div class="header">
		<div class="header-left">
			<div class="menu-icon bi bi-list"></div>
			<div class="search-toggle-icon bi bi-search" data-toggle="header_search"></div>
			<div class="header-search">
				<form>
					<div class="form-group mb-0">
						<i class="dw dw-search2 search-icon"></i>
						<input type="text" class="form-control search-input" placeholder="Search Here" />
					</div>
				</form>
			</div>
		</div>
		<div class="header-right">
			<div class="dashboard-setting user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
						<i class="dw dw-settings2"></i>
					</a>
				</div>
			</div>

			<div class="user-info-dropdown">
			<?php
				session_start();
				$username = $_SESSION['username'];
				$type = $_SESSION['type'];
				$con = mysqli_connect("localhost", "root", "root", "msnbooking");

				if($type == 'admin'){
					$sql = "SELECT * FROM admin WHERE username = '$username'";
					$result = mysqli_query($con, $sql);

					if (mysqli_num_rows($result) > 0) {
						$row = mysqli_fetch_assoc($result);
						$fName = $row['fName'];
						$email = $row['email'];
						$phoneNumber = $row['phoneNumber'];
						$dob = $row['dob'];
						$gender = $row['gender'];
						$addresses = $row['address'];
						$postalcode = $row['postalcode'];
						$state = $row['state'];
						$country = $row['country'];
					}
				}
				else if($type == 'staff'){
					$sql = "SELECT * FROM staff WHERE username = '$username'";
					$result = mysqli_query($con, $sql);

					if (mysqli_num_rows($result) > 0) {
						// Fetch the first row
						$row = mysqli_fetch_assoc($result);
	
						// Extract data into variables
						$fName = $row['fname'];
						$email = $row['email'];
						$phoneNumber = $row['phoneNumber'];
						$dob = $row['dob'];
						$gender = $row['gender'];
						$addresses = $row['address'];
						$postalcode = $row['postalcode'];
						$state = $row['state'];
						$country = $row['country'];
					}
					mysqli_close($con);
				}
				?>
					<div class="dropdown">
						<a
							class="dropdown-toggle"
							href="#"
							role="button"
							data-toggle="dropdown"
						>
							<span class="user-icon">
								<img src="vendors/images/profilelogo.png" alt="" />
							</span>
							<span class="user-name"><?php echo $fName?></span>
						</a>
						<div
							class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
						>
							<a class="dropdown-item" href="profile.php"
								><i class="dw dw-user1"></i> Profile</a
							>
                            <?php if($_SESSION['type'] == 'staff'){ ?>
                            <a class="dropdown-item" href="changePassword.php">
                                <i class="dw dw-user1"></i> Change Password
                            </a>
                            <?php }?>
							<!--<a class="dropdown-item" href="profile.php"
								><i class="dw dw-settings2"></i> Setting</a
							>
							<a class="dropdown-item" href="faq.php"
								><i class="dw dw-help"></i> Help</a
							>-->
							<a class="dropdown-item" href="adminLogin.php"
								><i class="dw dw-logout"></i> Log Out</a
							>
						</div>
					</div>
				</div>
				<!--<div class="github-link">
					<a href="https://github.com/dropways/deskapp" target="_blank"
						><img src="vendors/images/github.svg" alt=""
					/></a>
				</div>-->
			</div>
		</div>

	<div class="right-sidebar">
		<div class="sidebar-title">
			<h3 class="weight-600 font-16 text-blue">
				Layout Settings
				<span class="btn-block font-weight-400 font-12">User Interface Settings</span>
			</h3>
			<div class="close-sidebar" data-toggle="right-sidebar-close">
				<i class="icon-copy ion-close-round"></i>
			</div>
		</div>
		<div class="right-sidebar-body customscroll">
			<div class="right-sidebar-body-content">
				<h4 class="weight-600 font-18 pb-10">Header Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
				<div class="sidebar-radio-group pb-10 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="" />
						<label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2" />
						<label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3" />
						<label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
					</div>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
				<div class="sidebar-radio-group pb-30 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="" />
						<label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2" />
						<label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3" />
						<label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="" />
						<label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5" />
						<label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6" />
						<label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
					</div>
				</div>

				<div class="reset-options pt-30 text-center">
					<button class="btn btn-danger" id="reset-settings">
						Reset Settings
					</button>
				</div>
			</div>
		</div>
	</div>

	<?php include 'leftsidebar.php';?>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Change Password</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item">
										<a href="staff_dashboard.php">Home</a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">
										Change Password
									</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="row">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
                                <div class="pd-20 card-box height-100-p">
                                    
                                    <div class="profile-info">
                                      
                                         <h3 class="mb-20 h5 text-blue text-center">Change Password </h3>
                                        
                                         <!--columns-->
                                        <h6 class="mb-20">Enter your Current Password</h6>

                                        <form method="POST"> <!-- Updated the form method -->
                                            <div class="input-group custom">
                                                <input type="password" class="form-control form-control-lg" placeholder="Current Password" name="currentpass" minlength="6" maxlength="15" id="currentpass"> 
                                                <div class="input-group-append custom">
                                                    <span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                                </div>
                                            </div>
                                            <!-- New Password Field -->
                                            <h6 class="mb-20">Enter your New Password</h6>
                                            <div class="input-group custom">
                                                <input type="password" class="form-control form-control-lg" placeholder="New Password" name="password"  minlength="6" maxlength="15" id="password"> 
                                                <div class="input-group-append custom">
                                                    <span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                                </div>
                                            </div>
                                            <!-- Confirm Password Field -->
                                            <h6 class="mb-20">Confirm your New Password</h6>
                                            <div class="input-group custom">
                                                <input type="password" class="form-control form-control-lg" placeholder="Confirm Password" name="cpassword" minlength="6" maxlength="15" id="cpassword"> 
                                                <div class="input-group-append custom">
                                                    <span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                                </div>
                                            </div>

                                            <input class="btn btn-primary btn-lg btn-block" type="submit" value="Submit" name="changepasswordbutton">
                                            
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        </div>    
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
	<script src="src/plugins/cropperjs/dist/cropper.js"></script>
	<script>
		window.addEventListener("DOMContentLoaded", function() {
			var image = document.getElementById("image");
			var cropBoxData;
			var canvasData;
			var cropper;

			$("#modal")
				.on("shown.bs.modal", function() {
					cropper = new Cropper(image, {
						autoCropArea: 0.5,
						dragMode: "move",
						aspectRatio: 3 / 3,
						restore: false,
						guides: false,
						center: false,
						highlight: false,
						cropBoxMovable: false,
						cropBoxResizable: false,
						toggleDragModeOnDblclick: false,
						ready: function() {
							cropper.setCropBoxData(cropBoxData).setCanvasData(canvasData);
						},
					});
				})
				.on("hidden.bs.modal", function() {
					cropBoxData = cropper.getCropBoxData();
					canvasData = cropper.getCanvasData();
					cropper.destroy();
				});
		});
	</script>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
</body>


        <?php

			$dbHost = "localhost";
			$dbUsername = "root";
			$dbPassword = "root";
			$dbName = "msnbooking";

			// Establish a database connection
			$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}

			if (isset($_POST['changepasswordbutton'])) {
				$username = $_SESSION['username'];

                $password = md5($_POST['password']);

                $code = rand();

                $sql =  "UPDATE staff SET password = '$password' WHERE username = '$username'";
                var_dump($sql);
                $qry = mysqli_query($conn,$sql);
                
                if($qry){
                    echo '<script>';
                    echo 'alert("Change Succesfully")';
                    echo '</script>';
                }
			}
		?>

</html>
