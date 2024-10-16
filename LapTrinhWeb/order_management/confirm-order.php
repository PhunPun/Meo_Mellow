<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "laptrinhweb";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_GET['id'])) {
    $orderId = $_GET['id'];
    $sql = "UPDATE don_hang SET trang_thai = 'Đã xác nhận' WHERE id = $orderId";
    if ($conn->query($sql) === TRUE) {
        echo "Order confirmed successfully!";
        echo "<script>window.location.reload();</script>";
    } else {
        echo "Error updating order: " . $conn->error;
    }
}
$conn->close();
?>
