<?php
ob_start();
include "../connect.php";
if(isset($_POST['mua_ngay'])){
    if(!empty($rows)){
        // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
      $stmt_check = $conn->prepare("SELECT * FROM gio_hang WHERE ma_san_pham = ? AND id_user = ?");
      $stmt_check->bind_param("si", $rows[0]['id_cat'], $row_user['id']);
      $stmt_check->execute();
      $result_check = $stmt_check->get_result();

      if ($result_check->num_rows > 0) {
          // Sản phẩm đã có trong giỏ hàng
          echo "<script>alert('Sản phẩm đã có trong giỏ hàng rồi.');</script>";
      } else {
          // Sản phẩm chưa có trong giỏ hàng, thực hiện thêm vào giỏ hàng
          $stmt = $conn->prepare("INSERT INTO gio_hang (ma_san_pham, ten_san_pham, price, anh, id_user) VALUES (?, ?, ?, ?, ?)");
          $stmt->bind_param("ssisi", $rows[0]['id_cat'], $rows[0]['ten_meo'], $rows[0]['price'], $rows[0]['anh'], $row_user['id']);
          
          if ($stmt->execute()) {
              echo "<script>alert('Thêm sản phẩm vào giỏ hàng thành công.');</script>";
          } else {
              echo "<script>alert('Có lỗi khi thêm sản phẩm vào giỏ hàng: " . htmlspecialchars($stmt->error) . "');</script>";
          }
          $stmt->close();
      }
      $stmt_check->close();
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="../images/icon-title.png" type="image/x-icon" />
        <title>Giỏ Hàng</title>
        <link rel="stylesheet" href="../Homes/styleHome.css" />
        <!------------------------------------ Thư viện font chữ ------------------------------------>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lexend+Zetta:wght@100..900&family=Pacifico&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Honk&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&family=Honk&family=Lobster&family=Play:wght@400;700&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Cherry+Bomb+One&family=Honk&family=Lobster&family=Play:wght@400;700&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
        <!------------------------------------ Thư viện icon ------------------------------------>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
        <!------------------------------------ đường dẫn ------------------------------------>
        <script src="../Login/Login.js" defer></script>
        <link rel="stylesheet" href="./Cart.css">
    </head>
    <body>
    <?php include "../view/Header.php"; ?>

    <section id="order-section">
        <div id="order-form">
            <h2>Thông tin đặt hàng</h2>
            <form action="" method="post">
                <div class="form-group">
                    <label for="name">Họ và tên:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="phone">Số điện thoại:</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="address">Địa chỉ giao hàng:</label>
                    <textarea id="address" name="address" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="note">Ghi chú đơn hàng:</label>
                    <textarea id="note" name="note" rows="3"></textarea>
                </div>
                <section id="payment-methods">
                    <h3>Phương thức thanh toán:</h3>
                    <div class="payment-method">
                        <input type="radio" id="cod" name="payment_method" value="COD" required>
                        <label for="cod">
                            <i class="fas fa-truck"></i> Thanh toán khi nhận hàng (COD)
                        </label>
                    </div>
                    <div class="payment-method">
                        <input type="radio" id="momo" name="payment_method" value="MoMo">
                        <label for="momo">
                            <img src="./Images/LogoMoMo.png" width="35px" height="35px" alt=""> MoMo
                        </label>
                    </div>
                    <div class="payment-method">
                        <input type="radio" id="zalopay" name="payment_method" value="ZaloPay">
                        <label for="zalopay">
                            <img src="./Images/zalopay.png" width="54" alt="">ZaloPay
                        </label>
                    </div>
                    <div class="payment-method">
                        <input type="radio" id="qr" name="payment_method" value="QR">
                        <label for="qr">
                            <i class="fas fa-qrcode"></i> QR Code
                        </label>
                    </div>
                    <div class="payment-method">
                        <input type="radio" id="bank-transfer" name="payment_method" value="Bank">
                        <label for="bank-transfer">
                            <i class="fas fa-university"></i> Chuyển khoản ngân hàng
                        </label>
                    </div>
                </section>
                <button class="dat_hang" type="submit" name="btn_dat_hang"  >Đặt hàng</button>
            </form>
        </div>
        <div id="cart-info">
            <?php
                if (isset($_SESSION['username'])) {
                    $username = $_SESSION['username'];
                    $stmt_user = $conn->prepare("SELECT * FROM tai_khoan WHERE username = ?");
                    $stmt_user->bind_param("s", $username);
                    $stmt_user->execute();
                    $result_user = $stmt_user->get_result();
                    if ($result_user->num_rows > 0) {
                        $row_user = $result_user->fetch_assoc();
                        $id_user = $row_user['id'];
                        $stmt_cart = $conn->prepare("SELECT * FROM gio_hang WHERE id_user = ?");
                        $stmt_cart->bind_param("i", $id_user);
                        $stmt_cart->execute();
                        $result_cart = $stmt_cart->get_result();
                        $rows_cart = array();
                        if ($result_cart->num_rows > 0) {
                            while($row_cart = $result_cart->fetch_assoc()){
                                $rows_cart[] = $row_cart;
                            }
                        }
                    }
                }
            ?>
            <h2>Thông tin giỏ hàng</h2>
            
            <div class="cart-items-container">
                <?php
                    $total_price = 0;
                    $all_ma_san_pham="";
                    if(isset($_POST['btn_xoa'])){
                        $ma_san_pham = $_POST['ma_san_pham'];
                        $sql_xoa = "DELETE FROM gio_hang WHERE ma_san_pham = '$ma_san_pham'";
                        $result_xoa = $conn->query($sql_xoa);
                        if($result_xoa){
                            echo "<script>alert('Đã xóa sản phẩm');</script>";
                            // Đảm bảo không có dữ liệu đầu ra trước khi chuyển hướng
                            header("Location: " . $_SERVER['PHP_SELF']);
                            exit();
                        }
                    }
                    foreach($rows_cart as $row_cart){
                        $total_price += $row_cart['price'];
                        $all_ma_san_pham .= $row_cart['ma_san_pham'] .", ";
                ?>
                <div class="cart-item">
                    <div class="cart-item-image" style="background-image: url(<?php echo $row_cart['anh'] ?>);"></div>
                    <div class="cart-item-details">
                        <h3><?php echo $row_cart['ten_san_pham'] ?></h3>
                        <p>Mã sản phẩm: <?php echo $row_cart['ma_san_pham'] ?></p>
                        <p>Giá: <?php echo number_format($row_cart['price'],0,",",".") ?><sup>đ</sup></p>
                        <form action="" method="post">
                            <input type="hidden" name="ma_san_pham" value="<?php echo $row_cart['ma_san_pham']; ?>">
                            <button  class="remove-item" type="submit" name="btn_xoa" >Xóa</button>
                        </form>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
            <div class="total-price">Tổng tiền: <?php echo number_format($total_price,0,",",".") ?></div>      
        </div>
        <div>
        </div>
    </section>
        <?php
            if(isset($_POST['btn_dat_hang'])){
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $total = $total_price;
                $address = $_POST['address'];
                $payment_method = $_POST['payment_method'];
                $note = $_POST['note'];
                if($ma_san_pham != ""){
                    $sql_order = "INSERT INTO don_hang (nguoi_nhan, phone, ma_san_pham, order_date, email, total, shipping_address, payment_method, note) 
                    VALUES (?, ?, ?, NOW(), ?, ?, ?, ?, ?)";
                      $stmt_order = $conn->prepare($sql_order);
                      $stmt_order->bind_param('ssssisss', $name, $phone, $ma_san_pham, $email, $total, $address, $payment_method, $note);
                      $stmt_order->execute();
                      //xóa hết sản phẩm
                      $sql_delete = "DELETE FROM gio_hang WHERE id_user = '$id_user'";
                      $result_delete = $conn->query($sql_delete);
                      
                          echo "<script>alert('Đã đặt hàng thành công');</script>";
                          // Đảm bảo không có dữ liệu đầu ra trước khi chuyển hướng
                          header("Location: " . $_SERVER['PHP_SELF']);
                          exit();
                }else{
                    echo "<script>alert('Bạn chưa có sản phẩm nào');</script>";
                }
                
            }
            
        ?>

        <?php ob_end_flush(); ?>
    <?php include "../view/Footer.php"; ?>
</body>
</html>
