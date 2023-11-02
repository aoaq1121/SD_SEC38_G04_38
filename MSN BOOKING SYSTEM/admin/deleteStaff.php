<?php
// Connect to the database
$con = mysqli_connect("localhost", "root", "root", "msnbooking");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if (isset($_GET['id'])) {
    $username = $_GET['id'];

    // Perform the deletion
    $query = "DELETE FROM staff WHERE username = '$username'";
    $result = mysqli_query($con, $query);

    if ($result) {
        // Deletion successful, redirect back to stafflist.php
        header("Location: stafflist.php");
        exit();
    } else {
        // Deletion failed
        echo "Error: " . mysqli_error($con);
    }
} else {
    // Invalid or missing staff ID
    echo "Invalid staff Username";
}

// Close the database connection
mysqli_close($con);
?>
