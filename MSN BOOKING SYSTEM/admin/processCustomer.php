<?php
    function getCustInfo($id){
        $con=mysqli_connect("localhost", "root", "root", "msnbooking");
     if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
     }
    else{
     $sqlStr = "select * from users where id='".$id."'";
     $qry = mysqli_query($con,$sqlStr );
     return $qry;
    }
    }

    function updateCustomer(){
        $con=mysqli_connect("localhost", "root", "root", "msnbooking");
     if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
     }
     else{
        //echo "HELLO";
        $id = $_POST['id'];
         $name=$_POST['name'];
         $fullname=$_POST['fullname'];
         $email=$_POST['email'];
         //$password=$_POST['password'];
         $gender=$_POST['gender'];
         $dateOfBirth=$_POST['dateOfBirth'];
         $phoneNumber=$_POST['phoneNumber'];
         //print_r($_POST);
         $sqlStr="UPDATE users SET name='".$name."',fullname='".$fullname."',email='".$email."',gender='".$gender."',
         dateOfBirth='".$dateOfBirth."',phoneNumber='".$phoneNumber."' 
         WHERE id='".$id."'";
         //echo $sqlStr;
         $qry = mysqli_query($con,$sqlStr );
         return $qry;
     }
     
    }


    function deleteCustomer(){
        $con=mysqli_connect("localhost", "root", "root", "msnbooking");
        if(!$con){
            die("Connection error").mysqli_connect_error();
        }
        echo "To delete".$_POST['customerToDetele'];
        $sql = "delete from users where id = '".$_POST['id']."'";
        echo "<br>customerToDelete";
        mysqli_query($con,$sql);
    }

    if(isSet($_POST['saveCustomerButton'])){
        updateCustomer();
        header('Location:testdashboard.php');
    }

    else{
        if(isset($_POST['deleteCustomerButton'])){
            deleteCustomer();
            header('Location:testdashboard.php');
        }
    }
?>