<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Company</h4>
                    <a class="btn btn-link" href="about.php">About Us</a>
                    <a class="btn btn-link" href="contact.php">Contact Us</a>
                    <!--<a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">FAQs & Help</a>-->
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
                    <!--<div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>-->
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
                <!--<div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>Receive news and promotion for our upcoming events</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>-->
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">MSN BOOKING SYSTEM</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="index.php">Home</a>
                            <!--<a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>