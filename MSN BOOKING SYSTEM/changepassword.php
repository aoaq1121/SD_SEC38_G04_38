<!DOCTYPE html>
<?php
    session_start();
    // session_destroy();

?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kompleks Sukan Negara Setiawangsa</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Jalan 6/27a, Wangsa Maju, Kuala Lumpur</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+60 3-4142 0082</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>amzar@nsc.gov.my</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h3 class="text-primary m-0"><img src="img/logo.png" alt="Logo"></i> Majlis Sukan Negara</h1>
                <!-- <i class="fa fa-map-marker-alt me-3"> -->
                <!-- <img src="img/logo.png" alt="Logo"> -->
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
                <!-- <a href="../MSN BOOKING SYSTEM/Login_v3/login.php" class="btn btn-primary rounded-pill py-2 px-4">LogIn</a>  -->

                <?php
                    // Assuming you have an active MySQLi connection named $conn

                    if ($_SESSION['email'] == null) {?>
                        <a href="../MSN BOOKING SYSTEM/Login_v3/login.php" class="btn btn-primary rounded-pill py-2 px-4">LogIn</a>
                <?php }?>
                                    <!-- <a href="../MSN BOOKING SYSTEM/Login_v3/login.php" class="btn btn-primary rounded-pill py-2 px-4">LogIn</a>  -->
                         
                                    
                <?php
                    // Assuming you have an active MySQLi connection named $conn

                    if ($_SESSION['email'] != null) {?>
                        <?php
                            // Assuming you have an active MySQLi connection named $conn

                            // Retrieve the email from the session
                            $email = $_SESSION['email'];

                            // // SQL query to select the username based on the email
                            // $sql = "SELECT name FROM users WHERE email = $email";
                            // $query = mysqli_prepare($conn, $sql);

                            // // Bind the email parameter
                            // mysqli_stmt_bind_param($query, "s", $email);

                            // // Execute the query
                            // mysqli_stmt_execute($query);

                            // // Bind the result variable
                            // mysqli_stmt_bind_result($query, $name);

                            // // Fetch the result
                            // if (mysqli_stmt_fetch($query)) {
                            //     // Access and display the username
                            //     echo htmlentities($name);
                            // }

                            // // Close the statement
                            // mysqli_stmt_close($query);
                            ?>
                <?php }?>
                    
                    <div class="nav-item dropdown">
                        <?php if($_SESSION['email']){?><a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><img src="img/useryellow.png" width="30px" height="30px"></a>
                        <div class="dropdown-menu m-0">
                            <a href="profile.php" class="dropdown-item">Profile Setting</a>
                            <a href="changepassword.php" class="dropdown-item">Change Password</a>
                            <a href="../MSN BOOKING SYSTEM/Login_v3/logout.php" class="dropdown-item">Sign Out</a>
                            <?php } ?>
                        </div>
                    </div>
                <!--<a href="signup.html" class="btn btn-primary rounded-pill py-2 px-4">SignUp</a>-->
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Change Password</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Change Password</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->
    <!--content start-->  
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-grey text-center text-primary px-3">Password Setting</h6>
                <h1 class="text-wheat mb-5">Change Password</h1>
            </div>
                
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <!--<div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">-->
                <!--<h5 style="color:darkgoldenrod;text-align:center">Change Password</h5>-->
                
                    <form style="text-align:center" method="POST">
                        <div class="row g-3">
                           <!-- <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="currentpass" minlength="6" maxlength="15" id="currentpass" placeholder="Current Password" >
                                    <label for="currentpass" style="color:lightslategrey">Current Password</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email"  name="email" placeholder="Email" readonly>
                                    <label for="email" style="color:lightslategrey">Email</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name" >
                                    <label for="fullname" style="color:lightslategrey">Full Name</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="gender" name="gender" placeholder="Gender">
                                    <label for="gender" style="color:lightslategrey">Gender(Male/Female)</label>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Phone Number">
                                    <label for="phoneNumber" style="color:lightslategrey">Mobile Phone (+60)</label>
                                </div>
                            </div>-->
                            
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="currentpass" minlength="6" maxlength="15" id="currentpass" placeholder="Current Password" >
                                    <label for="fullname" style="color:lightslategrey">Current Password</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="password" class="form-control" name="password" title="Must contain at least one number and one uppercase and lowercase letter and at least 6 or more characters" pattern="[_%+\-@#](?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" minlength="6" maxlength="15" id="password" placeholder="New Password">
                                    <label for="paasowrd" style="color:lightslategrey">New Password</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="password" class="form-control" name="cpassword" title="Must contain at least one number and one uppercase and lowercase letter and at least 6 or more characters" pattern="[_%+\-@#](?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" minlength="6" maxlength="15" id="cpassword" placeholder="Confirm Password">
                                    <label for="cpassword" style="color:lightslategrey">Confirm Password</label>
                                </div>
                            </div>
                        
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" name="changepasswordbutton">Change Password</button>
                            </div>
                        </div>
                    </form>
                </div>  
            </div>
        </div>  
    </div>

    <!--<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');*{padding: 0;margin: 0;font-family: 'Poppins', sans-serif}.container{display:flex;justify-content:center;align-items:center;}.card{width:350px;height:450px;border-radius:10px;overflow:hidden}.card .info{padding:15px;display:flex;justify-content:space-between;border-bottom:1px solid #e1dede;background-color:#e5e5e5;color:black}.card .info button{height:30px;width:80px;border:none;color:#fff;border-radius:4px;background-color:#000;cursor:pointer;text-transform:uppercase}.card .forms{padding:15px}.card .inputs{display:flex;flex-direction:column;margin-bottom:10px}.card .inputs span{font-size:12px;color:black}.card .inputs input{height:40px;padding:0px 10px;font-size:17px;box-shadow:none;outline:none}.card .inputs input[type="text"][readonly]{border: 2px solid rgba(0,0,0,0)}
    </style>                     
    <div class="container"> 
        <div class="card"> 
        <form method="POST">
                <div class="info"> 
                    <span>Change Password</span> 
                    <button type="submit" name="changepasswordbutton">Change</button> 
                </div>
                <div class="forms"> 
                    <div class="inputs"> 
                        <span>Current Password</span> 
                        <input type="password" name="currentpass" minlength="6" maxlength="15" id="currentpass"> 
                    </div> 
                    <div class="inputs"> 
                    <span>New Password</span> 
                    <input type="password" name="password" title="Must contain at least one number and one uppercase and lowercase letter and at least 6 or more characters" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" minlength="6" maxlength="15" id="password"> 
                    </div>  
                    <div class="inputs"> 
                    <span>Confirm Password</span> 
                    <input type="password" name="cpassword" title="Must contain at least one number and one uppercase and lowercase letter and at least 6 or more characters" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" minlength="6" maxlength="15" id="cpassword"> 
                    </div>  
                </div> 
            </form>
        </div>
    </div>-->
    <!--content end-->                    


     <!-- Footer Start -->
     <?php include 'footer.php'; ?>
    <!-- Footer End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

    </html>


    <?php
    session_start();
    include('Login_v3/db.php');

    if (isset($_POST['changepasswordbutton'])) {

    $email = $_SESSION['email'];

    $password = md5($_POST['password']);

    $code = rand();

    $sql =  "UPDATE users SET password = '$password' WHERE email = '$email'";
    var_dump($sql);
    $qry = mysqli_query($conn,$sql);
    
    if($qry){
        echo '<script>';
        echo 'alert("Change Succesfully")';
        echo '</script>';
    }
    


    }

    

    ?>