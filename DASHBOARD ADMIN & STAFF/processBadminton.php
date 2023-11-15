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
   
	$timeid = $_POST['timeid'];
    $timevalue = $_POST['timevalue'];
   

	$timesql = "UPDATE badmintontimeoption SET timevalue = '$timevalue' WHERE timeid = '$timeid'";
	echo $timesql;
     $qry = mysqli_query($con,$timesql );
     return $qry;
   
   
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
    
	$durationid = $_POST['durationid'];
    $durationvalue = $_POST['durationvalue'];
   

	$durationsql = "UPDATE badmintondurationoption SET durationvalue = '$durationvalue' WHERE durationid = '$durationid'";
	echo $durationsql;
     $query = mysqli_query($con,$durationsql );
     return $query;
  
   
}
}
?>