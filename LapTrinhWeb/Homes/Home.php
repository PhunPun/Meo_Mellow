<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../images/icon-title.png" type="image/x-icon" />
    <title>Trang chủ</title>
    <link rel="stylesheet" href="../Homes/styleHome.css" />
    <!------------------------------------ Thư viện font chữ ------------------------------------>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Zetta:wght@100..900&family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Honk&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&family=Honk&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&family=Honk&family=Lobster&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&family=Honk&family=Lobster&family=Play:wght@400;700&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Cherry+Bomb+One&family=Honk&family=Lobster&family=Play:wght@400;700&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <!------------------------------------ Thư viện icon ------------------------------------>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <!------------------------------------ đường dẫn ------------------------------------>
    <script src="../Login/Login.js" defer></script></script>
  </head>

  <body>
    <!------------------------------------ header ------------------------------------>
    <?php
        include "../view/Header.php";
    ?>
    <!------------------------------------ section ------------------------------------>
    <section>
      <div class="mainMeo">
        <img src="./images/mainMeo.jpg" alt="Mèoooooooo" />
        <h2>Mèo Mellow</h2>
        <p>Những người bạn mèo đáng yêu</p>
      </div>
      <!------------------------------------ các bé mèo khác ------------------------------------>
      <div class="view-see-other-text">Khám phá ngay:</div>
      <div class="view-see-other-container">
        <div class="view-other-see-container">
          <div class="view-see-other-over">
            <?php
              include "../connect.php";
              $sql = "SELECT ten_meo, anh, chung_loai FROM all_product_cat WHERE CAST(SUBSTRING(id_cat,2) AS UNSIGNED) % 1000 = 0";
              $result = $conn->query($sql);
              $rows = array();
              if($result && $result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                  $rows[] = $row;
                }
              }
            ?>
            <?php
              foreach($rows as $row){
                echo  '<div class="view-see-other-img" style="background-image: url('.$row['anh'].');">';
                echo    '<a href="../KindOf/KindOf.php?type='.$row['chung_loai'].'"><p>';
                    if($row['chung_loai'] == 'muop'){
                      echo  'Mèo Mướp';
                    }elseif($row['chung_loai'] == 'vang'){
                      echo  'Mèo Vàng';
                    }elseif($row['chung_loai']== 'tai_cup'){
                      echo  'Mèo Tai Cụp';
                    }else{
                      echo  'Mèo '.$row['chung_loai'];
                    }
                echo  '</p></a>';
                echo  '</div>';
              }
            ?>

           
          </div>
            <button class="view-see-other-arrows-prev" onclick="seeOtherPrev()"><i class="fa-solid fa-circle-chevron-left"></i></button>
            <button class="view-see-other-arrows-next" onclick="seeOtherNext()"><i class="fa-solid fa-circle-chevron-right"></i></button>
        </div>
      </div>
      <!---------------------------------------------about---------------------------------->
      <div class="about">
        <div class="about-info">
          <div>
            <h2 class="fonrt-Roboto_Slab">Giới thiệu</h2>
            <p class="fonrt-Roboto_Slab">
              <b>Mèo Mellow</b> được xây dựng nhằm cung cấp đến những khách hàng
              yêu thích mèo một loạt các lựa chọn phong phú, từ những giống mèo
              thuần chủng đến những giống lai độc đáo, đáp ứng nhu cầu và sở
              thích của mọi khách hàng.
            </p>
            <p class="fonrt-Roboto_Slab">
              Trở thành điểm đến lý tưởng để tìm kiếm một người bạn lông xù mới
              cho gia đình. Những thông tin chi tiết về từng giống mèo, bao gồm
              cả hình ảnh, giá cả, và thông tin về cách chăm sóc đều được
              <b>Mèo Mellow</b> đầy đủ và chính xác nhất.
            </p>
            <a href="../Introduce/Introduce.php"><button>Chi tiết</button></a>
          </div>
        </div>
        <div class="about-img">
          <div>
            <img src="./images/homeAbout.jpg" alt="Mèo Home-About" />
          </div>
        </div>
      </div>
      <!----------------------------------------commit ------------------------------------------->
      <div class="home-commit">
        <div class="home-commit-over">
          <h2 class="fonrt-Roboto_Slab">Cam kết</h2>
          <p class="fonrt-Roboto_Slab">
            <b>Mèo Mellow</b> hiểu rằng mèo không chỉ là thú cưng, mà còn là một
            phần của gia đình bạn, và chúng mình cam kết hỗ trợ bạn trong suốt
            quá trình chăm sóc và nuôi dưỡng các bé. Với tình yêu và niềm đam mê
            dành cho những sinh linh nhỏ bé này, chúng mình luôn nỗ lực không
            ngừng để cải thiện chất lượng dịch vụ và mở rộng kiến thức về chăm
            sóc mèo, đảm bảo rằng bạn và thú cưng của bạn sẽ có những trải
            nghiệm tốt nhất khi đến với <b>Mèo Mellow</b>.
          </p>
          <div class="home-commit-colum">
            <div class="home-commit-colum-origin">
              <img src="./images/commit-origin.png" alt="commit-origin" />
              <h3 class="fonrt-Roboto_Slab">Nguồn gốc</h3>
              <p class="fonrt-Roboto_Slab">
                Cung cấp thông tin chính xác và đầy đủ về nguồn gốc, cam kết các
                giống mèo thuần chủng và khỏe mạnh.
              </p>
            </div>
            <div class="home-commit-colum-quality">
              <img src="./images/commit-quality.png" alt="commit-quality" />
              <h3 class="fonrt-Roboto_Slab">Chất lượng</h3>
              <p class="fonrt-Roboto_Slab">
                Mỗi bé mèo trước khi đến với chủ nhân mới đều đã được tiêm phòng
                đầy đủ và kiểm tra sức khỏe tổng quát.
              </p>
            </div>
            <div class="home-commit-colum-support">
              <img src="./images/commit-support.png" alt="commit-support" />
              <h3 class="fonrt-Roboto_Slab">Hỗ trợ</h3>
              <p class="fonrt-Roboto_Slab">
                Hỗ trợ khách hàng với các dịch vụ sau bán hàng như tư vấn chăm
                sóc, tiêm phòng, và điều trị sức khỏe.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!------------------------------------ footer ------------------------------------>
    <?php
        include "../view/Footer.php";
    ?>

    <script src="../Homes/Home.js">
      
    </script>
  </body>
</html>
