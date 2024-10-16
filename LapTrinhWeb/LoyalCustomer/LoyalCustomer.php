<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../images/icon-title.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khách Hàng Thân Thiết</title>
    <link rel="stylesheet" href="./LoyalCustomer.css">
    <script src="./LoyalCustomer.js" defer ></script>
    <link rel="stylesheet" href="../Homes/styleHome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
     <!------------------------------------ header ------------------------------------>
     <?php
        include "../view/Header.php";
     ?>
       <!------------------------------------ Khách hàng thân thiết ------------------------------------>
    <h1>Chương Trình Khách Hàng Thân Thiết</h1>
    <section class="loyalty-info">
        <h2><i class="fas fa-gift"></i> Lợi Ích Khi Trở Thành Khách Hàng Thân Thiết</h2>
        <ul>
            <li><i class="fas fa-star"></i> Nhận ưu đãi đặc biệt khi mua hàng.</li>
            <li><i class="fas fa-calendar-check"></i> Tham gia các sự kiện dành riêng cho khách hàng thân thiết.</li>
            <li><i class="fas fa-coins"></i> Tích điểm và đổi quà.</li>
            <li><i class="fas fa-bell"></i> Nhận thông tin sớm về các sản phẩm mới.</li>
            <li><i class="fas fa-percentage"></i> Được giảm giá đặc biệt trong các dịp lễ.</li>
            <li><i class="fas fa-thumbs-up"></i> Ưu tiên trong dịch vụ hỗ trợ khách hàng.</li>
        </ul>
    </section>
    <section class="loyalty-steps">
        <h2><i class="fas fa-clipboard-list"></i> Các Bước Để Tham Gia</h2>
        <ol>
            <li><i class="fas fa-user-check"></i> Đăng ký tài khoản trên trang web của chúng tôi.</li>
            <li><i class="fas fa-shopping-cart"></i> Mua sắm và tích điểm cho mỗi giao dịch.</li>
            <li><i class="fas fa-gift"></i> Đổi điểm tích lũy để nhận các phần thưởng hấp dẫn.</li>
            <li><i class="fas fa-trophy"></i> Tham gia các sự kiện đặc biệt dành cho khách hàng thân thiết.</li>
        </ol>
    </section>
    <section class="loyalty-form">
        <h2><i class="fas fa-user-plus"></i> Đăng Ký Tham Gia</h2>
        <form id="loyalty-form">
            <div class="input-group">
                <label for="name"><i class="fas fa-user"></i> Họ và Tên:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="input-group">
                <label for="email"><i class="fas fa-envelope"></i> Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="phone"><i class="fas fa-phone-alt"></i> Số điện thoại:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <button type="submit"><i class="fas fa-paper-plane"></i> Đăng Ký</button>
        </form>
        <p id="response"></p>
    </section> 
    <!------------------------------------ phần liên hệ ------------------------------------>
    <div class="right-contact">
      <div class="right-contact-over">
          <img src="../images/gif-meo-right.gif" alt="gif-meo-right">
          <div class="right-contact-main-over">
              <div class="right-contact-main">
                  <div class="right-email">
                      <div class="right-text-none-email">
                          <div class="text-right-ehz"><a href="mailto:2251120313@ut.edu.vn">Email</a></div>
                      </div>
                      <img src="../images/icon-right-email.png" alt="icon-right-email">
                  </div>
                  <div class="right-hotline">
                      <div class="right-text-none-hotline">
                          <div class="text-right-ehz"><a href="https://zalo.me/0869801744">Hotline</a></div>
                      </div>
                      <img src="../images/icon-right-hotline.png" alt="icon-right-hotline">
                  </div>
                  <div class="right-zalo">
                      <div class="right-text-none-zalo">
                          <div class="text-right-ehz"><a href="https://zalo.me/0869801744">Zalo</a></div>
                      </div>
                      <img src="../images/icon-right-zalo.png" alt="icon-right-zalo">
                  </div>
              </div>
          </div>
      </div>
  </div>   
    <!------------------------------------ footer ------------------------------------>
    <?php
        include "../view/Footer.php";
    
    ?>
      <script src="../Homes/Home.js"></script>
</body>
</html>