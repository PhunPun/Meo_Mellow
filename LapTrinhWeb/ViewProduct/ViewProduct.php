<?php
  include "../connect.php";
  if(isset($_GET['id'])){
    $id=$_GET['id'];
    $id4 = substr($id,0,4);
  }else{
    $id="";
  }
  //-----------------------------------------------lấy thông tin người dùng----------------------------------------
  //----------------------------------------------lấy thông tin sản phẩm----------------------------------------------------
  $sql = "SELECT * FROM all_product_cat WHERE LEFT(id_cat,4) = '$id4'";
  $result = $conn->query($sql);
  $rows = array();
  if($result && $result->num_rows > 0){
      while($row = $result->fetch_assoc()){
          $rows[] = $row;
      }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../images/icon-title.png" type="image/x-icon" />
    <title>Xem sản phẩm</title>
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
    <link rel="stylesheet" href="../ViewProduct/ViewProduct.css">
  </head>

  <body>
    <!------------------------------------ header ------------------------------------>
    <?php
      include "../view/Header.php";
    ?>
    <?php
      if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        $stmt_user = $conn->prepare("SELECT * FROM tai_khoan WHERE username = ?");
        $stmt_user->bind_param("s", $username);
        $stmt_user->execute();
        $result_user = $stmt_user->get_result();
        if ($result_user->num_rows > 0) {
          $row_user = $result_user->fetch_assoc();
          //----------------------------------------------them san pham----------------------------------------------------
            if(isset($_POST['them_gio_hang']) || isset($_POST['mua_ngay'])){
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
            if(isset($_POST['mua_ngay'])){
              echo "<script>window.location.href='../Cart/Cart.php'</script>";
            }
        } else {
          echo "<script>alert('Không tìm thấy người dùng');</script>";
        }
        
        $stmt_user->close();
      } else {
        if(isset($_POST['them_gio_hang']) || isset($_POST['mua_ngay'])){
          echo "<script>alert('Bạn chưa đăng nhập. Hãy đăng nhập trước nhé!');</script>";
        }
      }
      
      
    ?>
    <!------------------------------------ section ------------------------------------>
    <section>
      <div class="view-container">
        <!------------------------------------ main ------------------------------------>
        <div class="view-main">
            <div class="view-main-over">
                <div class="view-main-left">
                  
                  <?php
                    echo  '<div class="view-main-left-big-img" style="background-image: url('.$rows[0]['anh'].');"></div>';
                  ?>
                    <div class="view-main-left-small">
                        <?php
                          $first = true;
                          foreach($rows as $row){
                            $class = $first ? 'view-main-left-small-img small-img-active' : 'view-main-left-small-img';
                            $first = false;
                            echo  '<div class="'.$class.'" style="background-image: url('.$row['anh'].');">';
                              echo  '<div class="small-img-text"></div>';
                            echo  '</div>';
                          }
                        ?>
                    </div>
                    <div class="view-left-note">Màu sắc thực tế có thể bị lệch 5-10%</div>
                    <button class="view-main-left-prev" onclick="mainLeftPrev()"><i class="fa-solid fa-backward"></i></button>
                    <button class="view-main-left-next" onclick="mainLeftNext()"><i class="fa-solid fa-forward"></i></button>
                </div>
                <div class="view-main-right">
                    <div class="main-right-name">
                      <?php
                        echo  $rows[0]['ten_meo'];
                      ?>
                      <div class="main-right-name-id"><?php echo   $rows[0]['id_cat'] ?></div>
                    </div>
                    <div class="main-right-information">
                      <div class="main-right-infor-head">
                        Thông tin
                      </div>
                      <div class="main-right-infor-body">
                        <div> <i class="fa-solid fa-circle"></i> <span class="span1">Tuổi:</span> <span class="infor-body-age"> <?php echo $rows[0]['tuoi'] ?></span></div>
                        <div> <i class="fa-solid fa-circle"></i> <span class="span1">Cân nặng:</span> <span class="infor-body-age"> <?php echo $rows[0]['can_nang'].' kg' ?></span></div>
                        <div> <i class="fa-solid fa-circle"></i> <span class="span1">Giống:</span> <span class="infor-body-age"> <?php if($rows[0]['sex'] == 0){echo 'Cái';}else{echo 'Đực';} ?></span></div>
                        <div> <i class="fa-solid fa-circle"></i> <span class="span1">Nguồn gốc:</span> <span class="infor-body-age"><?php echo $rows[0]['nguon_goc'] ?></span></div>
                      </div>
                    </div>
                    <div class="main-right-vaccin">
                      <div class="main-right-vaccin-head">
                        Tình trạng tiêm phòng
                      </div>
                      <div class="main-right-vacin-body">
                        <?php
                            if($rows[0]['vaccin_4_benh'] == 0){
                              echo '<div><i class="fa-regular fa-circle-xmark" style="color: red"></i> <span class="infor-body-vaccin-1"> Vaccin 4 bệnh</span></div>';
                            }
                            else{
                              echo '<div> <i class="fa-regular fa-circle-check" style="color: rgb(10, 204, 10);"></i> <span class="infor-body-vaccin-1"> Vaccin 4 bệnh</span></div>';
                            }
                        ?>
                        <?php
                            if($rows[0]['vaccin_4_benh'] == 0){
                              echo '<div><i class="fa-regular fa-circle-xmark" style="color: red"></i> <span class="infor-body-vaccin-2"> Vaccin dại</span></div>';
                            }
                            else{
                              echo '<div> <i class="fa-regular fa-circle-check" style="color: rgb(10, 204, 10);"></i> <span class="infor-body-vaccin-2"> Vaccin dại</span></div>';
                            }
                        ?>
                        <?php
                            if($rows[0]['vaccin_4_benh'] == 0){
                              echo '<div><i class="fa-regular fa-circle-xmark" style="color: red"></i> <span class="infor-body-vaccin-3"> Vaccin viêm phúc mạc</span></div>';
                            }
                            else{
                              echo '<div> <i class="fa-regular fa-circle-check" style="color: rgb(10, 204, 10);"></i> <span class="infor-body-vaccin-3"> Vaccin viêm phúc mạc</span></div>';
                            }
                        ?>
                        <?php
                            if($rows[0]['vaccin_4_benh'] == 0){
                              echo '<div><i class="fa-regular fa-circle-xmark" style="color: red"></i> <span class="infor-body-vaccin-4"> Tẩy giun</span></div>';
                            }
                            else{
                              echo '<div> <i class="fa-regular fa-circle-check" style="color: rgb(10, 204, 10);"></i> <span class="infor-body-vaccin-4"> Tẩy giun</span></div>';
                            }
                        ?>
                      </div>
                  </div>
                  <div class="main-right-price">
                    <span><?php echo number_format($rows[0]['price'],0,",",".") ?></span><sup>đ</sup>
                    <form action="" method="post">
                      <div class="main-right-price-button">
                        
                        <!-- Nút Thêm vào giỏ hàng -->
                        <button class="main-price-button-add" type="submit" name="them_gio_hang" onclick="window.location.reload();">
                          Thêm vào giỏ hàng
                        </button>
                        
                        <!-- Nút Mua ngay -->
                        <button class="main-price-button-buy" type="submit" name="mua_ngay">
                          Mua ngay
                        </button>
                        
                      </div> 
                    </form>
                  </div>
                </div>
            </div>
        </div>
      </div>
<!------------------------------------ character ------------------------------------>
      <div class="view-character-container-over" style="background-color: rgba(250, 205, 168, 0.479);">
        <div class="character-text-head">
          <p>đặt điểm giống mèo:</p>
        </div>
        <?php
          echo  '<div class="character-text-name">';
                if($rows[0]['chung_loai'] == 'muop'){
                  echo  'Mướp';
                }elseif($rows[0]['chung_loai'] == 'vang'){
                  echo  'Vàng';
                }elseif($rows[0]['chung_loai'] == 'tai_cup'){
                  echo  'Tai Cụp';
                }else{
                  echo  $rows[0]['chung_loai'];
                }
          echo  '</div>'
        ?>
        <?php
          $char = substr($rows[0]['id_cat'],0,2);
          echo  '<div class="view-character-container">';
          echo    '<div class="character-img" style="background-image: url(../images/character'.$char.'.png);">';
          echo    '</div>';
          echo  '</div>';
        ?>
        
      </div>
      <!------------------------------------ các bé mèo khác ------------------------------------>
      <div class="view-see-other-text">Xem thêm các bé khác:</div>
      <div class="view-see-other-container">
        <div class="view-other-see-container">
          <div class="view-see-other-over">
            <?php
            if(isset($_GET['id'])){
              $id=$_GET['id'];
              $id2 = substr($id,0,2);
            }else{
              $id="";
            }
            $sqlother = "SELECT * FROM all_product_cat WHERE LEFT(id_cat,2) = '$id2' and CAST(SUBSTRING(id_cat,4) AS UNSIGNED) %10 = 0";
            $resultother = $conn->query($sqlother);
            $rowsother = array();
            if($resultother && $resultother->num_rows > 0){
                while($rowother = $resultother->fetch_assoc()){
                    $rowsother[] = $rowother;
                }
            }
            foreach($rowsother as $rowother){
              echo  '<div class="view-see-other-img" style="background-image: url('.$rowother['anh'].');">';
              echo  '<a href="../ViewProduct/ViewProduct.php?id='.$rowother['id_cat'].'"></a>';
              echo  '</div>';
            }
            ?>

          </div>
            <button class="view-see-other-arrows-prev" onclick="seeOtherPrev()"><i class="fa-solid fa-circle-chevron-left"></i></button>
            <button class="view-see-other-arrows-next" onclick="seeOtherNext()"><i class="fa-solid fa-circle-chevron-right"></i></button>
        </div>
      </div>
      <!------------------------------------ infor right ------------------------------------>
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

    <script src="../Homes/Home.js"></script>
    <script src="../ViewProduct/ViewProduct.js"></script>
  </body>
</html>
