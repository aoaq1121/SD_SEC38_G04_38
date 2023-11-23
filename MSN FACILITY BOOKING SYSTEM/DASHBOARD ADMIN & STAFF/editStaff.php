
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
								<h4>Staff</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item">
										<a href="staffList.php">Staff List</a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">
										Edit Staff
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
                                                    <a class="nav-link active" data-toggle="tab" href="#setting" role="tab">Edit</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                
                                                
                                                <div class="tab-pane fade show active" id="setting" role="tabpanel">
                                                    <div class="profile-setting">

													

											<?php 
                                            include 'dbconnect.php';
                                            if (isset($_GET['id'])) {
                                                $id = $_GET['id'];
                                                
                                            
                                                include "processStaff.php";
                                            $StaffQry=getStaffInfo($id);
                                            
                                            
                                            $StaffInfo=mysqli_fetch_assoc($StaffQry);
                                            
                                            $id=$StaffInfo['id'];
                                            $fname=$StaffInfo['fname'];
                                            
                                            $email=$StaffInfo['email'];
											$phoneNumber=$StaffInfo['phoneNumber'];
											$dob=$StaffInfo['dob'];
                                            $gender=$StaffInfo['gender'];
											$address=$StaffInfo['address'];
											$postalcode=$StaffInfo['postalcode'];
											$state=$StaffInfo['state'];
											$country=$StaffInfo['country'];
											$bank=$StaffInfo['bank'];
                                           
										}
                                        ?>		

                                                        <form action="processStaff.php" method="POST">
                                                            <ul class="profile-edit-list row">
                                                                <li class="weight-500 col-md-6">
                                                                    <h4 class="text-blue h5 mb-20">
                                                                        Edit Your Staff Details
                                                                    </h4>
																	<input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>">
                                                                    <div class="form-group">
                                                                        <label>Full Name</label>
                                                                        <input class="form-control form-control-lg" type="text" name="fName" value="<?php echo isset($fname) ? $fname : ''; ?>"/>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Email</label>
                                                                        <input class="form-control form-control-lg" type="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>"/>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Phone Number</label>
                                                                        <input class="form-control form-control-lg" type="text" name="phoneNumber" value="<?php echo isset($phoneNumber) ? $phoneNumber : ''; ?>"/>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Date of birth</label>
                                                                        <input class="form-control form-control-lg date-picker" type="text" name="dob"  value="<?php echo isset($dob) ? $dob : ''; ?>"/>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Gender</label>
                                                                        <div class="d-flex">
                                                                            <div class="custom-control custom-radio mb-5 mr-20">
                                                                                <input type="radio" id="male" name="gender" class="custom-control-input" value="Male"<?php echo (isset($gender) && $gender == 'Male') ? ' checked' : ''; ?>/>
                                                                                <label class="custom-control-label" for="male">Male</label>
                                                                            </div>
                                                                            <div class="custom-control custom-radio mb-5">
                                                                                <input type="radio" id="female" name="gender"  class="custom-control-input" value="Female"<?php echo (isset($gender) && $gender == 'Female') ? ' checked' : ''; ?>/>
                                                                                <label class="custom-control-label" for="female">Female</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Address</label>
                                                                        <input class="form-control" type="text" name="address" value="<?php echo isset($address) ? $address : ''; ?>"/>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Postal Code</label>
                                                                        <input class="form-control form-control-lg" type="text" name="postalcode" value="<?php echo isset($postalcode) ? $postalcode : ''; ?>"/>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>State</label>
                                                                        <input class="form-control form-control-lg" type="text" name="state" value="<?php echo isset($state) ? $state : ''; ?>"/>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Country</label>
                                                                        <input class="form-control form-control-lg" type="text" name="country" value="<?php echo isset($country) ? $country : ''; ?>"/>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Bank Card Number</label>
                                                                        <input class="form-control form-control-lg" type="text" name="bank" value="<?php echo isset($bank) ? $bank : ''; ?>"/>
                                                                    </div>
                                                                    <div class="form-group mb-0">
                                                                        <input type="submit" class="btn btn-primary" name="updateStaffButton" value="Update Information" />
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


