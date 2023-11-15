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
	
	</head>
	<body>
	<?php include 'header.php'?>

	<?php include 'rightsidebar.php';?>
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
										<a href="testdashboard.php">Home</a>
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
    				include 'dbconnect.php';

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
									
										<?php 
                                            include "../MSN BOOKING SYSTEM/Login_v3/db.php";
                                            if (isset($_GET['id'])) {
                                                $id = $_GET['id'];
                                                
                                            
                                                include "processCustomer.php";
                                            $userQry=getCustInfo($id);
                                            
                                            
                                            $customerInfo=mysqli_fetch_assoc($userQry);
                                            
                                            $id=$customerInfo['id'];
                                            $name=$customerInfo['name'];
                                            $fullname=$customerInfo['fullname'];
                                            $email=$customerInfo['email'];
                                            $password=$customerInfo['password'];
                                            $gender=$customerInfo['gender'];
                                            $dateOfBirth=$customerInfo['dateOfBirth'];
                                            $phoneNumber=$customerInfo['phoneNumber'];
											echo $gender;
										}
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
															
															<div class="form-group">
																<label>Username</label>
																<input class="form-control form-control-lg" type="text" name="name" <?php echo "value='$name'"?> readonly/>
															</div>
                                                            <div class="form-group">
																<label>Full Name</label>
																<input class="form-control form-control-lg" type="text" name="fullname" <?php echo "value='$fullname'"?>/>
															</div>
                                                            <div class="form-group">
																<label>Gender</label>
																<select class="form-control" name="gender"   <?php //echo "value='$gender'"?>>
                                    							<option value="female" <?php if ($gender === 'female') echo 'selected'; ?>>Female</option>
                                    							<option value="male" <?php if ($gender === 'male') echo 'selected'; ?>>Male</option>
                                   								</select>
																
															</div>
															<div class="form-group">
																<label>Date of Birth</label>
																<input class="form-control form-control-lg" type="date" name="dateOfBirth" <?php echo "value='$dateOfBirth'"?>/>
															</div>
															<div class="form-group">
																<label>Email</label>
																<input class="form-control form-control-lg" type="email" name="email" <?php echo "value='$email'"?> readonly/>
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