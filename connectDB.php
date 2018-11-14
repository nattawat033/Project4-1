<!--  
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "testp";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbName);
mysqli_set_charset($conn,"utf8");



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

  -->



 <?php
//connect to mysql database

$conn = mysqli_connect("localhost", "root", "", "testp") or die("Error " . mysqli_error($conn));
mysqli_set_charset($conn,"utf8");
 

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>



