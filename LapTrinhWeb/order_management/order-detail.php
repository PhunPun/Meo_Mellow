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
    $sql = "SELECT * FROM don_hang WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $orderId);
    $stmt->execute();
    $orderResult = $stmt->get_result();
    if ($orderResult->num_rows > 0) {
        $order = $orderResult->fetch_assoc();
        $productCodes = explode(', ', $order['ma_san_pham']);
        $products = [];
        foreach ($productCodes as $productCode) {
            $sql = "SELECT * FROM all_product_cat WHERE id_cat = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $productCode);
            $stmt->execute();
            $productResult = $stmt->get_result();

            if ($productResult->num_rows > 0) {
                $products[] = $productResult->fetch_assoc();
            }
        }
    } else {
        $order = null;
        $products = [];
    }
    $stmt->close();
} else {
    echo "ID đơn hàng không được cung cấp.";
    exit;
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Đơn Hàng</title>
    <link rel="stylesheet" href="./order-detail.css">
</head>
<body>
    <header>
        <h1>Chi Tiết Đơn Hàng</h1>
    </header>
    <main>
        <div id="order-detail">
            <div class="order-info">
                <h2>Thông Tin Đơn Hàng</h2>
                <?php if ($order): ?>
                    <p><strong>ID Đơn Hàng:</strong> <?php echo htmlspecialchars($order['id']); ?></p>
                    <p><strong>Người Nhận:</strong> <?php echo htmlspecialchars($order['nguoi_nhan']); ?></p>
                    <p><strong>Điện Thoại:</strong> <?php echo htmlspecialchars($order['phone']); ?></p>
                    <p><strong>Email:</strong> <?php echo htmlspecialchars($order['email']); ?></p>
                    <p><strong>Ngày Đặt:</strong> <?php echo htmlspecialchars($order['order_date']); ?></p>
                    <p><strong>Địa Chỉ Giao Hàng:</strong> <?php echo htmlspecialchars($order['shipping_address']); ?></p>
                    <p><strong>Phương Thức Thanh Toán:</strong> <?php echo htmlspecialchars($order['payment_method']); ?></p>
                    <p><strong>Ghi Chú:</strong> <?php echo htmlspecialchars($order['note']); ?></p>
                    <p><strong>Trạng Thái:</strong> <?php echo htmlspecialchars($order['trang_thai']); ?></p>
                    <p><strong>Tổng Tiền:</strong> <?php echo htmlspecialchars($order['total']); ?> VND</p>
                <?php else: ?>
                    <p>Không tìm thấy thông tin đơn hàng với ID: <?php echo htmlspecialchars($orderId); ?></p>
                <?php endif; ?>
            </div>

            <div class="product-info">
                <?php if ($products): ?>
                    <h2>Thông Tin Sản Phẩm</h2>
                    <?php foreach ($products as $product): ?>
                        <div class="product-detail">
                            <p><strong>Tên Mèo:</strong> <?php echo htmlspecialchars($product['ten_meo']); ?></p>
                            <p><strong>Giá:</strong> <?php echo htmlspecialchars($product['price']); ?> VND</p>
                            <p><strong>Tuổi:</strong> <?php echo htmlspecialchars($product['tuoi']); ?></p>
                            <p><strong>Cân Nặng:</strong> <?php echo htmlspecialchars($product['can_nang']); ?> kg</p>
                            <p><strong>Giới Tính:</strong> <?php echo htmlspecialchars($product['sex'] == 1 ? 'Đực' : 'Cái'); ?></p>
                            <p><strong>Nguồn Gốc:</strong> <?php echo htmlspecialchars($product['nguon_goc']); ?></p>
                            <p><strong>Vắc Xin 4 Bệnh:</strong> <?php echo htmlspecialchars($product['vaccin_4_benh']); ?></p>
                            <p><strong>Vắc Xin Dại:</strong> <?php echo htmlspecialchars($product['vaccin_dai']); ?></p>
                            <p><strong>Vắc Xin Phục Mạc:</strong> <?php echo htmlspecialchars($product['vaccin_phuc_mac']); ?></p>
                            <p><strong>Tay Giun:</strong> <?php echo htmlspecialchars($product['tay_giun']); ?></p>
                            <img src="<?php echo htmlspecialchars($product['anh']); ?>" alt="<?php echo htmlspecialchars($product['ten_meo']); ?>">
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>Không tìm thấy thông tin sản phẩm với mã: <?php echo htmlspecialchars(implode(', ', $productCodes)); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </main>
</body>
</html>

