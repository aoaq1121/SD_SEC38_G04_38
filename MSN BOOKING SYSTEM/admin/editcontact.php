
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
	<?php include 'header.php'?>

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
								<h4>Contact</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item">
										<a href="index.php">Home</a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">
										Contact Settings
									</li>
								</ol>
							</nav>
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
											<?php
// Include your database connection code here
include("dbconnect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newOffice = $_POST['office'];
    $newMobile = $_POST['mobile'];
    $newName = $_POST['name'];
    $newEmail = $_POST['email'];
	$newBusinessHour = $_POST['businesshour'];

    // Update the contact information in the database
    $updateQuery = "UPDATE editcontact SET office='$newOffice', mobile='$newMobile', name='$newName',email='$newEmail',businesshour='$newBusinessHour' WHERE id=1"; // Change '1' to the ID of your contact
    //$stmt = $mysqli->prepare($updateQuery);
    //$stmt->bind_param("sss", $newOffice, $newMobile, $newName, $newEmail);
	$result = mysqli_query($conn,$updateQuery);

    if ($result) {
		
        echo "
		<script>
		alert('Contact information updated successfully.')
		</script>
		";
    } else {
        echo "Error updating contact information: ";
    }
}
?>
<?php
                // Include your database connection code here
                include("dbconnect.php");


                // Fetch contact information from the database (assuming you have a 'contacts' table)
                $query = "SELECT office,mobile,name,email,businesshour FROM editcontact WHERE id = 1"; // You may need to change '1' to the ID of your contact
                $result = mysqli_query($conn,$query);

                if ($result && $result->num_rows > 0) {
                    $contact = $result->fetch_assoc();
                }
 ?>
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#setting" role="tab">Contact Setting</a>
										</li>
									</ul>
									<div class="tab-content">
                                    <div class="tab-pane fade show active" id="setting" role="tabpanel">
											<div class="profile-setting">
                                            <form action="" method="POST">
													<ul class="profile-edit-list row">
														<li class="weight-500 col-md-6">
															<h4 class="text-blue h5 mb-20">
																Edit Contact Information
															</h4>
                                                            <div class="form-group">
                                                            <label for="name">Office Address</label>
                                                            <input class="form-control form-control-lg" type="text" name="office" value="<?php echo $contact['office']; ?>" required><br>
                                                            </div>
															<div class="form-group">
                                                            <label for="businesshour">Business Hour</label>
                                                            <input class="form-control form-control-lg" type="text" name="businesshour" value="<?php echo $contact['businesshour']; ?>" required><br>
                                                            </div>
                                                            <div class="form-group">
                                                            <label for="phone">Mobile Phone</label>
                                                            <input class="form-control form-control-lg" type="text" name="mobile" value="<?php echo $contact['mobile']; ?>" required><br>
                                                            </div>
                                                            <div class="form-group">
                                                            <label for="name">Name</label>
                                                            <input class="form-control form-control-lg" type="text" name="name"  value="<?php echo $contact['name']; ?>" required><br>
                                                            </div>

                                                            <div class="form-group">
                                                            <label for="email">Email</label>
                                                            <input class="form-control form-control-lg" type="email" name="email" value="<?php echo $contact['email']; ?>" required><br>
                                                            </div>

        
                                                            <div class="form-group mb-0">
                                                            <input class="btn btn-primary" type="submit" name="submit" value="Update Contact">
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
			<!--<div class="footer-wrap pd-20 mb-20 card-box">
				DeskApp - Bootstrap 4 Admin Template By
				<a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
			</div>-->
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
