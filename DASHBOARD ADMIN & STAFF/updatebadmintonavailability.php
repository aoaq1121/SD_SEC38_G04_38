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
								<h4>Available Badminton Slots</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item">
										<a href="testdashboard.php">Home</a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">
										Badminton Availability Settings
									</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>

                <div class="card-box pb-10">
					<div class="h5 pd-20 mb-0">Badminton Time Option<a href="addbadmintonoption.php" class="btn btn-primary" style="margin-left:72%;">Add Time Option</a></div>
					
					
						<table class="data-table table nowrap">
                        <thead>
							<tr>
								<th>Time Id</th>
								<th>Time Value</th>
								<th>Actions</th>
							</tr>
                        </thead>
                        <tbody>
							<?php
							// Connect to the database
							include 'dbconnect.php';

							// Fetch staff data
							$query = "SELECT * FROM `badmintontimeoption` ORDER BY `badmintontimeoption`.`timeid` ASC";
							$result = mysqli_query($con, $query);
							while ($row = mysqli_fetch_assoc($result)) {
								echo "<tr>";
								echo "<td>" . $row['timeid'] . "</td>";
								echo "<td>" . $row['timevalue'] . "</td>";
								
								echo "<td>";
								echo "<div class='table-actions'>";
								
								echo "<a href='deletebadmintonoption.php?id=" . $row['timeid'] . "&type=time'' data-color='#e95959' onclick='return confirm(\"Are you sure you want to delete this time option?\");'><i class='icon-copy dw dw-delete-3 delete-link'></i></a>";
								echo "</div>";
								echo "</td>";
								echo "</tr>";
							}
							?>
                            </tbody>
						</table>
					</div>
				</div>
                <br>
                <div class="card-box pb-10">
					<div class="h5 pd-20 mb-0">Badminton Duration Option<a href="addbadmintonoption.php" class="btn btn-primary" style="margin-left:67.5%;">Add Duration Option</a></div>
					
						<table class="data-table table nowrap">
                        <thead>
							<tr>
								<th>Duration Id</th>
								<th>Duration Value</th>
								<th>Actions</th>
							</tr>
                        </thead>
                        <tbody>
							<?php
							// Connect to the database
							include 'dbconnect.php';

							// Fetch staff data
							$sqlquery = "SELECT * FROM badmintondurationoption ORDER BY `badmintondurationoption`.`durationid` ASC";
							$result = mysqli_query($con, $sqlquery);
							while ($row = mysqli_fetch_assoc($result)) {
								echo "<tr>";
								echo "<td>" . $row['durationid'] . "</td>";
								echo "<td>" . $row['durationvalue'] . "</td>";
								
								echo "<td>";
								echo "<div class='table-actions'>";
								//echo "<a href='editbadmintonoption.php?id=" . $row['durationid'] . "' data-color='#265ed7'><i class='icon-copy dw dw-edit2 edit-link'></i></a>";
								echo "<a href='deletebadmintonoption.php?id=" . $row['durationid'] . "&type=duration'' data-color='#e95959' onclick='return confirm(\"Are you sure you want to delete this duration option?\");'><i class='icon-copy dw dw-delete-3 delete-link'></i></a>";
								echo "</div>";
								echo "</td>";
								echo "</tr>";
							}
							?>
                            </tbody>
						</table>
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