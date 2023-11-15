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
    <link href="img/logo.png" rel="icon">

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
    <?php
        include 'header.php';
    ?>
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
                    <a href="index.php" class="nav-item nav-link">Home</a>
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
                        <a href="../MSN BOOKING SYSTEM/Login_v3/login.php" class="btn btn-primary rounded-pill py-2 px-4">LogIn</a>
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
                        <?php if($_SESSION['email']){?><a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><img src="img/useryellow.png" width="30px" height="30px"></a>
                        <div class="dropdown-menu m-0">
                            <a href="profile.php" class="dropdown-item active">Profile Setting</a>
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
                        <h1 class="display-3 text-white animated slideInDown">My Profile</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Profile Settings</li>
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
                <h6 class="section-title bg-grey text-center text-primary px-3">Profile</h6>
                <h1 class="text-wheat mb-5">Profile Settings</h1>
            </div>
              
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <!--<div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">-->
                <h5 style="color:darkgoldenrod;text-align:center">Edit Profile</h5>
                
                    <form style="text-align:center" method="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Username" readonly>
                                    <label for="name" style="color:lightslategrey">Username</label>
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
                                  
                                    <select class="form-control" name="gender" id="gender" >
                                    <option value="female">Female</option>
                                    <option value="male">Male</option>
                                    </select>
                                    <label for="gender" style="color:lightslategrey">Gender(Male/Female)</label>
                                    
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Phone Number">
                                    
                                    <label for="phoneNumber" style="color:lightslategrey">Mobile Phone (+60)</label>
                                </div>
                            </div>
                            
                           
                            
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth" placeholder="Date of Birth">
                                    <label for="dateOfBirth" style="color:lightslategrey">Date of Birth</label>
                                </div>
                            </div>
                           
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" name="saveprofilebutton">Save</button>
                            </div>
                        </div>
                    </form>
                </div>  
            </div>
        </div>  
    </div>

    


     <!-- Footer Start -->
     <?php include 'footer.php' ?>
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
    include 'Login_v3/db.php';

    $email=$_SESSION['email'];                         
    if (isset($_POST['saveprofilebutton'])) {
        $fullname = $_POST['fullname'];
        $phoneNumber = $_POST['phoneNumber'];
        $gender = $_POST['gender'];
        $dateOfBirth = $_POST['dateOfBirth'];
        $email = $_POST['email'];

        $code = rand();

        $sql =  "UPDATE users SET fullname ='$fullname' , phoneNumber ='$phoneNumber',gender ='$gender',dateOfBirth ='$dateOfBirth' WHERE email = '$email'";
        $qry = mysqli_query($conn,$sql);

        echo '<script>';
        echo 'alert("Save Succesfully")';
        echo '</script>';
    }
    ?>

<?php
session_start();
include 'Login_v3/db.php';


if (isset($_SESSION['email'])) {

    

}

    $key = $_SESSION['email'];
    $userQry=mysqli_query($conn,'SELECT * from users where email="'.$key.'"');    
    $row = mysqli_fetch_assoc($userQry);

    $name = $row['name'];
    $email = $row['email'];
    $fullname = $row['fullname'];
    $phoneNumber = $row['phoneNumber'];
    $gender = $row['gender'];
    $dateOfBirth = $row['dateOfBirth'];
    

    echo '<script>';
    echo 'document.getElementById("name").value = "' . $name . '";';
    echo 'document.getElementById("email").value = "' . $key . '";';
    echo 'document.getElementById("fullname").value = "' . $fullname . '";';
    echo 'document.getElementById("phoneNumber").value = "' . $phoneNumber . '";';
    echo 'document.getElementById("gender").value = "' . $gender. '";';
    echo 'document.getElementById("dateOfBirth").value = "' . $dateOfBirth . '";';
    
    echo '</script>';
    
?>
   


