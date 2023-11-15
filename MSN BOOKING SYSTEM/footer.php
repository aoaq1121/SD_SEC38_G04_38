<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Company</h4>
                    <a class="btn btn-link" href="about.php">About Us</a>
                    <a class="btn btn-link" href="contact.php">Contact Us</a>
                  
                    <a class="btn btn-link" href="../DASHBOARD ADMIN & STAFF/adminLogin.php">Admin/Staff LogIn</a>

                </div>
                <?php
                // Include your database connection code here
                include("Login_v3/db.php");


                // Fetch contact information from the database (assuming you have a 'contacts' table)
                $query = "SELECT office,mobile,name,email,businesshour FROM editcontact WHERE id = 1"; // You may need to change '1' to the ID of your contact
                $result = mysqli_query($conn,$query);

                if ($result && $result->num_rows > 0) {
                    $contact = $result->fetch_assoc();
                }
            ?>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><?php echo $contact ['office'];?></p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><?php echo "+60".$contact ['mobile'];?></p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i><?php echo $contact['email'];?></p>
                    
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/badmintonHall.jpg" alt="Badminton Hall">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/swimmingPool.jpg" alt="Swimming Pool">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/sportsTrack.jpg" alt="Sports Track">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/soccerField.jpg" alt="Soccer Field">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/ksnSetiawangsa.jpg" alt="KSN Setiawangsa">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/bg-hero.jpg" alt="KSN Setiawangsa">
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">MSN BOOKING SYSTEM</a>, All Right Reserved.

                       
                        Designed By G4_38
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="index.php">Home</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>