<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "laptrinhweb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $customerId = $_POST['customer_id'];
    // Lấy thông tin khách hàng từ email
    $sql = "SELECT email FROM customers WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $customerId);
    $stmt->execute();
    $result = $stmt->get_result();
    $customer = $result->fetch_assoc();
    $email = $customer['email'];
    // Lấy các đơn hàng của khách hàng từ email
    $sql = "SELECT * FROM don_hang WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $orders = [];
    while ($orderRow = $result->fetch_assoc()) {
        $productCodes = explode(',', $orderRow['ma_san_pham']);
        $products = [];
        foreach ($productCodes as $code) {
            $productSql = "SELECT * FROM all_product_cat WHERE id_cat = ?";
            $productStmt = $conn->prepare($productSql);
            $productStmt->bind_param("s", $code);
            $productStmt->execute();
            $productResult = $productStmt->get_result();
            while ($productRow = $productResult->fetch_assoc()) {
                $products[] = $productRow;
            }
        }
        $orderRow['products'] = $products;
        $orders[] = $orderRow;
    }
    echo json_encode(['orders' => $orders]);
}
$conn->close();
?>
