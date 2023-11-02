<?php
if(isSet($_POST['updateTimeButton'])){
    updateBadmintonTime();
    header('Location:updatebadmintonavailability.php');
}
else if(isSet($_POST['updateDurationButton'])){
    updateBadmintonDuration();
    header('Location:updatebadmintonavailability.php');
}
function updateBadmintonTime(){
    $con=mysqli_connect("localhost", "root", "root", "msnbooking");
 if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 else{
	
    // Retrieve and sanitize the form data
    //$id = $_GET['id']; // Get the ID from the URL parameter
	$timeid = $_POST['timeid'];
    $timevalue = $_POST['timevalue'];
   

	$timesql = "UPDATE badmintontimeoption SET timevalue = '$timevalue' WHERE timeid = '$timeid'";
	echo $timesql;
     $qry = mysqli_query($con,$timesql );
     return $qry;
    // Perform the database update here (you should have a database connection)
    // Use prepared statements to prevent SQL injection

    // Redirect to stafflist.php after updating
    //return $staffsql;
   
}
}
function updateBadmintonDuration(){
    $con=mysqli_connect("localhost", "root", "root", "msnbooking");
 if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 else{
	
    // Retrieve and sanitize the form data
    //$id = $_GET['id']; // Get the ID from the URL parameter
	$durationid = $_POST['durationid'];
    $durationvalue = $_POST['durationvalue'];
   

	$durationsql = "UPDATE badmintondurationoption SET durationvalue = '$durationvalue' WHERE durationid = '$durationid'";
	echo $durationsql;
     $query = mysqli_query($con,$durationsql );
     return $query;
    // Perform the database update here (you should have a database connection)
    // Use prepared statements to prevent SQL injection

    // Redirect to stafflist.php after updating
    //return $staffsql;
   
}
}

// Fetch the staff details based on the 'id' parameter in the URL and populate the form
//if (isset($_GET['id'])) {
    //$id = $_GET['id'];
    // Fetch the staff details from the database using the $id
    // Populate the form fields with the fetched data
//} else {
    // Handle the case where 'id' is not provided in the URL
//}
?>