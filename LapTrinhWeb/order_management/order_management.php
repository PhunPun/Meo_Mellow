<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "laptrinhweb";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Xử lý cập nhật trạng thái khi form được gửi
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['status']) && isset($_POST['order_id'])) {
    $status = $conn->real_escape_string($_POST['status']);
    $order_id = $conn->real_escape_string($_POST['order_id']);
    $updateSql = "UPDATE don_hang SET trang_thai = '$status' WHERE id = '$order_id'";
    $conn->query($updateSql);
}

$sql = "SELECT * FROM don_hang";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Đơn Hàng</title>
    <link rel="stylesheet" href="./order_management.css">
</head>
<body>
    <header>
        <h1>Quản Lý Đơn Hàng</h1>
    </header>
    <main>
        <div id="order-management">
            <table id="order-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Product Code</th>
                        <th>Order Date</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Total</th>
                        <th>Shipping Address</th>
                        <th>Payment Method</th>
                        <th>Note</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>{$row['id']}</td>
                                    <td>{$row['nguoi_nhan']}</td>
                                    <td>{$row['phone']}</td>
                                    <td>{$row['ma_san_pham']}</td>
                                    <td>{$row['order_date']}</td>
                                    <td>{$row['email']}</td>
                                    <td>
                                        <form action='' method='post'>
                                            <input type='hidden' name='order_id' value='{$row['id']}'>
                                            <select name='status' onchange='this.form.submit()'>
                                                <option value='Đang chờ xác nhận' " . ($row['trang_thai'] == 'Đang chờ xác nhận' ? 'selected' : '') . ">Đang chờ xác nhận</option>
                                                <option value='Đã xác nhận' " . ($row['trang_thai'] == 'Đã xác nhận' ? 'selected' : '') . ">Đã xác nhận</option>
                                                <option value='Đang chờ vận chuyển' " . ($row['trang_thai'] == 'Đang chờ vận chuyển' ? 'selected' : '') . ">Đang chờ vận chuyển</option>
                                                <option value='Đang vận chuyển' " . ($row['trang_thai'] == 'Đang vận chuyển' ? 'selected' : '') . ">Đang vận chuyển</option>
                                                <option value='Đã giao hàng' " . ($row['trang_thai'] == 'Đã giao hàng' ? 'selected' : '') . ">Đã giao hàng</option>
                                                <option value='Đã hủy' " . ($row['trang_thai'] == 'Đã hủy' ? 'selected' : '') . ">Đã hủy</option>
                                            </select>
                                        </form>
                                    </td>
                                    <td>{$row['total']}</td>
                                    <td>{$row['shipping_address']}</td>
                                    <td>{$row['payment_method']}</td>
                                    <td>{$row['note']}</td>
                                    <td class='action-cell'>
                                        <button class='detail-btn' data-id='{$row['id']}'>Detail</button>
                                        <button class='delete-btn' data-id='{$row['id']}'>Delete</button>
                                    </td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='12'>No orders found</td></tr>";
                    }
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </main>
    <script src="./order_management.js"></script>
</body>
</html>
