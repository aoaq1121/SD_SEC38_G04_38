<div class="left-side-bar">
			<div class="brand-logo">
				<a href="testdashboard.php">
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
							<a href="testdashboard.php" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-house"></span
								><span class="mtext">Home</span>
							</a>
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
								<li><a href="../MSN BOOKING SYSTEM/pricerate.php">Price Rate</a></li>
								<li><a href="editcontact.php">Contact Setting</a></li>
								<li><a href="editabout.php">About Us Setting</a></li>
								<li><a href="editPriceRate.php">Price Rate Setting</a></li>
                                <li><a href="updatebadmintonavailability.php">Availability Slots Setting</a></li>
								
							</ul>
						</li>
					
						<?php 
					
					if($_SESSION['type'] == 'admin'){ ?>
						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-back"></span
								><span class="mtext">Setting Pages</span>
							</a>
							<ul class="submenu">
                                <li><a href="test.php">Customer Setting</a></li>
								<li><a href="staffList.php">Staff List</a></li>
								<!--<li><a href="addStaff.php">Add Staff</a></li>
                                <li><a href="addbadmintonoption.php">Add Badminton Option</a></li>-->
								<li><a href="bookingList.php">Booking List</a></li>
                                <!--<li><a href="editbadmintonoption.php">Edit Badminton Option</a></li>-->
								
							</ul>
						</li>
						<?php }
						elseif($_SESSION['type'] == 'staff'){ ?>
						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-back"></span
								><span class="mtext">Setting Pages</span>
							</a>
							<ul class="submenu">
								
                                <li><a href="test.php">Customer Setting</a></li>
								
								<li><a href="profile.php">Profile Setting</a></li>
                               
								<li><a href="bookingList.php">Booking List</a></li>
                               
							</ul>
						</li>
						<?php } ?>
						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-file-earmark-text"></span
								><span class="mtext">Report Pages</span>
							</a>
							<ul class="submenu">
                                <li><a href="salesReport.php">Sales Report</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>