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
    $sql = "SELECT trang_thai FROM don_hang WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $orderId);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $status = $row['trang_thai'];
        $response = array();
        if ($status === 'Đã xác nhận') {
            $response['status'] = 'error';
            $response['message'] = 'Đơn hàng đã xác nhận, không thể xóa.';
        } else {
            $sql = "DELETE FROM don_hang WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $orderId);
            if ($stmt->execute()) {
                $response['status'] = 'success';
                $response['message'] = 'Đơn hàng đã được xóa thành công.';
            } else {
                $response['status'] = 'error';
                $response['message'] = 'Có lỗi xảy ra khi xóa đơn hàng.';
            }
        }
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Không tìm thấy đơn hàng.';
    }
    $stmt->close();
} else {
    $response['status'] = 'error';
    $response['message'] = 'Không tìm thấy ID đơn hàng.';
}
$conn->close();
header('Content-Type: application/json');
echo json_encode($response);
?>
