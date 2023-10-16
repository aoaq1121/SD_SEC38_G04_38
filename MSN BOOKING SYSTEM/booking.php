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
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Booking</a>
                        <div class="dropdown-menu m-0">
                            <a href="pricerate.php" class="dropdown-item">Price Rate</a>
                            <a href="booking.php" class="dropdown-item active">Booking</a>
                        </div>
                    </div>
                    
                    
                </div>
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
                        <h1 class="display-3 text-white animated slideInDown">Booking</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Booking</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->


    <!-- Process Start -->
    <!--<div class="container-xxl py-5">
        <div class="container">
            <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-grey text-center text-primary px-3">Process</h6>
                <h1 class="mb-5">3 Easy Steps</h1>
            </div>
            <div class="row gy-5 gx-4 justify-content-center">
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-globe fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Choose A Destination</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Tempor erat elitr rebum clita dolor diam ipsum sit diam amet diam eos erat ipsum et lorem et sit sed stet lorem sit</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-dollar-sign fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Pay Online</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Tempor erat elitr rebum clita dolor diam ipsum sit diam amet diam eos erat ipsum et lorem et sit sed stet lorem sit</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-plane fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Fly Today</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Tempor erat elitr rebum clita dolor diam ipsum sit diam amet diam eos erat ipsum et lorem et sit sed stet lorem sit</p>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- Process Start -->



    <!-- Booking Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="booking p-5">
                <div class="row g-5 align-items-center">
                    <!--<div class="col-md-6 text-white">
                        <h6 class="text-white text-uppercase">Online Booking</h6>
                        <h1 class="text-white mb-4">Badminton Slot Availability</h1>-->
                        <!--<p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <a class="btn btn-outline-light py-3 px-5 mt-2" href="">Read More</a>-->
                    <!--</div>-->
                    <div class="col-md-6">
                        <h1 class="text-white mb-4">Badminton Slot Availability</h1>
                        <h6 class="text-white text-uppercase">Book a Slot</h6>
                        <form method="post" action="">
                            <div class="row g-3">
                                <!--<div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-transparent" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>-->
                                <div class="col-12">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                    
                                    <input type="date" class="form-control bg-transparent datepicker-input" id="date" name="date" value="<?php echo $searchDate; ?>"  placeholder="Date" required />
                                    <label for="date">Select a date:</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                    
                                    <!--<input type="time" class="form-control bg-transparent timepicker-input" id="time" value="<?php //echo $searchTime; ?>" placeholder="Time"  required  />-->
                                    
                                    <select class="form-control bg-transparent timepicker-input" name="time" id="time" required>
                                    <option value="">Time</option>
                                    <?php
                                    include("Login_v3/db.php");
                                    $timesql = "SELECT * FROM `badmintontimeoption` ORDER BY `badmintontimeoption`.`timeid` ASC "; // You may need to change '1' to the ID of your contact
                                    $timequery = mysqli_query($conn,$timesql);
                                    
                                        while ($row = mysqli_fetch_assoc($timequery)) {
                                            echo '<option value="' . $row['timeid'] . '">' . $row['timevalue'] . '</option>';
                                        }
                                    ?>
                                    <!--<option value="">Time</option>
                                    <option value="07:00:00">07:00 AM</option>
                                    <option value="08:00:00">08:00 AM</option>
                                    <option value="09:00:00">09:00 AM</option>
                                    <option value="10:00:00">10:00 AM</option>
                                    <option value="11:00:00">11:00 AM</option>
                                    <option value="12:00:00">12:00 PM</option>
                                    <option value="13:00:00">01:00 PM</option>
                                    <option value="14:00:00">02:00 PM</option>
                                    <option value="15:00:00">03:00 PM</option>
                                    <option value="16:00:00">04:00 PM</option>
                                    <option value="17:00:00">05:00 PM</option>
                                    <option value="18:00:00">06:00 PM</option>
                                    <option value="19:00:00">07:00 PM</option>
                                    <option value="20:00:00">08:00 PM</option>
                                    <option value="21:00:00">09:00 PM</option>
                                    <option value="22:00:00">10:00 PM</option>-->
                                    
                                    </select>
                                    <label for="time">Select a time:</label> 
                                    </div>
                                </div>
                                                         <div class="col-md-6">
                                    <div class="form-floating" id="date3" data-target-input="nearest">
                                    
                                    <!--<input type="number" class="form-control bg-transparent timepicker-input"  id="duration"  step="0.5" min="0.5" value="<?php //echo $searchDurationHours; ?>"  placeholder="Duration"  required  />-->
                                    <select class="form-control bg-transparent timepicker-input" name="duration" id="duration"  required>
                                    <option value="">Duration</option>
                                    <!--<option value="1">1 hour</option>
                                    <option value="2">2 hour</option>
                                    <option value="3">3 hour</option>
                                    <option value="4">4 hour</option>-->
                                    <?php
                                        include("Login_v3/db.php");
                                        $durationsql = "SELECT * FROM badmintondurationoption ORDER BY `badmintondurationoption`.`durationid` ASC "; // You may need to change '1' to the ID of your contact
                                        $durationquery = mysqli_query($conn,$durationsql);
                                        while ($row = mysqli_fetch_assoc($durationquery)) {
                                            echo '<option value="' . $row['durationid'] . '">' . $row['durationvalue'] . '</option>';
                                        }
                                    ?>
                                    <!--<option value="1.5">1 hour 30 minutes</option>-->
                                    
                                    </select><br>
                                    <label for="duration">Select a duration (in hour):</label>
                                    </div>
                                </div>
                                <!--<div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select bg-transparent" id="select1">
                                            <option value="1">Destination 1</option>
                                            <option value="2">Destination 2</option>
                                            <option value="3">Destination 3</option>
                                        </select>
                                        <label for="select1">Destination</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control bg-transparent" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                        <label for="message">Special Request</label>
                                    </div>
                                </div>-->
                                <div>
                                    <!--<button class="btn btn-outline-light w-100 py-3" type="submit" value="Search">-->
                                    
                                    <button class="btn btn-outline-light w-100 py-3" type="submit" name="searchButton">Search</button>
                                </div>
                            </div>
                            <!-- <div class="row g-3">
                                
                            </div> -->
                        </form>
                    </div>
                    <div class="col-md-6">
                                <?php
                               include("Login_v3/db.php");
                                
                                // Initialize variables
                                $searchDate = date('d-m-Y');
                                $searchTime = '';
                                $searchDurationHours = 1; // Default duration in hours
                                $bookedCourtIdsString = ''; // Initialize an empty string


                                // Check if the form has been submitted
                                if(isset($_POST['searchButton'])){

                                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                        $searchDate = $_POST['date'];
                                        $searchTime = $_POST['time'];
                                        $searchDurationHours = $_POST['duration'];
                                        // $endTime = $searchTime + $searchDurationHours;
                                        // Calculate the end time in seconds
                                        $endTimeSeconds = strtotime($searchTime) + ($searchDurationHours * 3600);
                                        $endTime = date('H:i:s', $endTimeSeconds);

                                        // $bookingID = mysqli_num_rows(mysqli_query($conn,"SELECT bsid FROM badmintonslots")) + 1;
                                        $randomNumber = mt_rand(10000, 99999);

                                // Get the current timestamp (Unix timestamp)
                                $timestamp = time();

                                // Concatenate the random number and timestamp to create a unique integer ID
                                $bookingID = $randomNumber . $timestamp;

                                // Convert the result to an integer if needed
                                $bookingID = (int)$bookingID;

                                // Display the booking ID
                                // echo "Booking ID: " . $bookingID;
                                    }

                                // // Convert duration from hours to minutes
                                $searchDurationMinutes = $searchDurationHours * 60;

                                // // Query to retrieve available courts based on user input
                                // $query = "SELECT bsid, COUNT(bsid) AS availablecount FROM badmintonslots
                                //         WHERE date = $searchDate AND isbooked = 0
                                //         AND starttime >= $searchTime AND TIMESTAMPADD(MINUTE, $searchDurationMinutes, starttime) <= endtime
                                //         GROUP BY bsid
                                //         HAVING availablecount >= 10";
                                $query = "SELECT date FROM badmintonslots WHERE date = '$searchDate'";
                                $result = mysqli_query($conn,$query);
                                // echo $result;
                                // echo $query;
                                // echo '\n'.$searchTime+3;
                                // Generate a random number between a range (e.g., 10000 and 99999)
                                // echo mysqli_num_rows($checkCourt);
                                
                                // else{
                                    if (mysqli_num_rows($result) == 0) {
                                        echo "<h1 style='color: white;'>Available Badminton Courts for $searchDate, from $searchTime to $endTime</h2>";
                                        $searchCourt = "SELECT courtid FROM court ";
                                        $output = mysqli_query($conn, $searchCourt);
                                
                                        echo "<form method='post' action=''>";
                                        while ($row = mysqli_fetch_assoc($output)) {
                                            echo "<input type='radio' name='selectedCourt' value='{$row['courtid']}' id='court{$row['courtid']}' />";
                                            echo "<label for='court{$row['courtid']}'>Court {$row['courtid']}</label><br>";
                                            echo "<input type='hidden' name='searchDate' value='$searchDate'/>";
                                            echo "<input type='hidden' name='searchTime' value='$searchTime'/>";
                                            echo "<input type='hidden' name='endTime' value='$endTime'/>";
                                            echo "<input type='hidden' name='bookingID' value='$bookingID'/>";
                                            
                                        }
                                        
                                        echo "<br><button class='btn btn-outline-light w-100 py-3' type='submit' name='bookCourt'>Book Court</button>";
                                        echo "</form>";
                                    } elseif (mysqli_num_rows($result) > 0) {
                                        $searchCourt = "SELECT * FROM badmintonslots WHERE date = '$searchDate' AND '$searchTime' >= `starttime` AND '$searchTime' < `endtime` OR '$endTime' >= `starttime` AND '$endTime' < `endtime`";
                                        $checkCourt = mysqli_query($conn,$searchCourt);
                                        if (mysqli_num_rows($checkCourt) == 4) {
                                            echo "<h1 style='color: white;'>No available courts for the selected date, time, and duration.</h2>";
                                        }
                                        else{
                                            echo "<h1 style='color: white;'>Available Badminton Courts for $searchDate, from $searchTime to $endTime</h2>";
                                        // $searchCourt = "SELECT courtid FROM court WHERE courtid NOT IN (SELECT bsid FROM badmintonslots WHERE date = '$searchDate' AND starttime = '$searchTime')";
                                        
    
                                        $bookedCourts = [];
                                        while ($bookedCourtRow = mysqli_fetch_assoc($checkCourt)) {
                                            $bookedCourts[] = $bookedCourtRow['bsid'];
                                        }
    
                                        $getCourt = mysqli_query($conn,"SELECT courtid FROM court");
                                                                    
                                        
                                        echo "<form method='post' action=''>";
                                        while ($getCourtRow = mysqli_fetch_assoc($getCourt)) {
                                            $courtId = $getCourtRow['courtid'];
                                            
                                            // Check if the court is not booked (not in $bookedCourts array)
                                            if (!in_array($courtId, $bookedCourts)) {
                                                echo "<input type='radio' name='selectedCourt' value='$courtId' id='court$courtId' />";
                                                echo "<label for='court$courtId'>Court $courtId</label><br>";
                                            }
                                        }
                                        echo "<input type='hidden' name='searchDate' value='$searchDate'/>";
                                        echo "<input type='hidden' name='searchTime' value='$searchTime'/>";
                                        echo "<input type='hidden' name='endTime' value='$endTime'/>";
                                        echo "<input type='hidden' name='bookingID' value='$bookingID'/>";
                                        echo "<button class='btn btn-outline-light w-100 py-3' type='submit' name='bookCourt'>Book Court</button>";
                                        echo "</form>";
                                        }
                                }
                            // }

                                                // $bookedCourt = mysqli_fetch_assoc($checkCourt);
                                                // // echo $searchCourt;
                                                // echo $bookedCourt['bsid'];
                                                // while($getCourtRow == mysqli_fetch_assoc($getCourt)){
                                                //     while($bookedCourtRow = $bookedCourt){
                                                //         if($getCourtRow['courtid'] != $bookedCourtRow['bsid']){
                                                //             echo "<input type='radio' name='selectedCourt' value='{$row['courtid']}' id='court{$row['courtid']}' />";
                                                //             echo "<label for='court{$row['courtid']}'>Court {$row['courtid']}</label><br>";
                                                //             echo "<input type='hidden' name='searchDate' value='$searchDate'/>";
                                                //             echo "<input type='hidden' name='searchTime' value='$searchTime'/>";
                                                //             echo "<input type='hidden' name='endTime' value='$endTime'/>";
                                                //             echo "<input type='hidden' name='bookingID' value='$bookingID'/>";
                                                //         }
                                                //     }
                                                // }
                                                // echo "<button type='submit' name='bookCourt'>Book Court</button>";
                                                // if(mysqli_num_rows($checkCourt) == 4){
                                                //     echo "<h2>No available courts for the selected date, time, and duration.</h2>";
                                                // }
                                                
                                                // echo $checkCourtRow['bsid'];                
                                                // echo $searchCourt;
                                                // $output = mysqli_query($conn, $searchCourt);
                                                // while($getCourtRow = mysqli_fetch_assoc($getCourt)){
                                                    
                                        
                                                // echo "<form method='post' action=''>";
                                                // if ($availableCourt = mysqli_num_rows($getCourt)) {
                                                //     while ($row = mysqli_fetch_assoc($getCourt)) {
                                                //         if($row['courtid'] != $checkCourtRow['bsid']){
                                                        // echo "<input type='radio' name='selectedCourt' value='{$row['courtid']}' id='court{$row['courtid']}' />";
                                                        // echo "<label for='court{$row['courtid']}'>Court {$row['courtid']}</label><br>";
                                                        // echo "<input type='hidden' name='searchDate' value='$searchDate'/>";
                                                        // echo "<input type='hidden' name='searchTime' value='$searchTime'/>";
                                                        // echo "<input type='hidden' name='endTime' value='$endTime'/>";
                                                        // echo "<input type='hidden' name='bookingID' value='$bookingID'/>";
                                                //         }
                                                //     }
                                                //     echo "<button type='submit' name='bookCourt'>Book Court</button>";
                                                // } else {
                                                //     echo "<h2>No available courts for the selected date, time, and duration.</h2>";
                                                // }
                                        
                                    
                                        // $stmt = mysqli_prepare($mysqli, $query);
                                        // mysqli_stmt_bind_param($stmt, "ssi", $searchDate, $searchTime, $searchDurationMinutes);
                                        // mysqli_stmt_execute($stmt);
                                        // $result = mysqli_stmt_get_result($stmt);
                                        // $result = mysqli_query($conn,$query);

                                        // // Check if there are available courts
                                        // if (mysqli_num_rows($result) > 0) {
                                            // echo "<h2>Available Badminton Courts for $searchDate:</h2>";
                                            // echo "<ul>";
                                            // while ($row = mysqli_fetch_assoc($result)) {
                                            //     echo "<li>Court {$row['bsid']}</li>";
                                            // }
                                            // echo "</ul>";
                                        // } else {
                                        //     echo "<h2>No available courts for the selected date, time, and duration.</h2>";
                                        // }

                                        // // Close the database connection
                                        // mysqli_stmt_close($stmt);
                                        // mysqli_close($mysqli);
                                    }

                                    if(isset($_POST['bookCourt'])){
                                        $bookingID = $_POST['bookingID'];
                                        $selectedCourt = $_POST['selectedCourt'];
                                        $searchDate = $_POST['searchDate'];
                                        $searchTime = $_POST['searchTime'];
                                        $endTime = $_POST['endTime'];
                                        // echo $bookingID;
                                        // echo $selectedCourt;
                                        $reserve = "INSERT INTO badmintonslots(bookingid,bsid,date,starttime,endtime,isbooked)VALUES('$bookingID','$selectedCourt','$searchDate','$searchTime','$endTime','1')";
                                        // echo $reserve;
                                        mysqli_query($conn,$reserve);
                                 }
                                ?> 
                                </div>
                </div>
            </div>
        </div>
    </div>
                             
                        

    <?php
                        //error_reporting(E_ALL);
                        //ini_set('display_errors', '1');
                        
                        //include("Login_v3/db.php");
                        // Initialize variables
                        //$searchDate = date('d-m-Y');
                        //$searchTime = '';
                        //$searchDurationHours = 1; // Default duration in hours
                        //$searchButton = $_POST['$searchButton'];
                        // Check if the form has been submitted
                        //if(isset($_POST['searchButton'])){
                          //  if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            //    $searchDate = $_POST['date'];
                              //  $searchTime = $_POST['time'];
                                //$searchDurationHours = $_POST['duration'];
                            //}
    
                            // Convert duration from hours to minutes
                            //$searchDurationMinutes = $searchDurationHours * 60;
    
                            // Query to retrieve available courts based on user input
                            //$query = "SELECT DISTINCT bsid FROM badmintonslots
                              //      WHERE date = $searchDate AND isbooked = 0
                                //    AND starttime >= $searchTime AND TIMESTAMPADD(MINUTE, $searchDurationMinutes, starttime) <= endtime";
                            //$stmt = mysqli_prepare($mysqli, $query);
                            //mysqli_stmt_bind_param($stmt, "ssi", $searchDate, $searchTime, $searchDurationMinutes);
                            //mysqli_stmt_execute($stmt);
                            //$result = mysqli_stmt_get_result($stmt);
    
                            // // Check if there are available courts
                            //if (mysqli_num_rows($result) > 0) {
                              //  echo "<h2>Available Badminton Courts for $searchDate:</h2>";
                                //echo "<ul>";
                                //while ($row = mysqli_fetch_assoc($result)) {
                                  //  echo "<li>Court {$row['bsid']}</li>";
                                //}
                                //echo "</ul>";
                            //} else {
                              //  echo "<h2>No available courts for the selected date, time, and duration.</h2>";
                            //}
    
                            // // Close the database connection
                            //mysqli_stmt_close($stmt);
                            //mysqli_close($mysqli);
                        //}
                    ?>
    <!-- Booking End -->
        

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