<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "laptrinhweb";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Kết nối SQL lỗi " . $conn->connect_error);
}


?>