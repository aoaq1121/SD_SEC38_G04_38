
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
    
   
}
}
?>
