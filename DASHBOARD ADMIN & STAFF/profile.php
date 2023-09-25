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
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="vendors/images/profilelogo.png" alt="" />
						</span>
						<span class="user-name" name="fname"><?php echo $fName ?></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="profile.php"><i class="dw dw-user1"></i> Profile</a>
						<a class="dropdown-item" href="profile.php"><i class="dw dw-settings2"></i> Setting</a>
						<a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>
						<a class="dropdown-item" href="adminLogin.php"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>
			<div class="github-link">
				<a href="https://github.com/dropways/deskapp" target="_blank"><img src="vendors/images/github.svg" alt="" /></a>
			</div>
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

	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="admin_dashboard.php">
				<img src="vendors/images/deskapp-logo.svg" alt="" class="dark-logo" />
				<img src="vendors/images/deskapp-logo-white.svg" alt="" class="light-logo" />
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li>
						<a href="admin_dashboard.php" class="dropdown-toggle no-arrow">
							<span class="micon bi bi-house"></span><span class="mtext">Home</span>
						</a>
					</li>

					<li>
						<a href="calendar.html" class="dropdown-toggle no-arrow">
							<span class="micon bi bi-calendar4-week"></span><span class="mtext">Calendar</span>
						</a>
					</li>

					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon bi bi-pie-chart"></span><span class="mtext">Charts</span>
						</a>
						<ul class="submenu">
							<li><a href="highchart.html">Highchart</a></li>
							<li><a href="knob-chart.html">jQuery Knob</a></li>
							<li><a href="jvectormap.html">jvectormap</a></li>
							<li><a href="apexcharts.html">Apexcharts</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon bi bi-file-earmark-text"></span><span class="mtext">Website Pages</span>
						</a>
						<ul class="submenu">
							<li><a href="../MSN BOOKING SYSTEM/index.php">Home Page</a></li>
							<li><a href="../MSN BOOKING SYSTEM/about.php">About Us</a></li>
							<li><a href="../MSN BOOKING SYSTEM/contact.php">Contact Us</a></li>
							<li><a href="editcontact.php">Contact Settings</a></li>
							<li><a href="editabout.php">About Us Settings</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon bi bi-bug"></span><span class="mtext">Error Pages</span>
						</a>
						<ul class="submenu">
							<li><a href="400.html">400</a></li>
							<li><a href="403.html">403</a></li>
							<li><a href="404.html">404</a></li>
							<li><a href="500.html">500</a></li>
							<li><a href="503.html">503</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon bi bi-back"></span><span class="mtext">Extra Pages</span>
						</a>
						<ul class="submenu">
							<li><a href="blank.html">Blank</a></li>
							<li><a href="contact-directory.html">Contact Directory</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="blog-detail.html">Blog Detail</a></li>
							<li><a href="product.html">Product</a></li>
							<li><a href="product-detail.html">Product Detail</a></li>
							<li><a href="faq.html">FAQ</a></li>
							<li><a href="profile.php">Profile</a></li>
							<li><a href="gallery.html">Gallery</a></li>
							<li><a href="pricing-table.html">Pricing Tables</a></li>
						</ul>
					</li>

					<li>
						<a href="invoice.html" class="dropdown-toggle no-arrow">
							<span class="micon bi bi-receipt-cutoff"></span><span class="mtext">Invoice</span>
						</a>
					</li>
					<li>
						<div class="dropdown-divider"></div>
					</li>
					<li>
						<div class="sidebar-small-cap">Extra</div>
					</li>

					<li>
						<a href="https://dropways.github.io/deskapp-free-single-page-website-template/" target="_blank" class="dropdown-toggle no-arrow">
							<span class="micon bi bi-layout-text-window-reverse"></span>
							<span class="mtext">Landing Page
								<img src="vendors/images/coming-soon.png" alt="" width="25" /></span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
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
										<a href="index.php">Home</a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">
										Profile
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
								<a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
								<img src="vendors/images/profilelogo.png" alt="" class="avatar-photo" />
								<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-body pd-5">
												<div class="img-container">
													<img id="image" src="vendors/images/photo2.jpg" alt="Picture" />
												</div>
											</div>
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
							<div class="profile-social">
								<h5 class="mb-20 h5 text-blue">Social Links</h5>
								<ul class="clearfix">
									<li>
										<a href="#" class="btn" data-bgcolor="#3b5998" data-color="#ffffff"><i class="fa fa-facebook"></i></a>
									</li>
									<li>
										<a href="#" class="btn" data-bgcolor="#1da1f2" data-color="#ffffff"><i class="fa fa-twitter"></i></a>
									</li>
									<li>
										<a href="#" class="btn" data-bgcolor="#007bb5" data-color="#ffffff"><i class="fa fa-linkedin"></i></a>
									</li>
									<li>
										<a href="#" class="btn" data-bgcolor="#f46f30" data-color="#ffffff"><i class="fa fa-instagram"></i></a>
									</li>
									<li>
										<a href="#" class="btn" data-bgcolor="#c32361" data-color="#ffffff"><i class="fa fa-dribbble"></i></a>
									</li>
									<li>
										<a href="#" class="btn" data-bgcolor="#3d464d" data-color="#ffffff"><i class="fa fa-dropbox"></i></a>
									</li>
									<li>
										<a href="#" class="btn" data-bgcolor="#db4437" data-color="#ffffff"><i class="fa fa-google-plus"></i></a>
									</li>
									<li>
										<a href="#" class="btn" data-bgcolor="#bd081c" data-color="#ffffff"><i class="fa fa-pinterest-p"></i></a>
									</li>
									<li>
										<a href="#" class="btn" data-bgcolor="#00aff0" data-color="#ffffff"><i class="fa fa-skype"></i></a>
									</li>
									<li>
										<a href="#" class="btn" data-bgcolor="#00b489" data-color="#ffffff"><i class="fa fa-vine"></i></a>
									</li>
								</ul>
							</div>
							<div class="profile-skills">
								<h5 class="mb-20 h5 text-blue">Key Skills</h5>
								<h6 class="mb-5 font-14">HTML</h6>
								<div class="progress mb-20" style="height: 6px">
									<div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<h6 class="mb-5 font-14">Css</h6>
								<div class="progress mb-20" style="height: 6px">
									<div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<h6 class="mb-5 font-14">jQuery</h6>
								<div class="progress mb-20" style="height: 6px">
									<div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<h6 class="mb-5 font-14">Bootstrap</h6>
								<div class="progress mb-20" style="height: 6px">
									<div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
						<div class="card-box height-100-p overflow-hidden">
							<div class="profile-tab height-100-p">
								<div class="tab height-100-p">
									<ul class="nav nav-tabs customtab" role="tablist">
										<!--<li class="nav-item">
												<a
													class="nav-link active"
													data-toggle="tab"
													href="timeline"
													role="tab"
													>Timeline</a
												>
											</li>
											<li class="nav-item">
												<a
													class="nav-link"
													data-toggle="tab"
													href="#tasks"
													role="tab"
													>Tasks</a
												>
											</li>-->
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#setting" role="tab">Settings</a>
										</li>
									</ul>
									<div class="tab-content">
										<!-- Timeline Tab start 
											<div
												class="tab-pane fade show active"
												id="timeline"
												role="tabpanel"
											>
												<div class="pd-20">
													<div class="profile-timeline">
														<div class="timeline-month">
															<h5>August, 2020</h5>
														</div>
														<div class="profile-timeline-list">
															<ul>
																<li>
																	<div class="date">12 Aug</div>
																	<div class="task-name">
																		<i class="ion-android-alarm-clock"></i> Task
																		Added
																	</div>
																	<p>
																		Lorem ipsum dolor sit amet, consectetur
																		adipisicing elit.
																	</p>
																	<div class="task-time">09:30 am</div>
																</li>
																<li>
																	<div class="date">10 Aug</div>
																	<div class="task-name">
																		<i class="ion-ios-chatboxes"></i> Task Added
																	</div>
																	<p>
																		Lorem ipsum dolor sit amet, consectetur
																		adipisicing elit.
																	</p>
																	<div class="task-time">09:30 am</div>
																</li>
																<li>
																	<div class="date">10 Aug</div>
																	<div class="task-name">
																		<i class="ion-ios-clock"></i> Event Added
																	</div>
																	<p>
																		Lorem ipsum dolor sit amet, consectetur
																		adipisicing elit.
																	</p>
																	<div class="task-time">09:30 am</div>
																</li>
																<li>
																	<div class="date">10 Aug</div>
																	<div class="task-name">
																		<i class="ion-ios-clock"></i> Event Added
																	</div>
																	<p>
																		Lorem ipsum dolor sit amet, consectetur
																		adipisicing elit.
																	</p>
																	<div class="task-time">09:30 am</div>
																</li>
															</ul>
														</div>
														<div class="timeline-month">
															<h5>July, 2020</h5>
														</div>
														<div class="profile-timeline-list">
															<ul>
																<li>
																	<div class="date">12 July</div>
																	<div class="task-name">
																		<i class="ion-android-alarm-clock"></i> Task
																		Added
																	</div>
																	<p>
																		Lorem ipsum dolor sit amet, consectetur
																		adipisicing elit.
																	</p>
																	<div class="task-time">09:30 am</div>
																</li>
																<li>
																	<div class="date">10 July</div>
																	<div class="task-name">
																		<i class="ion-ios-chatboxes"></i> Task Added
																	</div>
																	<p>
																		Lorem ipsum dolor sit amet, consectetur
																		adipisicing elit.
																	</p>
																	<div class="task-time">09:30 am</div>
																</li>
															</ul>
														</div>
														<div class="timeline-month">
															<h5>June, 2020</h5>
														</div>
														<div class="profile-timeline-list">
															<ul>
																<li>
																	<div class="date">12 June</div>
																	<div class="task-name">
																		<i class="ion-android-alarm-clock"></i> Task
																		Added
																	</div>
																	<p>
																		Lorem ipsum dolor sit amet, consectetur
																		adipisicing elit.
																	</p>
																	<div class="task-time">09:30 am</div>
																</li>
																<li>
																	<div class="date">10 June</div>
																	<div class="task-name">
																		<i class="ion-ios-chatboxes"></i> Task Added
																	</div>
																	<p>
																		Lorem ipsum dolor sit amet, consectetur
																		adipisicing elit.
																	</p>
																	<div class="task-time">09:30 am</div>
																</li>
																<li>
																	<div class="date">10 June</div>
																	<div class="task-name">
																		<i class="ion-ios-clock"></i> Event Added
																	</div>
																	<p>
																		Lorem ipsum dolor sit amet, consectetur
																		adipisicing elit.
																	</p>
																	<div class="task-time">09:30 am</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											 Timeline Tab End -->
										<!--Tasks Tab start 
											<div class="tab-pane fade" id="tasks" role="tabpanel">
												<div class="pd-20 profile-task-wrap">
													<div class="container pd-0">-->
										<!--Open Task start 
														<div class="task-title row align-items-center">
															<div class="col-md-8 col-sm-12">
																<h5>Open Tasks (4 Left)</h5>
															</div>
															<div class="col-md-4 col-sm-12 text-right">
																<a
																	href="task-add"
																	data-toggle="modal"
																	data-target="#task-add"
																	class="bg-light-blue btn text-blue weight-500"
																	><i class="ion-plus-round"></i> Add</a
																>
															</div>
														</div>
														<div class="profile-task-list pb-30">
															<ul>
																<li>
																	<div
																		class="custom-control custom-checkbox mb-5"
																	>
																		<input
																			type="checkbox"
																			class="custom-control-input"
																			id="task-1"
																		/>
																		<label
																			class="custom-control-label"
																			for="task-1"
																		></label>
																	</div>
																	<div class="task-type">Email</div>
																	Lorem ipsum dolor sit amet, consectetur
																	adipisicing elit. Id ea earum.
																	<div class="task-assign">
																		Assigned to Ferdinand M.
																		<div class="due-date">
																			due date <span>22 February 2019</span>
																		</div>
																	</div>
																</li>
																<li>
																	<div
																		class="custom-control custom-checkbox mb-5"
																	>
																		<input
																			type="checkbox"
																			class="custom-control-input"
																			id="task-2"
																		/>
																		<label
																			class="custom-control-label"
																			for="task-2"
																		></label>
																	</div>
																	<div class="task-type">Email</div>
																	Lorem ipsum dolor sit amet.
																	<div class="task-assign">
																		Assigned to Ferdinand M.
																		<div class="due-date">
																			due date <span>22 February 2019</span>
																		</div>
																	</div>
																</li>
																<li>
																	<div
																		class="custom-control custom-checkbox mb-5"
																	>
																		<input
																			type="checkbox"
																			class="custom-control-input"
																			id="task-3"
																		/>
																		<label
																			class="custom-control-label"
																			for="task-3"
																		></label>
																	</div>
																	<div class="task-type">Email</div>
																	Lorem ipsum dolor sit amet, consectetur
																	adipisicing elit.
																	<div class="task-assign">
																		Assigned to Ferdinand M.
																		<div class="due-date">
																			due date <span>22 February 2019</span>
																		</div>
																	</div>
																</li>
																<li>
																	<div
																		class="custom-control custom-checkbox mb-5"
																	>
																		<input
																			type="checkbox"
																			class="custom-control-input"
																			id="task-4"
																		/>
																		<label
																			class="custom-control-label"
																			for="task-4"
																		></label>
																	</div>
																	<div class="task-type">Email</div>
																	Lorem ipsum dolor sit amet. Id ea earum.
																	<div class="task-assign">
																		Assigned to Ferdinand M.
																		<div class="due-date">
																			due date <span>22 February 2019</span>
																		</div>
																	</div>
																</li>
															</ul>
														</div>
														 Open Task End -->
										<!-- Close Task start 
														<div class="task-title row align-items-center">
															<div class="col-md-12 col-sm-12">
																<h5>Closed Tasks</h5>
															</div>
														</div>
														<div class="profile-task-list close-tasks">
															<ul>
																<li>
																	<div
																		class="custom-control custom-checkbox mb-5"
																	>
																		<input
																			type="checkbox"
																			class="custom-control-input"
																			id="task-close-1"
																			checked=""
																			disabled=""
																		/>
																		<label
																			class="custom-control-label"
																			for="task-close-1"
																		></label>
																	</div>
																	<div class="task-type">Email</div>
																	Lorem ipsum dolor sit amet, consectetur
																	adipisicing elit. Id ea earum.
																	<div class="task-assign">
																		Assigned to Ferdinand M.
																		<div class="due-date">
																			due date <span>22 February 2018</span>
																		</div>
																	</div>
																</li>
																<li>
																	<div
																		class="custom-control custom-checkbox mb-5"
																	>
																		<input
																			type="checkbox"
																			class="custom-control-input"
																			id="task-close-2"
																			checked=""
																			disabled=""
																		/>
																		<label
																			class="custom-control-label"
																			for="task-close-2"
																		></label>
																	</div>
																	<div class="task-type">Email</div>
																	Lorem ipsum dolor sit amet.
																	<div class="task-assign">
																		Assigned to Ferdinand M.
																		<div class="due-date">
																			due date <span>22 February 2018</span>
																		</div>
																	</div>
																</li>
																<li>
																	<div
																		class="custom-control custom-checkbox mb-5"
																	>
																		<input
																			type="checkbox"
																			class="custom-control-input"
																			id="task-close-3"
																			checked=""
																			disabled=""
																		/>
																		<label
																			class="custom-control-label"
																			for="task-close-3"
																		></label>
																	</div>
																	<div class="task-type">Email</div>
																	Lorem ipsum dolor sit amet, consectetur
																	adipisicing elit.
																	<div class="task-assign">
																		Assigned to Ferdinand M.
																		<div class="due-date">
																			due date <span>22 February 2018</span>
																		</div>
																	</div>
																</li>
																<li>
																	<div
																		class="custom-control custom-checkbox mb-5"
																	>
																		<input
																			type="checkbox"
																			class="custom-control-input"
																			id="task-close-4"
																			checked=""
																			disabled=""
																		/>
																		<label
																			class="custom-control-label"
																			for="task-close-4"
																		></label>
																	</div>
																	<div class="task-type">Email</div>
																	Lorem ipsum dolor sit amet. Id ea earum.
																	<div class="task-assign">
																		Assigned to Ferdinand M.
																		<div class="due-date">
																			due date <span>22 February 2018</span>
																		</div>
																	</div>
																</li>
															</ul>
														</div>
														 Close Task start -->
										<!-- add task popup start 
														<div
															class="modal fade customscroll"
															id="task-add"
															tabindex="-1"
															role="dialog"
														>
															<div
																class="modal-dialog modal-dialog-centered"
																role="document"
															>
																<div class="modal-content">
																	<div class="modal-header">
																		<h5
																			class="modal-title"
																			id="exampleModalLongTitle"
																		>
																			Tasks Add
																		</h5>
																		<button
																			type="button"
																			class="close"
																			data-dismiss="modal"
																			aria-label="Close"
																			data-toggle="tooltip"
																			data-placement="bottom"
																			title=""
																			data-original-title="Close Modal"
																		>
																			<span aria-hidden="true">&times;</span>
																		</button>
																	</div>
																	<div class="modal-body pd-0">
																		<div class="task-list-form">
																			<ul>
																				<li>
																					<form>
																						<div class="form-group row">
																							<label class="col-md-4"
																								>Task Type</label
																							>
																							<div class="col-md-8">
																								<input
																									type="text"
																									class="form-control"
																								/>
																							</div>
																						</div>
																						<div class="form-group row">
																							<label class="col-md-4"
																								>Task Message</label
																							>
																							<div class="col-md-8">
																								<textarea
																									class="form-control"
																								></textarea>
																							</div>
																						</div>
																						<div class="form-group row">
																							<label class="col-md-4"
																								>Assigned to</label
																							>
																							<div class="col-md-8">
																								<select
																									class="selectpicker form-control"
																									data-style="btn-outline-primary"
																									title="Not Chosen"
																									multiple=""
																									data-selected-text-format="count"
																									data-count-selected-text="{0} people selected"
																								>
																									<option>Ferdinand M.</option>
																									<option>Don H. Rabon</option>
																									<option>Ann P. Harris</option>
																									<option>
																										Katie D. Verdin
																									</option>
																									<option>
																										Christopher S. Fulghum
																									</option>
																									<option>
																										Matthew C. Porter
																									</option>
																								</select>
																							</div>
																						</div>
																						<div class="form-group row mb-0">
																							<label class="col-md-4"
																								>Due Date</label
																							>
																							<div class="col-md-8">
																								<input
																									type="text"
																									class="form-control date-picker"
																								/>
																							</div>
																						</div>
																					</form>
																				</li>
																				<li>
																					<a
																						href="javascript:;"
																						class="remove-task"
																						data-toggle="tooltip"
																						data-placement="bottom"
																						title=""
																						data-original-title="Remove Task"
																						><i class="ion-minus-circled"></i
																					></a>
																					<form>
																						<div class="form-group row">
																							<label class="col-md-4"
																								>Task Type</label
																							>
																							<div class="col-md-8">
																								<input
																									type="text"
																									class="form-control"
																								/>
																							</div>
																						</div>
																						<div class="form-group row">
																							<label class="col-md-4"
																								>Task Message</label
																							>
																							<div class="col-md-8">
																								<textarea
																									class="form-control"
																								></textarea>
																							</div>
																						</div>
																						<div class="form-group row">
																							<label class="col-md-4"
																								>Assigned to</label
																							>
																							<div class="col-md-8">
																								<select
																									class="selectpicker form-control"
																									data-style="btn-outline-primary"
																									title="Not Chosen"
																									multiple=""
																									data-selected-text-format="count"
																									data-count-selected-text="{0} people selected"
																								>
																									<option>Ferdinand M.</option>
																									<option>Don H. Rabon</option>
																									<option>Ann P. Harris</option>
																									<option>
																										Katie D. Verdin
																									</option>
																									<option>
																										Christopher S. Fulghum
																									</option>
																									<option>
																										Matthew C. Porter
																									</option>
																								</select>
																							</div>
																						</div>
																						<div class="form-group row mb-0">
																							<label class="col-md-4"
																								>Due Date</label
																							>
																							<div class="col-md-8">
																								<input
																									type="text"
																									class="form-control date-picker"
																								/>
																							</div>
																						</div>
																					</form>
																				</li>
																			</ul>
																		</div>
																		<div class="add-more-task">
																			<a
																				href="#"
																				data-toggle="tooltip"
																				data-placement="bottom"
																				title=""
																				data-original-title="Add Task"
																				><i class="ion-plus-circled"></i> Add
																				More Task</a
																			>
																		</div>
																	</div>
																	<div class="modal-footer">
																		<button
																			type="button"
																			class="btn btn-primary"
																		>
																			Add
																		</button>
																		<button
																			type="button"
																			class="btn btn-secondary"
																			data-dismiss="modal"
																		>
																			Close
																		</button>
																	</div>
																</div>
															</div>
														</div>
														 add task popup End 
													</div>
												</div>
											</div>
											 Tasks Tab End -->
										<!-- Setting Tab start -->
										<div class="tab-pane fade show active" id="setting" role="tabpanel">
											<div class="profile-setting">


												<form action="processform.php" method="POST">
													<ul class="profile-edit-list row">
														<li class="weight-500 col-md-6">
															<h4 class="text-blue h5 mb-20">
																Edit Your Personal Setting
															</h4>
															<!--<div class="form-group">
																	<label>Staff ID</label>
																	<input class="form-control form-control-lg" type="text" name="username"/>
																</div>-->
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
										<!-- Setting Tab End -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
				DeskApp - Bootstrap 4 Admin Template By
				<a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
			</div>
		</div>
	</div>
	<!-- welcome modal start -->
	<div class="welcome-modal">
		<button class="welcome-modal-close">
			<i class="bi bi-x-lg"></i>
		</button>
		<iframe class="w-100 border-0" src="https://embed.lottiefiles.com/animation/31548"></iframe>
		<div class="text-center">
			<h3 class="h5 weight-500 text-center mb-2">
				Open source
				<span role="img" aria-label="gratitude">❤️</span>
			</h3>
			<div class="pb-2">
				<a class="github-button" href="https://github.com/dropways/deskapp" data-color-scheme="no-preference: dark; light: light; dark: light;" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star dropways/deskapp dashboard on GitHub">Star</a>
				<a class="github-button" href="https://github.com/dropways/deskapp/fork" data-color-scheme="no-preference: dark; light: light; dark: light;" data-icon="octicon-repo-forked" data-size="large" data-show-count="true" aria-label="Fork dropways/deskapp dashboard on GitHub">Fork</a>
			</div>
		</div>
		<div class="text-center mb-1">
			<div>
				<a href="https://github.com/dropways/deskapp" target="_blank" class="btn btn-light btn-block btn-sm">
					<span class="text-danger weight-600">STAR US</span>
					<span class="weight-600">ON GITHUB</span>
					<i class="fa fa-github"></i>
				</a>
			</div>
			<script async defer="defer" src="https://buttons.github.io/buttons.js"></script>
		</div>
		<a href="https://github.com/dropways/deskapp" target="_blank" class="btn btn-success btn-sm mb-0 mb-md-3 w-100">
			DOWNLOAD
			<i class="fa fa-download"></i>
		</a>
		<p class="font-14 text-center mb-1 d-none d-md-block">
			Available in the following technologies:
		</p>
		<div class="d-none d-md-flex justify-content-center h1 mb-0 text-danger">
			<i class="fa fa-html5"></i>
		</div>
	</div>
	<button class="welcome-modal-btn">
		<i class="fa fa-download"></i> Download
	</button>
	<!-- welcome modal end -->
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