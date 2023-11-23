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
	


</head>


<body>
<?php include 'header.php'?>
<?php include 'rightsidebar.php';?>

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

                                            <input class="btn btn-primary btn-lg btn-block" type="submit" value="Change Password" name="changepasswordbutton">
                                            
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
	
</body>


        <?php


			// Establish a database connection
			include 'dbconnect.php';

			if (isset($_POST['changepasswordbutton'])) {
				$username = $_SESSION['username'];

                $password = md5($_POST['password']);

                $code = rand();

                $sql =  "UPDATE staff SET password = '$password' WHERE username = '$username'";
               
                $qry = mysqli_query($conn,$sql);
                
                if($qry){
                    echo '<script>';
                    echo 'alert("Change Succesfully")';
                    echo '</script>';
                }
			}
		?>

</html>
