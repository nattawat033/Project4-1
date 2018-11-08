<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "testp";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbName);
mysqli_set_charset($conn,"utf8");



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>