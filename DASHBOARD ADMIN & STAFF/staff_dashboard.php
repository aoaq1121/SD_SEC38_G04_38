<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>MSN - Administrator Dashboard</title>

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
		<link
			rel="stylesheet"
			type="text/css"
			href="src/plugins/datatables/css/dataTables.bootstrap4.min.css"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="src/plugins/datatables/css/responsive.bootstrap4.min.css"
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
		<div class="header">
			<div class="header-left">
				<div class="menu-icon bi bi-list"></div>
				<div
					class="search-toggle-icon bi bi-search"
					data-toggle="header_search"
				></div>
				<div class="header-search">
					<form>
						<div class="form-group mb-0">
							<i class="dw dw-search2 search-icon"></i>
							<input
								type="text"
								class="form-control search-input"
								placeholder="Search Here"
							/>
						</div>
					</form>
				</div>
			</div>

			<div class="header-right">
				<div class="dashboard-setting user-notification">
					<div class="dropdown">
						<a
							class="dropdown-toggle no-arrow"
							href="javascript:;"
							data-toggle="right-sidebar"
						>
							<i class="dw dw-settings2"></i>
						</a>
					</div>
				</div>
				
				<div class="user-info-dropdown">
				<?php
					session_start();
					$username = $_SESSION['username'];
					$con=mysqli_connect("localhost","root","root","msnbooking");
					$sql = "SELECT * FROM admin WHERE username = '$username'";

					$result = mysqli_query($con, $sql);

					if (mysqli_num_rows($result) > 0) {
					$row = mysqli_fetch_assoc($result);
					$fName = $row['fName'];
					$email = $row['email'];
					$phoneNumber = $row['phoneNumber'];
					
					$gender = $row['gender'];
					$dob = $row['dob'];
					$address = $row['address'];
					$postalcode = $row['postalcode'];
					$state = $row['state'];
					$country = $row['country'];
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
							<a class="dropdown-item" href="profile.php"
								><i class="dw dw-settings2"></i> Setting</a
							>
							<a class="dropdown-item" href="faq.html"
								><i class="dw dw-help"></i> Help</a
							>
							<a class="dropdown-item" href="adminLogin.php"
								><i class="dw dw-logout"></i> Log Out</a
							>
						</div>
					</div>
				</div>
				<div class="github-link">
					<a href="https://github.com/dropways/deskapp" target="_blank"
						><img src="vendors/images/github.svg" alt=""
					/></a>
				</div>
			</div>
		</div>

		<div class="right-sidebar">
			<div class="sidebar-title">
				<h3 class="weight-600 font-16 text-blue">
					Layout Settings
					<span class="btn-block font-weight-400 font-12"
						>User Interface Settings</span
					>
				</h3>
				<div class="close-sidebar" data-toggle="right-sidebar-close">
					<i class="icon-copy ion-close-round"></i>
				</div>
			</div>
			<div class="right-sidebar-body customscroll">
				<div class="right-sidebar-body-content">
					<h4 class="weight-600 font-18 pb-10">Header Background</h4>
					<div class="sidebar-btn-group pb-30 mb-10">
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary header-white active"
							>White</a
						>
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary header-dark"
							>Dark</a
						>
					</div>

					<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
					<div class="sidebar-btn-group pb-30 mb-10">
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary sidebar-light"
							>White</a
						>
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary sidebar-dark active"
							>Dark</a
						>
					</div>

					<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
					<div class="sidebar-radio-group pb-10 mb-10">
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-1"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-1"
								checked=""
							/>
							<label class="custom-control-label" for="sidebaricon-1"
								><i class="fa fa-angle-down"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-2"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-2"
							/>
							<label class="custom-control-label" for="sidebaricon-2"
								><i class="ion-plus-round"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-3"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-3"
							/>
							<label class="custom-control-label" for="sidebaricon-3"
								><i class="fa fa-angle-double-right"></i
							></label>
						</div>
					</div>

					<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
					<div class="sidebar-radio-group pb-30 mb-10">
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-1"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-1"
								checked=""
							/>
							<label class="custom-control-label" for="sidebariconlist-1"
								><i class="ion-minus-round"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-2"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-2"
							/>
							<label class="custom-control-label" for="sidebariconlist-2"
								><i class="fa fa-circle-o" aria-hidden="true"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-3"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-3"
							/>
							<label class="custom-control-label" for="sidebariconlist-3"
								><i class="dw dw-check"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-4"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-4"
								checked=""
							/>
							<label class="custom-control-label" for="sidebariconlist-4"
								><i class="icon-copy dw dw-next-2"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-5"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-5"
							/>
							<label class="custom-control-label" for="sidebariconlist-5"
								><i class="dw dw-fast-forward-1"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-6"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-6"
							/>
							<label class="custom-control-label" for="sidebariconlist-6"
								><i class="dw dw-next"></i
							></label>
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
					<img src="vendors/images/Logo-MSN-Web-copy.png" alt="" class="dark-logo" />
					<img src="vendors/images/Logo-MSN-Web-copy.png" alt="" class="light-logo"/>
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
								<span class="micon bi bi-house"></span
								><span class="mtext">Home</span>
							</a>
						</li>
						
						<li>
							<a href="calendar.html" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-calendar4-week"></span
								><span class="mtext">Calendar</span>
							</a>
						</li>
						
						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-pie-chart"></span
								><span class="mtext">Charts</span>
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
								<span class="micon bi bi-file-earmark-text"></span
								><span class="mtext">Website Pages</span>
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
								<span class="micon bi bi-bug"></span
								><span class="mtext">Error Pages</span>
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
								<span class="micon bi bi-back"></span
								><span class="mtext">Extra Pages</span>
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
								<span class="micon bi bi-receipt-cutoff"></span
								><span class="mtext">Invoice</span>
							</a>
						</li>
						<li>
							<div class="dropdown-divider"></div>
						</li>
						<li>
							<div class="sidebar-small-cap">Extra</div>
						</li>
						
						<li>
							<a
								href="https://dropways.github.io/deskapp-free-single-page-website-template/"
								target="_blank"
								class="dropdown-toggle no-arrow"
							>
								<span class="micon bi bi-layout-text-window-reverse"></span>
								<span class="mtext"
									>Landing Page
									<img src="vendors/images/coming-soon.png" alt="" width="25"
								/></span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
			<div class="xs-pd-20-10 pd-ltr-20">
				<div class="title pb-20">
					<h2 class="h3 mb-0">MSN Facility Overview</h2>
				</div>

				<div class="row pb-10">
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark">75</div>
									<div class="font-14 text-secondary weight-500">
										Booking
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#00eccf">
										<i class="icon-copy dw dw-calendar1"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark">124,551</div>
									<div class="font-14 text-secondary weight-500">
										Total Customers
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#ff5b5b">
										<span class="icon-copy ti-heart"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark">RM50,000</div>
									<div class="font-14 text-secondary weight-500">Earning</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#09cc06">
										<i class="icon-copy fa fa-money" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row pb-10">
					<div class="col-md-8 mb-20">
						<div class="card-box height-100-p pd-20">
							<div
								class="d-flex flex-wrap justify-content-between align-items-center pb-0 pb-md-3"
							>
								<div class="h5 mb-md-0">MSN Facility Activities</div>
								<div class="form-group mb-md-0">
									<select class="form-control form-control-sm selectpicker">
										<option value="">Last Week</option>
										<option value="">Last Month</option>
										<option value="">Last 6 Month</option>
										<option value="">Last 1 year</option>
									</select>
								</div>
							</div>
							<div id="activities-chart"></div>
						</div>
					</div>
					<div class="col-md-4 mb-20">
						<div
							class="card-box min-height-200px pd-20 mb-20"
							data-bgcolor="#455a64"
						>
							<div class="d-flex justify-content-between pb-20 text-white">
								<div class="icon h1 text-white">
									<i class="fa fa-calendar" aria-hidden="true"></i>
									<!-- <i class="icon-copy fa fa-stethoscope" aria-hidden="true"></i> -->
								</div>
								<div class="font-14 text-right">
									<div><i class="icon-copy ion-arrow-up-c"></i> 2.69%</div>
									<div class="font-12">Since last month</div>
								</div>
							</div>
							<div class="d-flex justify-content-between align-items-end">
								<div class="text-white">
									<div class="font-14">Booking</div>
									<div class="font-24 weight-500">1865</div>
								</div>
								<div class="max-width-150">
									<div id="appointment-chart"></div>
								</div>
							</div>
						</div>
						<div class="card-box min-height-200px pd-20" data-bgcolor="#265ed7">
							<div class="d-flex justify-content-between pb-20 text-white">
								<div class="icon h1 text-white">
									<i class="icon-copy bi bi-emoji-laughing" aria-hidden="true"></i>
								</div>
								<div class="font-14 text-right">
									<div><i class="icon-copy ion-arrow-down-c"></i> 3.69%</div>
									<div class="font-12">Since last month</div>
								</div>
							</div>
							<div class="d-flex justify-content-between align-items-end">
								<div class="text-white">
									<div class="font-14">Customers</div>
									<div class="font-24 weight-500">250</div>
								</div>
								<div class="max-width-150">
									<div id="surgery-chart"></div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-4 col-md-6 mb-20">
						<div class="card-box height-100-p pd-20 min-height-200px">
							<div class="d-flex justify-content-between">
								<div class="h5 mb-0">Booking Report</div>
								<div class="dropdown">
									<a
										class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
										data-color="#1b3133"
										href="#"
										role="button"
										data-toggle="dropdown"
									>
										<i class="dw dw-more"></i>
									</a>
									<div
										class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
									>
										<a class="dropdown-item" href="#"
											><i class="dw dw-eye"></i> View</a
										>
										<a class="dropdown-item" href="#"
											><i class="dw dw-edit2"></i> Edit</a
										>
										<a class="dropdown-item" href="#"
											><i class="dw dw-delete-3"></i> Delete</a
										>
									</div>
								</div>
							</div>

							<div id="diseases-chart"></div>
						</div>
					</div>
				</div>

				<div class="card-box pb-10">
					<div class="h5 pd-20 mb-0">Recent Booking</div>
					<table class="data-table table nowrap">
						<thead>
							<tr>
								<th class="table-plus">Name</th>
								<th>Gender</th>
								<th>Weight</th>
								<th>Assigned Doctor</th>
								<th>Admit Date</th>
								<th>Disease</th>
								<th class="datatable-nosort">Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="table-plus">
									<div class="name-avatar d-flex align-items-center">
										<div class="avatar mr-2 flex-shrink-0">
											<img
												src="vendors/images/photo4.jpg"
												class="border-radius-100 shadow"
												width="40"
												height="40"
												alt=""
											/>
										</div>
										<div class="txt">
											<div class="weight-600">Jennifer O. Oster</div>
										</div>
									</div>
								</td>
								<td>Female</td>
								<td>45 kg</td>
								<td>Dr. Callie Reed</td>
								<td>19 Oct 2020</td>
								<td>
									<span
										class="badge badge-pill"
										data-bgcolor="#e7ebf5"
										data-color="#265ed7"
										>Typhoid</span
									>
								</td>
								<td>
									<div class="table-actions">
										<a href="#" data-color="#265ed7"
											><i class="icon-copy dw dw-edit2"></i
										></a>
										<a href="#" data-color="#e95959"
											><i class="icon-copy dw dw-delete-3"></i
										></a>
									</div>
								</td>
							</tr>
							<tr>
								<td class="table-plus">
									<div class="name-avatar d-flex align-items-center">
										<div class="avatar mr-2 flex-shrink-0">
											<img
												src="vendors/images/photo5.jpg"
												class="border-radius-100 shadow"
												width="40"
												height="40"
												alt=""
											/>
										</div>
										<div class="txt">
											<div class="weight-600">Doris L. Larson</div>
										</div>
									</div>
								</td>
								<td>Male</td>
								<td>76 kg</td>
								<td>Dr. Ren Delan</td>
								<td>22 Jul 2020</td>
								<td>
									<span
										class="badge badge-pill"
										data-bgcolor="#e7ebf5"
										data-color="#265ed7"
										>Dengue</span
									>
								</td>
								<td>
									<div class="table-actions">
										<a href="#" data-color="#265ed7"
											><i class="icon-copy dw dw-edit2"></i
										></a>
										<a href="#" data-color="#e95959"
											><i class="icon-copy dw dw-delete-3"></i
										></a>
									</div>
								</td>
							</tr>
							<tr>
								<td class="table-plus">
									<div class="name-avatar d-flex align-items-center">
										<div class="avatar mr-2 flex-shrink-0">
											<img
												src="vendors/images/photo6.jpg"
												class="border-radius-100 shadow"
												width="40"
												height="40"
												alt=""
											/>
										</div>
										<div class="txt">
											<div class="weight-600">Joseph Powell</div>
										</div>
									</div>
								</td>
								<td>Male</td>
								<td>90 kg</td>
								<td>Dr. Allen Hannagan</td>
								<td>15 Nov 2020</td>
								<td>
									<span
										class="badge badge-pill"
										data-bgcolor="#e7ebf5"
										data-color="#265ed7"
										>Infection</span
									>
								</td>
								<td>
									<div class="table-actions">
										<a href="#" data-color="#265ed7"
											><i class="icon-copy dw dw-edit2"></i
										></a>
										<a href="#" data-color="#e95959"
											><i class="icon-copy dw dw-delete-3"></i
										></a>
									</div>
								</td>
							</tr>
							<tr>
								<td class="table-plus">
									<div class="name-avatar d-flex align-items-center">
										<div class="avatar mr-2 flex-shrink-0">
											<img
												src="vendors/images/photo9.jpg"
												class="border-radius-100 shadow"
												width="40"
												height="40"
												alt=""
											/>
										</div>
										<div class="txt">
											<div class="weight-600">Jake Springer</div>
										</div>
									</div>
								</td>
								<td>Female</td>
								<td>45 kg</td>
								<td>Dr. Garrett Kincy</td>
								<td>08 Oct 2020</td>
								<td>
									<span
										class="badge badge-pill"
										data-bgcolor="#e7ebf5"
										data-color="#265ed7"
										>Covid 19</span
									>
								</td>
								<td>
									<div class="table-actions">
										<a href="#" data-color="#265ed7"
											><i class="icon-copy dw dw-edit2"></i
										></a>
										<a href="#" data-color="#e95959"
											><i class="icon-copy dw dw-delete-3"></i
										></a>
									</div>
								</td>
							</tr>
							<tr>
								<td class="table-plus">
									<div class="name-avatar d-flex align-items-center">
										<div class="avatar mr-2 flex-shrink-0">
											<img
												src="vendors/images/profilelogo.png"
												class="border-radius-100 shadow"
												width="40"
												height="40"
												alt=""
											/>
										</div>
										<div class="txt">
											<div class="weight-600">Paul Buckland</div>
										</div>
									</div>
								</td>
								<td>Male</td>
								<td>76 kg</td>
								<td>Dr. Maxwell Soltes</td>
								<td>12 Dec 2020</td>
								<td>
									<span
										class="badge badge-pill"
										data-bgcolor="#e7ebf5"
										data-color="#265ed7"
										>Asthma</span
									>
								</td>
								<td>
									<div class="table-actions">
										<a href="#" data-color="#265ed7"
											><i class="icon-copy dw dw-edit2"></i
										></a>
										<a href="#" data-color="#e95959"
											><i class="icon-copy dw dw-delete-3"></i
										></a>
									</div>
								</td>
							</tr>
							<tr>
								<td class="table-plus">
									<div class="name-avatar d-flex align-items-center">
										<div class="avatar mr-2 flex-shrink-0">
											<img
												src="vendors/images/photo2.jpg"
												class="border-radius-100 shadow"
												width="40"
												height="40"
												alt=""
											/>
										</div>
										<div class="txt">
											<div class="weight-600">Neil Arnold</div>
										</div>
									</div>
								</td>
								<td>Male</td>
								<td>60 kg</td>
								<td>Dr. Sebastian Tandon</td>
								<td>30 Oct 2020</td>
								<td>
									<span
										class="badge badge-pill"
										data-bgcolor="#e7ebf5"
										data-color="#265ed7"
										>Diabetes</span
									>
								</td>
								<td>
									<div class="table-actions">
										<a href="#" data-color="#265ed7"
											><i class="icon-copy dw dw-edit2"></i
										></a>
										<a href="#" data-color="#e95959"
											><i class="icon-copy dw dw-delete-3"></i
										></a>
									</div>
								</td>
							</tr>
							<tr>
								<td class="table-plus">
									<div class="name-avatar d-flex align-items-center">
										<div class="avatar mr-2 flex-shrink-0">
											<img
												src="vendors/images/photo8.jpg"
												class="border-radius-100 shadow"
												width="40"
												height="40"
												alt=""
											/>
										</div>
										<div class="txt">
											<div class="weight-600">Christian Dyer</div>
										</div>
									</div>
								</td>
								<td>Male</td>
								<td>80 kg</td>
								<td>Dr. Sebastian Tandon</td>
								<td>15 Jun 2020</td>
								<td>
									<span
										class="badge badge-pill"
										data-bgcolor="#e7ebf5"
										data-color="#265ed7"
										>Diabetes</span
									>
								</td>
								<td>
									<div class="table-actions">
										<a href="#" data-color="#265ed7"
											><i class="icon-copy dw dw-edit2"></i
										></a>
										<a href="#" data-color="#e95959"
											><i class="icon-copy dw dw-delete-3"></i
										></a>
									</div>
								</td>
							</tr>
							<tr>
								<td class="table-plus">
									<div class="name-avatar d-flex align-items-center">
										<div class="avatar mr-2 flex-shrink-0">
											<img
												src="vendors/images/profilelogo.png"
												class="border-radius-100 shadow"
												width="40"
												height="40"
												alt=""
											/>
										</div>
										<div class="txt">
											<div class="weight-600">Doris L. Larson</div>
										</div>
									</div>
								</td>
								<td>Male</td>
								<td>76 kg</td>
								<td>Dr. Ren Delan</td>
								<td>22 Jul 2020</td>
								<td>
									<span
										class="badge badge-pill"
										data-bgcolor="#e7ebf5"
										data-color="#265ed7"
										>Dengue</span
									>
								</td>
								<td>
									<div class="table-actions">
										<a href="#" data-color="#265ed7"
											><i class="icon-copy dw dw-edit2"></i
										></a>
										<a href="#" data-color="#e95959"
											><i class="icon-copy dw dw-delete-3"></i
										></a>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>

				
			</div>
		</div>
		<!-- welcome modal start -->
		<div class="welcome-modal">
			<button class="welcome-modal-close">
				<i class="bi bi-x-lg"></i>
			</button>
			<iframe
				class="w-100 border-0"
				src="https://embed.lottiefiles.com/animation/31548"
			></iframe>
			<div class="text-center">
				<h3 class="h5 weight-500 text-center mb-2">
					Open source
					<span role="img" aria-label="gratitude">❤️</span>
				</h3>
				<div class="pb-2">
					<a
						class="github-button"
						href="https://github.com/dropways/deskapp"
						data-color-scheme="no-preference: dark; light: light; dark: light;"
						data-icon="octicon-star"
						data-size="large"
						data-show-count="true"
						aria-label="Star dropways/deskapp dashboard on GitHub"
						>Star</a
					>
					<a
						class="github-button"
						href="https://github.com/dropways/deskapp/fork"
						data-color-scheme="no-preference: dark; light: light; dark: light;"
						data-icon="octicon-repo-forked"
						data-size="large"
						data-show-count="true"
						aria-label="Fork dropways/deskapp dashboard on GitHub"
						>Fork</a
					>
				</div>
			</div>
			<div class="text-center mb-1">
				<div>
					<a
						href="https://github.com/dropways/deskapp"
						target="_blank"
						class="btn btn-light btn-block btn-sm"
					>
						<span class="text-danger weight-600">STAR US</span>
						<span class="weight-600">ON GITHUB</span>
						<i class="fa fa-github"></i>
					</a>
				</div>
				<script
					async
					defer="defer"
					src="https://buttons.github.io/buttons.js"
				></script>
			</div>
			<a
				href="https://github.com/dropways/deskapp"
				target="_blank"
				class="btn btn-success btn-sm mb-0 mb-md-3 w-100"
			>
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
		<script src="src/plugins/apexcharts/apexcharts.min.js"></script>
		<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
		<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
		<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
		<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
		<script src="vendors/scripts/dashboard3.js"></script>
		<!-- Google Tag Manager (noscript) -->
		<noscript
			><iframe
				src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>
		<!-- End Google Tag Manager (noscript) -->
	</body>
</html>