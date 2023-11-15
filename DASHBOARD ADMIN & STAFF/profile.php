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

	<?php include 'rightsidebar.php'?>
	<?php include 'leftsidebar.php';?>
	<!--sidebar end-->
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Profile</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item">
										<a href="testdashboard.php">Home</a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">
										Profile Setting
									</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<div class="profile-photo">
								
								<img src="vendors/images/profilelogo.png" alt="" class="avatar-photo" />
								<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											
											<div class="modal-footer">
												<input type="submit" value="Update" class="btn btn-primary" />
												<button type="button" class="btn btn-default" data-dismiss="modal">
													Close
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<h5 class="text-center h5 mb-0"><?php echo $fName ?></h5>
							<p class="text-center text-muted font-14">

							</p>
							<div class="profile-info">
								<h5 class="mb-20 h5 text-blue">Contact Information</h5>
								<ul>
									<li>
										<span>Email Address:</span>
										<?php echo $email ?>
									</li>
									<li>
										<span>Phone Number:</span>
										<?php echo "+60".$phoneNumber ?>
									</li>
									<li>
										<span>Country:</span>
										<?php echo $country ?>
									</li>
									<li>
										<span>Address:</span>
										<?php echo $addresses.", ".$postalcode.", ".$state.", ".$country ?>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
						<div class="card-box height-100-p overflow-hidden">
							<div class="profile-tab height-100-p">
								<div class="tab height-100-p">
									<ul class="nav nav-tabs customtab" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#setting" role="tab">Settings</a>
										</li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane fade show active" id="setting" role="tabpanel">
											<div class="profile-setting">


												<form action="processform.php" method="POST">
													<ul class="profile-edit-list row">
														<li class="weight-500 col-md-6">
															<h4 class="text-blue h5 mb-20">
																Edit Your Personal Setting
															</h4>
															
															<div class="form-group">
																<label>Full Name</label>
																<input class="form-control form-control-lg" type="text" name="fName" />
															</div>
															<div class="form-group">
																<label>Email</label>
																<input class="form-control form-control-lg" type="email" name="email"/>
															</div>
															<div class="form-group">
																<label>Phone Number</label>
																<input class="form-control form-control-lg" type="text" name="phoneNumber" />
															</div>
															<div class="form-group">
																<label>Date of birth</label>
																<input class="form-control form-control-lg date-picker" type="text" name="dob" />
															</div>
															<div class="form-group">
																<label>Gender</label>
																<div class="d-flex">
																	<div class="custom-control custom-radio mb-5 mr-20">
																		<input type="radio" id="male" name="gender" value="male" class="custom-control-input" />
																		<label class="custom-control-label" for="male">Male</label>
																	</div>
																	<div class="custom-control custom-radio mb-5">
																		<input type="radio" id="female" name="gender" value="female" class="custom-control-input" />
																		<label class="custom-control-label" for="female">Female</label>
																	</div>
																</div>
															</div>
															<div class="form-group">
																<label>Address</label>
																<input class="form-control" type="text" name="address" />
															</div>
															<div class="form-group">
																<label>Postal Code</label>
																<input class="form-control form-control-lg" type="text" name="postalcode" />
															</div>
															<div class="form-group">
																<label>State</label>
																<input class="form-control form-control-lg" type="text" name="state" />
															</div>
															<div class="form-group">
																<label>Country</label>
																<input class="form-control form-control-lg" type="text" name="country" />
															</div>
															<div class="form-group">
																<label>Bank Card Number</label>
																<input class="form-control form-control-lg" type="text" name="bank" />
															</div>
															<div class="form-group mb-0">
																<input type="submit" class="btn btn-primary" name="updateButton" value="Update Information" />
															</div>
														</li>
													</ul>
												</form>
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

</html>