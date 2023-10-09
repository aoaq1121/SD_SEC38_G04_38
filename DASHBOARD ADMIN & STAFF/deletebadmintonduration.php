<?php
// Connect to the database
$con = mysqli_connect("localhost", "root", "root", "msnbooking");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if (isset($_GET['id'])) {
    $durationid = $_GET['id'];

    // Perform the deletion
    $sqlquery = "DELETE FROM badmintondurationoption WHERE durationid = '$durationid'";
    $resultsql = mysqli_query($con, $sqlquery);

    if ($resultsql) {
        // Deletion successful, redirect back to stafflist.php
        header("Location: updatebadmintonavailability.php");
        exit();
    } else {
        // Deletion failed
        echo "Error: " . mysqli_error($con);
    }
} else {
    // Invalid or missing staff ID
    echo "Invalid Duration Id";
}

// Close the database connection
mysqli_close($con);
?>