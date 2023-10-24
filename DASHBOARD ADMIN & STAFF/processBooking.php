<?php

// Connect to the database
$con = mysqli_connect("localhost", "root", "root", "msnbooking");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if (isset($_GET['id'])) {
    $bookingid = $_GET['id'];

    // Perform the deletion
    $query = "DELETE FROM badmintonslots WHERE bookingid = '$bookingid'";
    $result = mysqli_query($con, $query);

    if ($result) {
        // Deletion successful, redirect back to bookingList.php
        header("Location: bookingList.php");
        exit();
    } else {
        // Deletion failed
        echo "Error: " . mysqli_error($con);
    }
} else {
    // Invalid or missing booking ID
    echo "Invalid Booking";
}

// Close the database connection
mysqli_close($con);

?>