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
						
						<!--<li>
							<a href="calendar.html" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-calendar4-week"></span
								><span class="mtext">Calendar</span>
							</a>
						</li>
						
						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-pie-chart"></span
								><span class="mtext">Charts</span>
							</a>
							<ul class="submenu">
								<li><a href="highchart.html">Highchart</a></li>
								<li><a href="knob-chart.html">jQuery Knob</a></li>
								<li><a href="jvectormap.html">jvectormap</a></li>
								<li><a href="apexcharts.html">Apexcharts</a></li>
							</ul>
						</li>-->

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
						<!--<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-bug"></span
								><span class="mtext">Error Pages</span>
							</a>
							<ul class="submenu">
								<li><a href="400.html">400</a></li>
								<li><a href="403.html">403</a></li>
								<li><a href="404.html">404</a></li>
								<li><a href="500.html">500</a></li>
								<li><a href="503.html">503</a></li>
							</ul>
						</li>-->
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
								<!--<li><a href="blank.html">Blank</a></li>
								<li><a href="contact-directory.html">Contact Directory</a></li>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="blog-detail.html">Blog Detail</a></li>
								<li><a href="product.html">Product</a></li>
								<li><a href="product-detail.html">Product Detail</a></li>
								<li><a href="faq.html">FAQ</a></li>
								<li><a href="profile.php">Profile</a></li>
								<li><a href="gallery.html">Gallery</a></li>
								<li><a href="pricing-table.html">Pricing Tables</a></li>-->
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
								<!--<li><a href="blank.html">Blank</a></li>
								<li><a href="contact-directory.html">Contact Directory</a></li>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="blog-detail.html">Blog Detail</a></li>
								<li><a href="product.html">Product</a></li>
								<li><a href="product-detail.html">Product Detail</a></li>-->
                                <li><a href="test.php">Customer Setting</a></li>
								<!--<li><a href="faq.php">FAQ</a></li>-->
								<li><a href="profile.php">Profile Setting</a></li>
                                <!--<li><a href="addbadmintonoption.php">Add Badminton Option</a></li>-->
								<li><a href="bookingList.php">Booking List</a></li>
                                <!--<li><a href="editbadmintonoption.php">Edit Badminton Option</a></li>-->
								<!--<li><a href="gallery.html">Gallery</a></li>
								<li><a href="pricing-table.html">Pricing Tables</a></li>-->
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
						
						<!--<li>
							<a href="invoice.html" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-receipt-cutoff"></span
								><span class="mtext">Invoice</span>
							</a>
						</li>
						<li>
							<div class="dropdown-divider"></div>
						</li>
						<li>
							<div class="sidebar-small-cap">Extra</div>
						</li>
						
						<li>
							<a
								href="https://dropways.github.io/deskapp-free-single-page-website-template/"
								target="_blank"
								class="dropdown-toggle no-arrow"
							>
								<span class="micon bi bi-layout-text-window-reverse"></span>
								<span class="mtext"
									>Landing Page
									<img src="vendors/images/coming-soon.png" alt="" width="25"
								/></span>
							</a>
						</li>-->
					</ul>
				</div>
			</div>
		</div>