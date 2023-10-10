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
<?php include 'header.php'?>
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
		<!--side bar end-->
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Add Staff</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item">
										<a href="testdashboard.php">Home</a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">
										New Staff
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
													<a class="nav-link active" data-toggle="tab" href="#setting" role="tab">Add New Staff</a>
												</li>
											</ul>
											<div class="tab-content">
												<!-- Setting Tab start -->
												<div class="tab-pane fade show active" id="setting" role="tabpanel">
													<div class="profile-setting">
														<form action="addStaff.php" method="POST">
															<ul class="profile-edit-list row">
																<li class="weight-500 col-md-6">
																	<h4 class="text-blue h5 mb-20">
																		New Staff Details
																	</h4>

																	<?php

																		// Create a connection
																		$conn = mysqli_connect("localhost", "root", "root", "msnbooking");

																		// Check the connection
																		if ($conn->connect_error) {
																			die("Connection failed: " . $conn->connect_error);
																		}

																		// Handle form submission
																		if ($_SERVER["REQUEST_METHOD"] == "POST") {
																			// Generate the next available username in the "Staff01" format
																			$sql = "SELECT MAX(username) AS max_username FROM staff";
																			$result = $conn->query($sql);
																			$row = $result->fetch_assoc();
																			$max_username = $row["max_username"];
																			$next_number = (int)substr($max_username, 5) + 1; // Extract numeric part and increment
																			$next_username = "Staff" . sprintf("%02d", $next_number); // Format with leading zeros
																	
																			$fName = $_POST["fName"];
																			$email = $_POST["email"];
																			$phoneNumber = $_POST["phoneNumber"];
																			$dob = $_POST["dob"];
																			$gender = $_POST["gender"];
																			$address = $_POST["address"];
																			$postalcode = $_POST["postalcode"];
																			$state = $_POST["state"];
																			$country = $_POST["country"];
																			$bank = $_POST["bank"];

																			$password = $next_username;

																			// Insert staff information into the database
																			$sql = "INSERT INTO staff (username, password, fName, email, phoneNumber, dob, gender, address, postalcode, state, country, bank) 
																					VALUES ('$next_username', '$password', '$fName', '$email', '$phoneNumber', '$dob', '$gender', '$address', '$postalcode', '$state', '$country', '$bank')";
																			
																			if ($conn->query($sql) === TRUE) {
																				echo '<script>alert("Staff added successfully!");</script>';
																			} else {
																				echo "Error: " . $sql . "<br>" . $conn->error;
																			}
																		}

																		// Close the database connection
																		$conn->close();
																	?>
																	
																	<div class="form-group">
																		<label>Full Name</label>
																		<input class="form-control form-control-lg" type="text" name="fName"  required />
																	</div>
																	<div class="form-group">
																		<label>Email</label>
																		<input class="form-control form-control-lg" type="email" name="email" required/>
																	</div>
																	<div class="form-group">
																		<label>Phone Number</label>
																		<input class="form-control form-control-lg" type="text" name="phoneNumber" required/>
																	</div>
																	<div class="form-group">
																		<label>Date of birth</label>
																		<input class="form-control form-control-lg date-picker" type="text" name="dob" />
																	</div>
																	<div class="form-group">
																		<label>Gender</label>
																		<div class="d-flex">
																			<div class="custom-control custom-radio mb-5 mr-20">
																				<input type="radio" id="male" name="gender" value="male" class="custom-control-input"  />
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
																		<input class="form-control form-control-lg" type="text"  name="postalcode" />
																	</div>
																	<div class="form-group">
																		<label>State</label>
																		<input class="form-control form-control-lg" type="text"  name="state" />
																	</div>
																	<div class="form-group">
																		<label>Country</label>
																		<input class="form-control form-control-lg" type="text"  name="country" />
																	</div>
																	<div class="form-group">
																		<label>Bank Card Number</label>
																		<input class="form-control form-control-lg" type="text"  name="bank" />
																	</div>
																	<div class="form-group mb-0">
																		<input type="submit" class="btn btn-primary" name="addButton" value="Add Staff" />
																	</div>
																</li>
															</ul>
														</form>
													</div>
												</div>
												<!-- Setting Tab End -->
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
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
</body>

</html>