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
	<style>
        table {
            border-collapse: collapse;
            width: 100%;
			height: 98%;
            margin: 10px auto;
			
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
	<body>
	<?php include 'header.php'?>

	<?php include 'rightsidebar.php';?>

		<?php include 'leftsidebar.php';?>
		<!--side bar end-->

		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
			<div class="xs-pd-20-10 pd-ltr-20">
				<div class="title pb-20">
					<h2 class="h3 mb-0">MSN Booking List</h2>
				</div>

				<div class="card-box pb-20">
					<div class="h5 pd-10 mb-0"></div>
					
						<table style="width:80%">
							<tr>
								<th>Booking ID</th>
								<th>Court</th>
								<th>Date</th>
								<th>Start</th>
								<th>End</th>
								<th>Email</th>
								<th>Full Name</th>
                                <th>Delete</th>
							</tr>
							<?php
							// Connect to the database
							include 'dbconnect.php';

							// Fetch staff data
							$query = "SELECT * FROM badmintonslots";
							$result = mysqli_query($con, $query);
							while ($row = mysqli_fetch_assoc($result)) {
								echo "<tr>";
								echo "<td>" . $row['bookingid'] . "</td>";
								echo "<td>" . $row['bsid'] . "</td>";
								echo "<td>" . $row['date'] . "</td>";
								echo "<td>" . $row['starttime'] . "</td>";
								echo "<td>" . $row['endtime'] . "</td>";
								echo "<td>" . $row['email'] . "</td>";
								$name = "SELECT fullname FROM users WHERE email = '".$row['email']."'";
								$fullname = mysqli_query($con, $name);
								$fullnamerow = mysqli_fetch_assoc($fullname);
								echo "<td>" . $fullnamerow['fullname'] . "</td>";
								echo "<td>";
								echo "<div class='table-actions-center'>";
								echo "<a href='processBooking.php?id=" . $row['bookingid'] . "' data-color='#e95959' onclick='return confirm(\"Are you sure you want to delete this booking?\");'>
                                    <i class='icon-copy dw dw-delete-3 delete-link' name='deleteBookingButton'></i></a>";
								echo "</div>";
								echo "</td>";
								echo "</tr>";
							}
							?>
						</table>
					</div>
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
