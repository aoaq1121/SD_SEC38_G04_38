<div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h3 class="text-primary m-0"><img src="img/logo.png" alt="Logo"></i> Majlis Sukan Negara</h1>
               
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="service.php" class="nav-item nav-link">Services</a>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Booking</a>
                        <div class="dropdown-menu m-0">
                            <a href="pricerate.php" class="dropdown-item">Price Rate</a>
                            <a href="booking.php" class="dropdown-item">Booking</a>
                        </div>
                    </div>
                    
                </div>
               

                <?php
                    // Assuming you have an active MySQLi connection named $conn
                    

                    if ($_SESSION['email'] == null) {?>
                   
                       
                        <a href="../MSN BOOKING SYSTEM/Login_v3/login.php" class="btn btn-primary rounded-pill py-2 px-4">Log In</a>
                <?php }?>
                                   
                         
                                    
                <?php
                    // Assuming you have an active MySQLi connection named $conn

                    if ($_SESSION['email'] != null) {?>
                        <?php
                            // Assuming you have an active MySQLi connection named $conn

                            // Retrieve the email from the session
                            $email = $_SESSION['email'];

                           
                            ?>
                <?php }?>
                    
                    <div class="nav-item dropdown">
                        <?php if($_SESSION['email']){?><a href=""  class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><img src="img/useryellow.png" width="30px" height="30px"></a>
                        <div class="dropdown-menu m-0">
                            <a href="profile.php" class="dropdown-item">Profile Setting</a>
                            <a href="bookinghistory.php" class="dropdown-item">Booking History</a>
                            <a href="changepassword.php" class="dropdown-item">Change Password</a>
                            <a href="../MSN BOOKING SYSTEM/Login_v3/logout.php" class="dropdown-item">Sign Out</a>
                            <?php } ?>
                        </div>
                    </div>
               
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Kompleks Sukan Negara Setiawangsa</h1>
                        <p class="fs-4 text-white mb-4 animated slideInDown">Empowering Your Play. Book Your Victory Today!</p>
                        <div class="position-relative w-75 mx-auto animated slideInDown">
                            
                            <button type="button" onclick="window.location.href = 'booking.php';" class="btn btn-primary py-3 px-5 mt-2" style="font-size:20px; margin-top:9px;">Book Now</button>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>