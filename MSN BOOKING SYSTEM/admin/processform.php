<?php
	session_start();
    echo $username;

    include("dbconnect.php");

    if(isset($_POST['updateButton'])){
        $username = $_SESSION['username'];
        $type = $_SESSION['type'];
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

        if($type == 'staff'){
            $sql = "UPDATE staff SET fName = '$fName', email = '$email', phoneNumber = '$phoneNumber', dob = '$dob', gender = '$gender', address = '$address', 
            postalcode = '$postalcode', state = '$state', country = '$country', bank = '$bank' WHERE username = '$username'";
        }else if( $type == 'admin'){
            $sql = "UPDATE admin SET fName = '$fName', email = '$email', phoneNumber = '$phoneNumber', gender = '$gender',dob = '$dob', address = '$address', 
            postalcode = '$postalcode', state = '$state', country = '$country', bank = '$bank' WHERE username = '$username'";
            echo $sql;
        }
        mysqli_query($conn,$sql);


    }
    
    if ($conn->query($sql) === TRUE) {
        header("Location: profile.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    ?>


    