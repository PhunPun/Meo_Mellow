
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../images/icon-title.png" type="image/x-icon" />
    <title>Chính Sách Bảo Hành</title>
    <link rel="stylesheet" href="../Homes/styleHome.css" />
    <!------------------------------------ Thư viện font chữ ------------------------------------>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lexend+Zetta:wght@100..900&family=Pacifico&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap"
      rel="stylesheet"
    />
    <!------------------------------------ Thư viện icon ------------------------------------>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
   <link rel="stylesheet" href="../WarrantyPolicy/stylePolicy.css">
   <link rel="stylesheet" href="../Product/Product.js">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <script src="../WarrantyPolicy/Policy.js" defer></script>
   <script src="../Login/Login.js" defer></script>
  </head>

<body>
    <!------------------------------------ header ------------------------------------>
    <?php
      include "../view/Header.php";
    ?>

    <!------------------------------------ chính sách bảo hành ------------------------------------>
    <section class="section-main">
      <div class="space"></div>
      <div class="container">
        <h1>Chính Sách Bảo Hành Khi Mua Mèo</h1>
        <main>
            <section class="policy">
                <h2><i class="fas fa-clock"></i> Thời Gian Bảo Hành</h2>
                <p>Thông thường, thời gian bảo hành kéo dài từ 7 đến 30 ngày kể từ ngày mua. Trong khoảng thời gian này, nếu mèo gặp bất kỳ vấn đề sức khỏe nào không do người mua gây ra, người bán sẽ có trách nhiệm giải quyết.</p>
            </section>
            <section class="policy">
                <h2><i class="fas fa-stethoscope"></i> Kiểm Tra Sức Khỏe</h2>
                <p>Trước khi giao mèo cho người mua, mèo phải được kiểm tra sức khỏe bởi bác sĩ thú y. Bản sao giấy kiểm tra sức khỏe và lịch tiêm phòng sẽ được cung cấp cho người mua để đảm bảo mèo không mắc các bệnh truyền nhiễm hoặc di truyền.</p>
            </section>
            <section class="policy">
                <h2><i class="fas fa-shield-alt"></i> Điều Kiện Bảo Hành</h2>
                <p>Chính sách bảo hành chỉ có hiệu lực khi mèo được nuôi dưỡng và chăm sóc đúng cách theo hướng dẫn của người bán. Người mua phải cung cấp bằng chứng về việc chăm sóc này nếu có yêu cầu bảo hành.</p>
            </section>
            <section class="policy">
                <h2><i class="fas fa-map-marker-alt"></i> Phạm Vi Bảo Hành</h2>
                <p>Chính sách bảo hành thường bao gồm các bệnh di truyền và truyền nhiễm. Tuy nhiên, nó không bao gồm các vấn đề do tai nạn, chấn thương hoặc chăm sóc không đúng cách gây ra.</p>
            </section>
            <section class="policy">
                <h2><i class="fas fa-gift"></i> Quyền Lợi Khi Yêu Cầu Bảo Hành</h2>
                <p>Nếu mèo gặp vấn đề sức khỏe trong thời gian bảo hành, người mua có thể lựa chọn giữa việc đổi mèo mới, hoàn tiền hoặc được hỗ trợ chi phí điều trị thú y.</p>
            </section>
            <section class="policy">
                <h2><i class="fas fa-phone-alt"></i> Liên Hệ Bảo Hành</h2>
                <p>Người mua cần giữ lại tất cả giấy tờ liên quan và liên hệ với người bán ngay khi phát hiện vấn đề sức khỏe của mèo để được hỗ trợ kịp thời.</p>
            </section>
        </main>
    </div>
    
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
    </section>
    <!------------------------------------ footer ------------------------------------>
    <?php
      include "../view/Footer.php";
    ?>
</body>
</html>