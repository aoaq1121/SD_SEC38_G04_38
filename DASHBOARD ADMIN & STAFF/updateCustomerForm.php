
<!DOCTYPE html>
<html>
<body>
<?php

include 'dbconnect.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
  

    include "processCustomer.php";
$userQry=getCustInfo($id);
echo "<br>no of record:".mysqli_num_rows($userQry);

$customerInfo=mysqli_fetch_assoc($userQry);

$id=$customerInfo['id'];
$name=$customerInfo['name'];
$fullname=$customerInfo['fullname'];
$email=$customerInfo['email'];
$password=$customerInfo['password'];
$gender=$customerInfo['gender'];
$dateOfBirth=$customerInfo['dateOfBirth'];
$phoneNumber=$customerInfo['phoneNumber'];


echo '<form action="processCustomer.php" method="POST">';
echo "<input type='hidden' name='id' value='$id'>";
	echo "<br>Username :<input type='text' name='name' value='$name' readonly>";
	echo "<br>Fullname :<input type='text' name='fullname' value='$fullname'>";
	echo "<br>Email :<input type='email' name='email' value='$email' readonly>";
	echo "<br>Gender :<input type='text' name='gender' value='$gender'>";
	echo "<br>dateOfBirth :<input type='text' name='dateOfBirth' value='$dateOfBirth'>";
	echo "<br>Phone Number :<input type='text' name='phoneNumber' value='$phoneNumber'>";
	echo '<br><input type="submit" name="saveCustomerButton" value="SAVE">';
    echo '<br><input type="submit" name="deleteCustomerButton" value="DELETE">';
echo '</form>';
} else {
    echo "error occured";
}



?>
</body>
</html>