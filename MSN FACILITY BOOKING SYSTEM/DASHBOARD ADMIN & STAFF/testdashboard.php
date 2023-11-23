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
		<!--header-->
		<?php include 'header.php'?>
		<!--right side bar start-->
		<?php include 'rightsidebar.php';?>
		<!--right side bar end-->
		<!--left sidebar start-->
		<?php include 'leftsidebar.php';?>
		<!--left sidebar end-->

		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
			<div class="xs-pd-20-10 pd-ltr-20">
				<div class="title pb-20">
					<h2 class="h3 mb-0">MSN Facility Overview</h2>
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

				<div class="row">
					<div class="col-md-4 mb-20">
					</div>
				</div>

				<?php
    				$type = $_SESSION['type'];
					include 'dbconnect.php';

      				$sql = "SELECT * FROM contact ";
      				$fb = mysqli_query($con, $sql);
  
    
    				mysqli_close($con);
				?>

				<div class="card-box pb-10">
					<div class="h5 pd-20 mb-0">Customer's Feedbacks: <?php echo mysqli_num_rows($result)?></div>
					<table class="data-table table nowrap">

						<thead>
							<tr>
								<th class="table-plus">Name</th>
								<th>Email</th>
								<th>Subject</th>
								<th>Message</th>
							</tr>
						</thead>

						<tbody>
                        <?php
                            // LOOP TILL END OF DATA
                            while($row = mysqli_fetch_assoc($fb))
                            {

                        ?>
							<tr>
								<td class="table-plus">
									<div class="name-avatar d-flex align-items-center">
										
										<div class="txt">
											<div class="weight-600"><?php echo $row['yourname'] ?></div>
										</div>
										
									</div>
								</td>
								<td><?php echo $row['youremail'] ?></td>
								<td><?php echo $row['subject'] ?></td>
								<td><?php echo $row['message'] ?></td>
							</tr>

                        <?php
                            }
                        ?>
						</tbody>
					</table>
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
	
	</body>
</html>