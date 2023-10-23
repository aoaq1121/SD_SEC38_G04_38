
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

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

         
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
// echo $selecteddate;

// Calculate the day of the week (1 for Monday, 7 for Sunday)
$day_of_week = date("N", strtotime($selecteddate));
// echo $day_of_week;

// Determine the price category based on the day of the week
if ($day_of_week >= 1 && $day_of_week <= 5) {
    // Weekday
    //$price_category = 'weekdayrate';
    $price = "SELECT weekdayrate FROM editpricerate WHERE id=1";
    // echo $price;
    $result = mysqli_query($mysqli, $price);

    if ($result) {
        echo "<h3 style='color:white;text-align:center;'>Date: $selecteddate</h3>
              <h3 style='color:white;text-align:center;'>Time: $selectedTime - $selectedendTime</h3>
              <h3 style='color:white;text-align:center;'>Court: $courtselect</h3>
              <h5 style='color:white;text-align:center;'>Price: RM" . mysqli_fetch_assoc($result)['weekdayrate']*$duration."</h5>
              <form method='post' action=''>
              <button class='btn btn-primary w-100 py-3' type='submit' name='bookCourt' value='1'>Make Payment</button>
              </form>
         ";
    } else {
        echo "Price not found";
    }
} else {
    // Weekend
    //$price_category = 'weekendrate';
    $price = "SELECT weekendrate FROM editpricerate WHERE id=1";
    $result = mysqli_query($mysqli, $price);

    if ($result) {
        echo "<h3 style='color:white;text-align:center;'>Date: $selecteddate</h3>
              <h3 style='color:white;text-align:center;'>Time: $selectedTime - $selectedendTime</h3>
              <h3 style='color:white;text-align:center;'>Court: $courtselect</h3>
              <h5 style='color:white;text-align:center;'> Price: RM" . mysqli_fetch_assoc($result)['weekendrate']*$duration."</h5>
              <form method='post' action=''>
              <button class='btn btn-primary w-100 py-3' type='submit' name='bookCourt' value='1'>Make Payment</button>
              </form>
         
         ";
    } else {
        echo "Price not found";
    }
}


if($_POST['bookCourt']==1){
    $bookingID = $_POST['bookingID'];
    $selectedCourt = $_POST['selectedCourt'];
    $searchDate = $_POST['searchDate'];
    $searchTime = $_POST['searchTime'];
    $endTime = $_POST['endTime'];
    // echo $bookingID;
    // echo $selectedCourt;
    $reserve = "INSERT INTO badmintonslots(bookingid,bsid,date,starttime,endtime,isbooked)VALUES('$bookingID','$selectedCourt','$searchDate','$searchTime','$endTime','1')";
    // echo $reserve;
    mysqli_query($mysqli,$reserve);
}
// Query the database to fetch the price based on the price category


// Close the database connection
mysqli_stmt_close($stmt);
mysqli_close($mysqli);
?>
