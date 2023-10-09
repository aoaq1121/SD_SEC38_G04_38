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
		<!--sidebar start-->
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
								<h4>Customer</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item">
										<a href="index.php">Home</a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">
										Customer Settings
									</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
            
            

                <?php
    				$type = $_SESSION['type'];
    				$con = mysqli_connect("localhost", "root", "root", "msnbooking");

    				if(!$con){
        				die('Could not Connect MySql Server:' .mysqli_connect_error());
      				}

      				$sql = "SELECT * FROM users ";
      				$result = mysqli_query($con, $sql);
  
    
    				mysqli_close($con);
				?>

				<div class="card-box pb-10">
					<div class="h5 pd-20 mb-0">List of Customers : <?php echo mysqli_num_rows($result)?></div>
					<table class="data-table table nowrap">

						<thead>
							<tr>
								<th class="table-plus">Username</th>
                                <th>Name</th>
								<th>Email</th>
								<th>Phone Number</th>
								<th>DOB</th>
								<th>Gender</th>
								<th class="datatable-nosort">Actions</th>
							</tr>
						</thead>

						<tbody>
                        <?php
                            // LOOP TILL END OF DATA
                            while($row = mysqli_fetch_assoc($result))
                            {

                        ?>
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
											<div class="weight-600"><?php echo $row['name'] ?></div>
										</div>
										
									</div>
								</td>
                                <td><?php echo $row['fullname'] ?></td>
								<td><?php echo $row['email'] ?></td>
								<td><?php echo "+60".$row['phoneNumber'] ?></td>
								<td><?php echo $row['dateOfBirth'] ?></td>
								<td><?php echo $row['gender'] ?></td>
								<td>
									<div class="table-actions">
										<a href="test.php?id=<?php echo $row['id']; ?>" data-color="#265ed7">
											<i class="icon-copy dw dw-edit2"></i>
											
										</a>
										<!--<i class="icon-copy dw dw-delete-3" data-color="#e95959"></i>
										<a href="" data-color="#e95959">
											<i class="icon-copy dw dw-delete-3"></i>
											
										</a>-->
											
											
									</div>
								</td>
							</tr>

                        <?php
                            }
                        ?>
						</tbody>
					</table>
                    </div>
                </div>    
            
    
    

                <div class="row">
					<div class="col-md-4 mb-20">
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
										<?php 
                                            include "../MSN BOOKING SYSTEM/Login_v3/db.php";
                                            if (isset($_GET['id'])) {
                                                $id = $_GET['id'];
                                                // Now you can use $customerId to fetch and edit the specific customer's data
                                                //$id=$_POST['id'];
                                            
                                                include "processCustomer.php";
                                            $userQry=getCustInfo($id);
                                            //echo "<br>no of record:".mysqli_num_rows($userQry);
                                            
                                            $customerInfo=mysqli_fetch_assoc($userQry);
                                            
                                            $id=$customerInfo['id'];
                                            $name=$customerInfo['name'];
                                            $fullname=$customerInfo['fullname'];
                                            $email=$customerInfo['email'];
                                            $password=$customerInfo['password'];
                                            $gender=$customerInfo['gender'];
                                            $dateOfBirth=$customerInfo['dateOfBirth'];
                                            $phoneNumber=$customerInfo['phoneNumber'];}
                                        ?>

										<!-- Setting Tab start -->
										<div class="tab-pane fade show active" id="setting" role="tabpanel">
											<div class="profile-setting">


												<form action="processCustomer.php" method="POST">
													<?php echo "<input type='hidden' name='id' value='$id'>"; ?>
													<ul class="profile-edit-list row">
														<li class="weight-500 col-md-25">
															<h4 class="text-blue h5 mb-20">
																Edit Customer :
															</h4>
															<!--<div class="form-group">
																	<label>Staff ID</label>
																	<input class="form-control form-control-lg" type="text" name="username"/>
																</div>-->
															<div class="form-group">
																<label>Username</label>
																<input class="form-control form-control-lg" type="text" name="name" <?php echo "value='$name'"?>/>
															</div>
                                                            <div class="form-group">
																<label>Full Name</label>
																<input class="form-control form-control-lg" type="text" name="fullname" <?php echo "value='$fullname'"?>/>
															</div>
                                                            <div class="form-group">
																<label>Gender</label>
																<input class="form-control form-control-lg" type="text" name="gender" value= <?php echo "'$gender'"?>/>
															</div>
															<div class="form-group">
																<label>Date of Birth</label>
																<input class="form-control form-control-lg" type="text" name="dateOfBirth" <?php echo "value='$dateOfBirth'"?>/>
															</div>
															<div class="form-group">
																<label>Email</label>
																<input class="form-control form-control-lg" type="email" name="email" <?php echo "value='$email'"?>/>
															</div>
															<div class="form-group">
																<label>Phone Number (+60)</label>
																<input class="form-control form-control-lg" type="text" name="phoneNumber" <?php echo "value='$phoneNumber'"?>/>
															</div>
                                                            <div class="form-group mb-0">
																<input type="submit" class="btn btn-primary" <?php echo 'name="saveCustomerButton"'?> value="Update Information"/>
                                                                <input type="submit" class="btn btn-primary" <?php echo 'name="deleteCustomerButton"'?> value="Delete Customer"/>
															</div> 
														</li>
													</ul>
												</form>
											</div>
                                        </div>
                                        
										
										<!-- Setting Tab End -->
                                    </ul>
                                </div>
                            </div>
                        </div>
					</div>
                </div>
    
                <div class="row">
					<div class="col-md-4 mb-20">
					</div>
				</div>

				<div class="footer-wrap pd-20 mb-20 card-box">
					MSN - Administrator Dashboard
				</div>
			</div>
		</div>
	</div>

    <!-- welcome modal start -->
	<!--<div class="welcome-modal">
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
	</button>-->
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