<?php
// Connect to the database
$con = mysqli_connect("localhost", "root", "root", "msnbooking");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if (isset($_GET['id']) && isset($_GET['type'])) {
    $id = $_GET['id'];
    $optionType = $_GET['type'];

    if ($optionType === 'time') {
        // Delete a time option
        // ...
        $query = "DELETE FROM badmintontimeoption WHERE timeid = '$id'";
        $result = mysqli_query($con, $query);

        if ($result) {
            // Deletion successful, redirect back to stafflist.php
            header("Location: updatebadmintonavailability.php");
            exit();
        } else {
            // Deletion failed
            echo "Error: " . mysqli_error($con);
        }

    } elseif ($optionType === 'duration') {
        // Delete a duration option
        // ...
        $sqlquery = "DELETE FROM badmintondurationoption WHERE durationid = '$id'";
        $result = mysqli_query($con, $sqlquery);

        if ($result) {
            // Deletion successful, redirect back to stafflist.php
            header("Location: updatebadmintonavailability.php");
            exit();
        } else {
            // Deletion failed
            echo "Error: " . mysqli_error($con);
        }
    }
    // Perform the deletion
    
} else {
    // Invalid or missing staff ID
    echo "Invalid Id";
}

// Close the database connection
mysqli_close($con);
?>

