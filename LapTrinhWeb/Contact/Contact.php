<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="../images/icon-title.png" type="image/x-icon" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Liên Hệ</title>
  <link rel="stylesheet" href="../Homes/styleHome.css" />
  <link rel="stylesheet" href="./styleContact.css" />
  <script src="./Contact.js" defer></script>
  <!------------------------------------ Thư viện icon ------------------------------------>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>
  <?php
  include "../view/Header.php";
  ?>
  <div class="space"></div>
  <div class="design">
    <h1>
      <img src="../Contact/images/imcontact.gif" alt="" />
    </h1>
  </div>
  <!------------------------------------ footer ------------------------------------>
  <footer>
    <div class="footer-column">
      <p><i class="fas fa-user"></i> Phan Văn Huy</p>
      <a href="mailto:2251120293@ut.edu.vn"><i class="fas fa-envelope"></i> Email: 2251120293@ut.edu.vn</a><br />
      <a href="tel:0978410127"><i class="fas fa-phone"></i> Phone: 0978410127</a><br />
      <a href="https://www.facebook.com/ZawnHuy/"><i class="fab fa-facebook"></i> Facebook</a>
      <br />
      <br />
      <p><i class="fas fa-user"></i> Nguyễn Như Phương</p>
      <a href="mailto:2251120313@ut.edu.vn"><i class="fas fa-envelope"></i> Email: 2251120313@ut.edu.vn</a><br />
      <a href="tel:0869801744"><i class="fas fa-phone"></i> Phone: 0869801744</a><br />
      <a href="https://www.facebook.com/nguyen.np.148"><i class="fab fa-facebook"></i> Facebook</a>
    </div>
    <div class="home-footer-colum-section">
      <h2 class="fonrt-Roboto_Slab">Chính sách</h2>
      <ul>
        <li>
          <a href="#" class="fonrt-Roboto_Slab">Hướng dẫn mua hàng</a>
        </li>
        <li>
          <a
            href="../WarrantyPolicy/Warranty_Policy.php"
            target="_parent"
            class="fonrt-Roboto_Slab">Chính sách bảo hành</a>
        </li>
        <li>
          <a href="#" class="fonrt-Roboto_Slab">Khách hàng thân thiết</a>
        </li>
      </ul>
      <a href="../Homes/Home.php"></a>

      <button onclick="support()">Yêu cầu hỗ trợ</button>
    </div>
    </div>
    <div class="footer-column">
      <p><i class="fas fa-map-marker-alt"></i> Địa chỉ của chúng tôi</p>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.2946840273235!2d106.61380550929957!3d10.865176589244324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752a10b0f0554f%3A0x769800e8967d6703!2zNzAgxJAuIFTDtCBLw70sIFTDom4gQ2jDoW5oIEhp4buHcCwgUXXhuq1uIDEyLCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1722352091603!5m2!1svi!2s"
        width="400"
        height="300"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </footer>
</body>

</html>