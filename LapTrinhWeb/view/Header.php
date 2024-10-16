
<?php
session_start();
?>

   <!------------------------------------ header ------------------------------------>
    <header>
      <a href="../Homes/Home.php" class="logo">
        <img src="../images/logo.png" alt="" />
    </a>
    <div class="menu">
        <li><a href="../Homes/Home.php">Trang chủ</a></li>
        <li>
            <a href="../Product/Product.php">Mèo cưng</a>
        </li>
        <li><a href="../Introduce/Introduce.php">Giới thiệu</a></li>
        <li><a href="../Contact/Contact.php">Liên hệ</a></li>
    </div>
    <div class="other">
        <li class="other1"><input type="text" placeholder="Tìm kiếm" /></li>
        <div class="other23">
          <li class="other2">
            <a onclick="supportlg()"><i class="fas fa-user"></i></a>
            <span id="user-displays" onclick="supportlg()"><?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Đăng nhập'; ?></span>
          </li>
          <li class="other3">
            <?php
            // Kiểm tra xem người dùng đã đăng nhập hay chưa
            $is_logged_in = isset($_SESSION['username']);
            ?>

            <a href="<?php echo $is_logged_in ? '../Cart/Cart.php' : '#'; ?>" onclick="<?php echo !$is_logged_in ? "alert('Hãy đăng nhập trước nhé!!'); return false;" : ''; ?>">
              <i class="fas fa-shopping-cart"></i>
            </a>
          </li>
        </div>
      </div>
    </header>

