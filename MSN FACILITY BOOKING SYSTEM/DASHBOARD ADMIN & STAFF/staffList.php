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
            width: 98%;
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
					<h2 class="h3 mb-0">MSN Staff List</h2>
				</div>

				<div class="card-box pb-10">
					<div class="h5 pd-20 mb-0">Staff List<a href="addstaff.php" class="btn btn-primary" style="margin-left:86.5%;">Add Staff</a></div>
					
						<table>
							<tr>
								<th>Username</th>
								<th>Full Name</th>
								<th>Email</th>
								<th>Phone Number</th>
								<th>Date of Birth</th>
								<th>Gender</th>
								<th>Address</th>
								<th>Postal Code</th>
								<th>State</th>
								<th>Country</th>
								<th>Bank</th>
								<th>Actions</th>
							</tr>
							<?php
							// Connect to the database
							include 'dbconnect.php';

							// Fetch staff data
							$query = "SELECT * FROM staff";
							$result = mysqli_query($con, $query);
							while ($row = mysqli_fetch_assoc($result)) {
								echo "<tr>";
								echo "<td>" . $row['username'] . "</td>";
								echo "<td>" . $row['fname'] . "</td>";
								echo "<td>" . $row['email'] . "</td>";
								echo "<td>" , "+60". $row['phoneNumber'] . "</td>";
								echo "<td>" . $row['dob'] . "</td>";
								echo "<td>" . $row['gender'] . "</td>";
								echo "<td>" . $row['address'] . "</td>";
								echo "<td>" . $row['postalcode']  . "</td>";
								echo "<td>" . $row['state']  . "</td>";
								echo "<td>" . $row['country']  . "</td>";
								echo "<td>" . $row['bank']."</td>";
								echo "<td>";
								echo "<div class='table-actions'>";
								echo "<a href='editStaff.php?id=" . $row['username'] . "' data-color='#265ed7'><i class='icon-copy dw dw-edit2 edit-link'></i></a>";
								echo "<a href='deleteStaff.php?id=" . $row['username'] . "' data-color='#e95959' onclick='return confirm(\"Are you sure you want to delete this staff member?\");'><i class='icon-copy dw dw-delete-3 delete-link'></i></a>";
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
