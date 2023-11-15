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
					<h2 class="h3 mb-0">MSN Sales Report</h2>
				</div>

				<div class="card-box pb-10">
					<div class="h5 pd-20 mb-0">Monthly Sales Report</div>
						<div class="pd-20 mb-0">
							
									<form method="post" action="">
									<label class="h5  mb-0"for="month">Month:</label>
									<select class="form-control bg-transparent timepicker-input" name="month" id="month">
										<option value="1">January</option>
										<option value="2">February</option>
										<option value="3">March</option>
										<option value="4">April</option>
										<option value="5">May</option>
										<option value="6">June</option>
										<option value="7">July</option>
										<option value="8">August</option>
										<option value="9">September</option>
										<option value="10">October</option>
										<option value="11">November</option>
										<option value="12">December</option>
									
									</select>
									<br>
									<input type="submit" class="btn btn-primary" value="Generate Report">
									</form>
								
						</div>
					

								<?php
							if ($_SERVER["REQUEST_METHOD"] == "POST") {
								// Database connection (replace with your database credentials)
								include 'dbconnect.php';

								// Get the selected month from the form
								$month = $_POST['month'];
								$year = date('Y'); // Current year

								// Query the database to fetch sales data for the selected month
								$query = "SELECT date, price FROM badmintonslots
										WHERE MONTH(date) = $month AND YEAR(date) = $year";

								$result = mysqli_query($con, $query);

								if (!$result) {
									die("Query failed: " . mysqli_error($con));
								}

								// Display the Monthly Sales Report
								echo "<br><div class='pd-20 mb-0'><h5 class=h5 mb-0'>Monthly Booking Sales Report for " . date("F Y", mktime(0, 0, 0, $month, 1, $year)) . "</h5>";
								echo "<table class='data-table table nowrap'>";
								echo "<tr><th class='table-plus'>Booking Date</th><th>Sales Amount</th></tr>";
								echo "</div>";

								$total_sales = 0;

								while ($row = mysqli_fetch_assoc($result)) {
									echo "<tr>";
									echo "<td>" . $row['date'] . "</td>";
									echo "<td>" . $row['price'] . "</td>";
									echo "</tr>";

									$total_sales += $row['price'];
								}

								echo "</table>";
								echo "<p style='text-align:right;'>Total Sales for " . date("F Y", mktime(0, 0, 0, $month, 1, $year)) . ": MYR " . $total_sales."</p>"
								;

								// Close the database connection
								mysqli_close($con);
							}
							?>
    
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
