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
    <?php
        include 'header.php';
    ?>
    <!-- Topbar End -->


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h3 class="text-primary m-0"><img src="img/logo.png" alt="Logo"></i> Majlis Sukan Negara</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link active">About</a>
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
                        <h1 class="display-3 text-white animated slideInDown">About Us</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <?php
    // Include your database connection code here
    include("Login_v3/db.php");


    // Fetch contact information from the database (assuming you have a 'contacts' table)
    $query = "SELECT * FROM editabout WHERE id = 1"; // You may need to change '1' to the ID of your contact
    $result = mysqli_query($conn,$query);

    if ($result && $result->num_rows > 0) {
    $about = $result->fetch_assoc();
    }   
    ?>                   
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/msnHistory.jpg" alt="msnHistory" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-grey text-start text-primary pe-3">About Us</h6>
                    <h1 class="text-wheat mb-4">History of <span class="text-primary">MSN</span></h1>
                    <!--<p class="mb-4">The National Sports Council was established under the National Sports Council Act of Malaysia 1971 and the National Sports Council (Amendment) Act of 1979. 
                        Its official launch was carried out by the second Prime Minister of Malaysia, Y.A.B Tun Abdul Razak bin Datuk Hussein, on February 21, 1972.</p>
                    <p class="mb-4">In its early stages, high-performance sports programs were implemented under the supervision of the Sports Division, Ministry of Culture, Youth and Sports (the name of the Ministry of Youth and Sports at that time). 
                        To achieve the council's goals, a collective effort involving both governmental and non-governmental agencies, local sports organizations, state sports councils, higher education institutions, voluntary organizations, 
                        and individuals was initiated to ensure that the nation's sports quality could achieve the highest performance.</p>
                    <p class="mb-4">After the reorganization of the council in 1981, it began to move forward and subsequently developed programs and activities to reach the point visible today. The purpose of establishing the 
                        National Sports Council of Malaysia is in line with the National Sports Policy, which is to fully promote, develop, and achieve excellence in sports at the highest level.</p>-->
                    <!--<a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>-->
                    <p class="mb-4"><?php echo $about ['history'];?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-grey text-center text-primary px-3">VISI & MISI</h6>
                <h1 class="text-wheat mb-5">VISI & MISI Majlis Sukan Negara</h1>
            </div>
            <div class="row g-4 justify-content-center"> <!-- Center the content -->
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3" style="height: 100%;"> <!-- Set fixed height -->
                        <div class="p-4">
                            <h5 style="color:peru">VISI</h5>
                            <!--<p>Peneraju Sukan Prestasi
                                Tinggi Terunggul Ke Arah
                                Melahirkan Lebih Ramai Atlet Bertaraf
                                Antarabangsa</p>-->
                            <p><?php echo $about ['visi'];?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3" style="height: 100%;"> <!-- Set fixed height -->
                        <div class="p-4">
                            <h5 style="color:peru">MISI</h5>
                            <!--<p>Memastikan Program
                                Pembangunan Sukan Berprestasi
                                Tinggi Dilaksanakan Secara Menyeluruh,
                                Sistematik Dan Berkesan Di Semua Peringkat</p>-->
                            <p><?php echo $about ['misi'];?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Destination Start -->
    <div class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-grey text-center text-primary px-3">Objective</h6>
                <h1 class="text-wheat mb-5">Objective Majlis Sukan Negara</h1>
            </div>
            <div class="row g-3 justify-content-center">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/objectiveMsn.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Destination end -->    


    <!-- Footer Start -->
    <?php
        include 'footer.php';
    ?>
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