 
<!DOCTYPE html>
<?php
    session_start();
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
                                   
                         
                                    
                <?php
                    // Assuming you have an active MySQLi connection named $conn

                    if ($_SESSION['email'] != null) {?>
                        <?php
                           
                            $email = $_SESSION['email'];

                            
                            ?>
                <?php }?>
                    
                    <div class="nav-item dropdown">
                        <?php if($_SESSION['email']){?><a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><img src="img/useryellow.png" width="30px" height="30px"></a>
                        <div class="dropdown-menu m-0">
                            <a href="profile.php" class="dropdown-item">Profile Setting</a>
                            <a href="bookinghistory.php" class="dropdown-item">Booking History</a>
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



   
    <?php

if($_SESSION['email']){
?> 
                      
    <!-- Booking Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            
            <div class="booking p-5">
                
                <div class="row g-5 align-items-center">
                
                    <div class="col-md-6">
                        <h1 class="text-white mb-4">Badminton Slot Availability</h1>
                        <h6 class="text-white text-uppercase">Book a Slot</h6>
                        <form method="post" action="">
                            <div class="row g-3">
                                
                                
                                <div class="col-12">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                    
                                    <input type="date" class="form-control bg-transparent datepicker-input" id="date" name="date" value="<?php echo $searchDate; ?>"  placeholder="Date" required />
                                    <label for="date">Select a date:</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                    
                                    
                                    
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
                              
                                    
                                    </select><br>
                                    <label for="duration">Select a duration (in hour):</label>
                                    </div>
                                </div>
                                
                                <div>
                                   
                                    
                                    <button class="btn btn-outline-light w-100 py-3" type="submit" name="searchButton">Search</button>
                                </div>
                                
                            </div>
                            
                                
                            
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
                                   
                                        // Calculate the end time in seconds
                                        $endTimeSeconds = strtotime($searchTime) + ($searchDurationHours * 3600);
                                        $endTime = date('H:i:s', $endTimeSeconds);
                                        $randomNumber = mt_rand(10000, 99999);

                                // Get the current timestamp (Unix timestamp)
                                $timestamp = time();

                                // Concatenate the random number and timestamp to create a unique integer ID
                                $bookingID = $randomNumber . $timestamp;

                                // Convert the result to an integer if needed
                                $bookingID = (int)$bookingID;

                            
                                    }

                                // // Convert duration from hours to minutes
                                $searchDurationMinutes = $searchDurationHours * 60;

                               
                                $query = "SELECT date FROM badmintonslots WHERE date = '$searchDate'";
                                $result = mysqli_query($conn,$query);
                               
                                
                                // else{
                                    if (mysqli_num_rows($result) == 0) {
                                        echo "<h1 style='color: white;'>Available Badminton Courts for $searchDate, from $searchTime to $endTime</h2>";
                                        $searchCourt = "SELECT courtid FROM court ";
                                        $output = mysqli_query($conn, $searchCourt);
                                
                                        echo "<form method='post' action='badmintonprice.php'>";
                                        while ($row = mysqli_fetch_assoc($output)) {
                                            echo "<input type='radio' name='selectedCourt' value='{$row['courtid']}' id='court{$row['courtid']}' />";
                                            echo "<label for='court{$row['courtid']}'>Court {$row['courtid']}</label><br>";
                                            echo "<input type='hidden' name='searchDate' value='$searchDate'/>";
                                            echo "<input type='hidden' name='searchTime' value='$searchTime'/>";
                                            echo "<input type='hidden' name='endTime' value='$endTime'/>";
                                            echo "<input type='hidden' name='bookingID' value='$bookingID'/>";
                                            echo "<input type='hidden' name='duration' value='$searchDurationHours'/>";

                                            
                                        }
                                        
                                        echo "<br><button class='btn btn-outline-light w-100 py-3' type='submit' name='bookCourt'>Book Court</button>";
                                        echo "</form>";
                                    } elseif (mysqli_num_rows($result) > 0) {
                                        $searchCourt = "SELECT * FROM badmintonslots WHERE date = '$searchDate' AND ('$searchTime' >= `starttime` AND '$searchTime' < `endtime` OR '$endTime' >= `starttime` AND '$endTime' < `endtime`)";
                                        $checkCourt = mysqli_query($conn,$searchCourt);
                                        if (mysqli_num_rows($checkCourt) == 4) {
                                            echo "<h1 style='color: white;'>No available courts for the selected date, time, and duration.</h2>";
                                        }
                                        else{
                                            echo "<h1 style='color: white;'>Available Badminton Courts for $searchDate, from $searchTime to $endTime</h2>";
                                        
                                        
    
                                        $bookedCourts = [];
                                        while ($bookedCourtRow = mysqli_fetch_assoc($checkCourt)) {
                                            $bookedCourts[] = $bookedCourtRow['bsid'];
                                        }
    
                                        $getCourt = mysqli_query($conn,"SELECT courtid FROM court");
                                                                    
                                        
                                        echo "<form method='post' action='badmintonprice.php'>";
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
                                        echo "<input type='hidden' name='duration' value='$searchDurationHours'/>";
                                        echo "<button class='btn btn-outline-light w-100 py-3' type='submit' name='bookCourt' value='1'>Book Court</button>";
                                        echo "</form>";
                                        }
                                }
                            // }

                                               
                                    }

                                    
                                ?> 
                                </div>
                </div>
            </div>
            

        </div>
    </div>
                             
     <?php }else{
        echo '<h2 style="color:white;text-align:center;">Please <a href="../MSN BOOKING SYSTEM/Login_v3/login.php">Log In</a></h2>';
     }
    
     
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