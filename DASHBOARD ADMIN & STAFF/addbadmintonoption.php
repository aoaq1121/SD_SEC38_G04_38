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
		<!--side bar end-->
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Add Badminton Option</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item">
										<a href="testdashboard.php">Home</a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">
										New Badminton Option
									</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="container">
                		 <div class="row justify-content-center">
							<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
								<div class="card-box height-100-p overflow-hidden">
									<div class="profile-tab height-100-p">
										<div class="tab height-100-p">
											<ul class="nav nav-tabs customtab" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" data-toggle="tab" href="#setting" role="tab">Add New Option</a>
												</li>
											</ul>
											<div class="tab-content">
												<!-- Setting Tab start -->
												<div class="tab-pane fade show active" id="setting" role="tabpanel">
													<div class="profile-setting">
														<form action="" method="POST">
															<ul class="profile-edit-list row">
																<li class="weight-500 col-md-6">
																	<h4 class="text-blue h5 mb-20">
																		New Badminton Time Option
																	</h4>
                                                                    <div class="form-group">
                                                                    <label for="timeid">Time Id</label>
                                                                    <input class="form-control form-control-lg" type="time" name="timeid" required><br>
                                                                    </div>
                                                                    <div class="form-group">
                                                                    <label for="timevalue">Time Value</label>
                                                                    <input class="form-control form-control-lg" type="text"  name="timevalue" required><br>
                                                                    </div>
                                                                    

                
                                                                    <div class="form-group mb-0">
                                                                    <input class="btn btn-primary" type="submit" name="addTimeOption" value="Update Time">
                                                                    </div>
                                                                </li>
													        </ul>
											            </form>
										            </div>
									            </div>
                                                <div class="tab-content">
												<!-- Setting Tab start -->
												<div class="tab-pane fade show active" id="setting" role="tabpanel">
													<div class="profile-setting">
														<form action="" method="POST">
															<ul class="profile-edit-list row">
																<li class="weight-500 col-md-6">
																	<h4 class="text-blue h5 mb-20">
																		New Badminton Duration Option
																	</h4>
                                                                    <div class="form-group">
                                                                    <label for="durationid">Duration Id</label>
                                                                    <input class="form-control form-control-lg" type="int" name="durationid" required><br>
                                                                    </div>
                                                                    <div class="form-group">
                                                                    <label for="durationvalue">Duration Value</label>
                                                                    <input class="form-control form-control-lg" type="text"  name="durationvalue" required><br>
                                                                    </div>
                                                                    

                
                                                                    <div class="form-group mb-0">
                                                                    <input class="btn btn-primary" type="submit" name="addDurationOption" value="Update Duration">
                                                                    </div>
                                                                </li>
													        </ul>
											            </form>
										            </div>
									            </div>
                                            </div>
                                            
											<?php
												// Connect to the database (replace with your database credentials)
												include 'dbconnect.php';

												if (isset($_POST['addTimeOption'])) {

													// Get data from the form
													$timeId = $_POST['timeid'];
													$timeValue = $_POST['timevalue'];

													// Prepare and execute the SQL INSERT query
													$query = "INSERT INTO badmintontimeoption (timeid, timevalue) VALUES ('$timeId', '$timeValue')";
													
													$result = mysqli_query($con,$query);

													if ($result) {
														// Successful insertion
														echo "
														<script>
														alert ('Time Option added successfully.');
														</script>
														";
													} else {
														// Error occurred during insertion
														echo "
														<script>
														alert ('Error adding time option: ' . ".mysqli_error($mysqli).");
														</script>
														";
														
													}

													
												}



												if (isset($_POST['addDurationOption'])) {


												// Get data from the form
												$durationId = $_POST['durationid'];
												$durationValue = $_POST['durationvalue'];

												// Prepare and execute the SQL INSERT query
												$sqlquery = "INSERT INTO badmintondurationoption (durationid, durationvalue) VALUES ('$durationId', '$durationValue')";
												
												$result = mysqli_query($con,$sqlquery);

												if ($result) {
													// Successful insertion
													echo "
													<script>
													alert ('Duration Option added successfully.');
													</script>
													";
												} else {
													// Error occurred during insertion
													echo "
													<script>
													alert ('Error adding time option: ' . ".mysqli_error($mysqli).");
													</script>
													";
													
												}

												
											}
										?>

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