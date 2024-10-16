<?php
header('Content-Type: application/json');
$input = json_decode(file_get_contents('php://input'), true);
if (json_last_error() !== JSON_ERROR_NONE) {
    echo json_encode(['status' => 'error', 'message' => 'Dữ liệu không hợp lệ']);
    exit;
}
include "../connect.php";

$name = $conn->real_escape_string($input['name']);
$phone = $conn->real_escape_string($input['phone']);
$ma_san_pham = "M00000";
$email = $conn->real_escape_string($input['email']);
$total_price = 1000000;
$address = $conn->real_escape_string($input['address']);
$payment_method = $conn->real_escape_string($input['payment_method']);
$note = $conn->real_escape_string($input['note']);
// Chèn đơn hàng vào cơ sở dữ liệu
$sql_order = "INSERT INTO don_hang (nguoi_nhan, phone, ma_san_pham, order_date, email, total, shipping_address, payment_method, note) 
              VALUES (?, ?, ?, NOW(), ?, ?, ?, ?, ?)";
$stmt_order = $conn->prepare($sql_order);
$stmt_order->bind_param('ssssisss', $name, $phone,$ma_san_pham , $email, $total_price, $address, $payment_method, $note);
$stmt_order->execute();
$stmt_order->close();
//$stmt_order_items->close();
$conn->close();
?>
