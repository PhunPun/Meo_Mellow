<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_db"; // tạo database mới tên user_db có users nha

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
