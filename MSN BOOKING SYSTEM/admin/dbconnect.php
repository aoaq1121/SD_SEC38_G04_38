<?php
    $servername = "localhost"; // Replace with your database server's name
    $username = "root"; // Replace with your MySQL username
    $password = "root"; // Replace with your MySQL password
    $database = "msnbooking"; // Replace with your database name
    
    // Create a database connection
    $conn = new mysqli($servername, $username, $password, $database);
    
    $con=mysqli_connect("localhost","root","root","msnbooking");

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>