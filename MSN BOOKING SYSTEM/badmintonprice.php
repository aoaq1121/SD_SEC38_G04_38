<!DOCTYPE html>
<?php
    session_start();

    //if ($_SESSION['email'] != null) {
        // header("location:MSN BOOKING SYSTEM/Login_v3/login.php");
    // session_destroy();
   // }

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
    <link rel="stylesheet" type="text/css" href="styles.css">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<style>
    .btn.btn-primary.w-100.py-3 {
    /* Add your styles here */
    background-color: #ffA500; /* Change the background color to the desired primary color */
    color: #fff; /* Set the text color to white or your preferred text color */
    padding: 15px 32px;
    text-align: center;
    border: none; /* Remove the button border, if desired */
    border-radius: 5px; /* Add border radius for rounded corners */
    margin: 4px 2px;
    /* Add any other styles you want */
    }
/* Define styles for the content box */
.content-box {
    border: 1px solid #ccc;
    padding: 20px;
    /*background-color: #000000;*/
    background: linear-gradient(rgba(15, 23, 43, .7), rgba(15, 23, 43, .7)), url(img/badmintonHall.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    box-shadow: 3px 3px 5px #888888;
    border-radius: 5px;
    margin: 100px auto; /* Set margin to auto for horizontal centering */
    width: 30%;
}


/* Style for the title */
.content-box h2 {
    font-size: 1.5rem;
    color: #333;
}

/* Style for the paragraph text */
.content-box p {
    font-size: 1rem;
    color: #666;
}


</style>

<body>
   
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
            <a href="index.php" class="navbar-brand p-0">
                <h3 class="text-primary m-0"><img src="img/logo.png" alt="Logo"></i> Majlis Sukan Negara</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>                   
    </div>
         
<?php
// Connect to the database (replace with your database credentials)
$mysqli = mysqli_connect("localhost", "root", "root", "msnbooking");

if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}


// Get user input from the form
$selecteddate = $_POST['searchDate'];
$duration = $_POST['duration'];
$selectedTime = $_POST['searchTime'];
$selectedendTime = $_POST['endTime'];
$courtselect = $_POST['selectedCourt'];
$email = $_SESSION['email'];
// echo $selecteddate;

// Calculate the day of the week (1 for Monday, 7 for Sunday)
$day_of_week = date("N", strtotime($selecteddate));
// echo $day_of_week;


    $bookingID = $_POST['bookingID'];
    $selectedCourt = $_POST['selectedCourt'];
    $searchDate = $_POST['searchDate'];
    $searchTime = $_POST['searchTime'];
    $endTime = $_POST['endTime'];
    // echo $bookingID;
    // echo $selectedCourt;

// Determine the price category based on the day of the week
if ($day_of_week >= 1 && $day_of_week <= 5) {
    // Weekday
    //$price_category = 'weekdayrate';
    $price = "SELECT weekdayrate FROM editpricerate WHERE id=1";
    // echo $price;
    $result = mysqli_query($mysqli, $price);

    if ($result) {
        $price = intval(mysqli_fetch_assoc($result)['weekdayrate'] * $duration);
        $reserve = "INSERT INTO badmintonslots(bookingid,bsid,date,starttime,endtime,isbooked,price,email)VALUES('$bookingID','$selectedCourt','$searchDate','$searchTime','$endTime','1','$price','$email')";
    // echo $reserve;
    mysqli_query($mysqli,$reserve);
        $priceToPass = $price*100;
        echo"<div class='content-box'>";
        echo "<h3 style='color:white;text-align:left;'>Date: $selecteddate</h3>
              <h3 style='color:white;text-align:left;'>Time: $selectedTime - $selectedendTime</h3>
              <h3 style='color:white;text-align:left;'>Court: $courtselect</h3>
              <h5 style='color:white;text-align:left;'>Price: RM" .$price."</h5>";
        echo" <form method='post' action='http://127.0.0.1:4242/fpx.php'>
            <input type='hidden' name='price' value='$priceToPass'/>

              <button class='btn btn-primary w-100 py-3' type='submit' name='bookCourt' value='1'>Make Payment</button>
              </form>
         ";
        //  header("");

    } else {
        echo "Price not found";
    }
} else {
    // Weekend
    //$price_category = 'weekendrate';
    $price = "SELECT weekendrate FROM editpricerate WHERE id=1";
    $result = mysqli_query($mysqli, $price);

    if ($result) {
        $price = intval(mysqli_fetch_assoc($result)['weekendrate'] * $duration);
        $reserve = "INSERT INTO badmintonslots(bookingid,bsid,date,starttime,endtime,isbooked,price,email)VALUES('$bookingID','$selectedCourt','$searchDate','$searchTime','$endTime','1','$price','$email')";
    // echo $reserve;
    mysqli_query($mysqli,$reserve);
        $priceToPass = $price*100;
        echo "<h3 style='color:white;text-align:left;'>Date: $selecteddate</h3>
              <h3 style='color:white;text-align:left;'>Time: $selectedTime - $selectedendTime</h3>
              <h3 style='color:white;text-align:left;'>Court: $courtselect</h3>
              <h5 style='color:white;text-align:left;'> Price: RM".$price."</h5>
              <form method='post' action='http://127.0.0.1:4242/fpx.php'>
              <input type='hidden' name='price' value='$priceToPass'/>

              <button class='btn btn-primary w-100 py-3' type='submit' name='bookCourt' value='1'>Make Payment</button>
              </form>
         
         ";
         header("http://127.0.0.1:4242/fpx.php");
    } else {
        echo "Price not found";
    }
}
echo "</div>";


// Query the database to fetch the price based on the price category


// Close the database connection
//mysqli_stmt_close($stmt);
//mysqli_close($mysqli);
?>


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

