<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "laptrinhweb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Lấy dữ liệu từ form đặt hàng
$email = $_POST['email'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$products = $_POST['products'];
$total = $_POST['total'];
$payment_method = $_POST['payment_method'];
$note = $_POST['note'];
// Kiểm tra và thêm khách hàng vào bảng `customers` nếu chưa tồn tại
$checkCustomerSql = "SELECT id FROM customers WHERE email = ?";
$stmt = $conn->prepare($checkCustomerSql);
if ($stmt === false) {
    die("Prepare failed: " . $conn->error);
}
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows === 0) {
    // Thêm khách hàng
    $insertCustomerSql = "INSERT INTO customers (name, email, phone, address) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($insertCustomerSql);
    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }
    $stmt->bind_param("ssss", $name, $email, $phone, $address);
    if ($stmt->execute() === false) {
        die("Execute failed: " . $stmt->error);
    }
}
// Thêm đơn hàng vào bảng `don_hang`
$insertOrderSql = "INSERT INTO don_hang (nguoi_nhan, phone, email, ma_san_pham, order_date, total, shipping_address, payment_method, note, trang_thai) VALUES (?, ?, ?, ?, NOW(), ?, ?, ?, ?, 'Đang chờ xác nhận')";
$stmt = $conn->prepare($insertOrderSql);
if ($stmt === false) {
    die("Prepare failed: " . $conn->error);
}
$stmt->bind_param("ssssissss", $name, $phone, $email, $products, $total, $address, $payment_method, $note);
if ($stmt->execute() === false) {
    die("Execute failed: " . $stmt->error);
}
echo "Order placed successfully.";
$conn->close();
?>
