<?php
    $servername = "localhost"; // Replace with your database server's name
    $username = "root"; // Replace with your MySQL username
    $password = "root"; // Replace with your MySQL password
    $database = "msnbooking"; // Replace with your database name
    
    // Create a database connection
    $con = new mysqli($servername, $username, $password, $database);
    
    $conn=mysqli_connect("localhost","root","root","msnbooking");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>