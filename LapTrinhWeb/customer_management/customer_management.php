<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "laptrinhweb";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM don_hang LEFT JOIN tai_khoan ON don_hang.id_user = tai_khoan.id;";
$result = $conn->query($sql);

$customers = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $customer = $row;
        $orders = [];

        // Truy vấn lấy danh sách đơn hàng của khách hàng
        $orderSql = "SELECT * FROM don_hang WHERE id_user = ?";
        $orderStmt = $conn->prepare($orderSql);
        $orderStmt->bind_param("i", $customer['id_user']);
        $orderStmt->execute();
        $orderResult = $orderStmt->get_result();

        while ($orderRow = $orderResult->fetch_assoc()) {
            $orders[] = $orderRow; // Lưu tất cả đơn hàng của khách hàng
        }

        $customer['orders'] = $orders; // Gán danh sách đơn hàng vào thông tin khách hàng
        $customers[] = $customer; // Thêm vào mảng kết quả
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Khách Hàng</title>
    <link rel="stylesheet" href="customer_management.css">
</head>
<body>
    <header>
        <h1>Quản Lý Khách Hàng</h1>
    </header>
    <main>
        <div id="customer-table-container">
            <table id="customer-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Điện Thoại</th>
                        <th>Địa Chỉ</th>
                        <th>Đơn Hàng</th>
                        <th>Thao Tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($customers as $customer): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($customer['id']); ?></td>
                        <td><?php echo htmlspecialchars($customer['nguoi_nhan']); ?></td>
                        <td><?php echo htmlspecialchars($customer['email']); ?></td>
                        <td><?php echo htmlspecialchars($customer['phone']); ?></td>
                        <td><?php echo htmlspecialchars($customer['shipping_address']); ?></td>
                        <td>
                            <?php if (!empty($customer['orders'])): ?>
                                <button class="details-btn" data-id="<?php echo htmlspecialchars($customer['id']); ?>">Chi Tiết</button>
                            <?php else: ?>
                                Không có đơn hàng
                            <?php endif; ?>
                        </td>
                        <td class="action-cell">
                            <button class="edit-btn" data-id="<?php echo htmlspecialchars($customer['id']); ?>">Sửa</button>
                            <button class="delete-btn" data-id="<?php echo htmlspecialchars($customer['id']); ?>">Xóa</button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div id="customer-form-container">
            <h2>Thêm Khách Hàng</h2>
            <form id="customer-form">
                <input type="hidden" id="customer-id">
                <label for="name">Tên:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="phone">Điện Thoại:</label>
                <input type="tel" id="phone" name="phone" required>
                <label for="address">Địa Chỉ:</label>
                <input type="text" id="address" name="address" required>
                <button type="submit" id="submit-btn">Lưu</button>
            </form>
        </div>
    </main>
    <div id="order-modal" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <div id="order-details"></div>
        </div>
    </div>
    <script src="customer_management.js"></script>
</body>
</html>
