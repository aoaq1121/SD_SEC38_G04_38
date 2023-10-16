
<?php
if(isSet($_POST['updateStaffButton'])){
    updateStaff();
    header('Location:staffList.php');
}

function getStaffInfo($id){
    $con=mysqli_connect("localhost", "root", "root", "msnbooking");
 if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
else{
 $sqlStr = "select * from staff where username='".$id."'";
 $qry = mysqli_query($con,$sqlStr );
 return $qry;
}
}
function updateStaff(){
    $con=mysqli_connect("localhost", "root", "root", "msnbooking");
 if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 else{
	
    // Retrieve and sanitize the form data
    //$id = $_GET['id']; // Get the ID from the URL parameter
	$username = $_POST['id'];
    $fName = $_POST['fName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $postalcode = $_POST['postalcode'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $bank = $_POST['bank'];

	$staffsql = "UPDATE staff SET fName = '$fName', email = '$email', phoneNumber = '$phoneNumber', dob = '$dob', gender = '$gender', address = '$address', 
            postalcode = '$postalcode', state = '$state', country = '$country', bank = '$bank' WHERE username='$username'" ;
	echo $staffsql;
     $qry = mysqli_query($con,$staffsql );
     return $qry;
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
