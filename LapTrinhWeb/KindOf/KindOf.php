<?php
    include "../connect.php";
    if(isset($_GET['type'])){
        $loai = $_GET['type'];
    }
    else{
        $loai = "";
    }
    $sql = "SELECT id_cat, chung_loai, ten_meo, anh, price FROM all_product_cat WHERE chung_loai = '$loai' AND CAST(SUBSTRING(id_cat, 2) AS UNSIGNED) % 10 = 0";
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
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../images/icon-title.png" type="image/x-icon">
        <title>Mèo Anh lông ngắn</title>
        <link rel="stylesheet" href="../Homes/styleHome.css">
        <link rel="stylesheet" href="../KindOf/styleKindOf.css">
        <script src="../Login/Login.js" defer></script>
        <!------------------------------------ Thư viện font chữ ------------------------------------>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lexend+Zetta:wght@100..900&family=Pacifico&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Honk&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&family=Honk&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&family=Honk&family=Lobster&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
        <!------------------------------------ Thư viện icon ------------------------------------>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>
<body>
    <!------------------------------------ header ------------------------------------>
    <?php
        include "../view/Header.php";
    ?>
    <!------------------------------------ section ------------------------------------>
    <section>
        <div class="kind-space"></div>
        <div class="product-body-column">
            <div class="kind_of-left">
                <div class="kind-of-left-over">
                    <div class="kind-of-left-main">
                        <img src="../KindOf/images/img-kind-left.png" alt="imgkind-left">
                    </div>
                </div>
            </div>
            
            <div class="product-main-option-over">
    <div class="kind-img-heard">
        <div class="kind-img-heard-over">
            <img src="../KindOf/images/img-kind-heard.png" alt="img-heard">
        </div>
    </div>
    <div class="product-domestic-and-foreign">
        <div class="product-domestic">
            <div id="domestic1" class="product-main-option">
                
                <?php
                if($loai=='muop'){
                    echo    '<div class="content-product-name">';
                        echo    '<h1>Mèo Mướp</h1>';
                    echo    '</div>';
                }
                elseif ($loai == 'vang') {
                    echo    '<div class="content-product-name">';
                        echo    '<h1>Mèo Vàng</h1>';
                    echo    '</div>';
                }
                elseif ($loai == 'tai_cup') {
                    echo    '<div class="content-product-name">';
                        echo    '<h1>Mèo Tai Cụp</h1>';
                    echo    '</div>';
                }else{
                    echo    '<div class="content-product-name">';
                        echo    '<h1>Mèo '.$loai.'</h1>';
                    echo    '</div>';
                }
                ?>
                <div class="product-section">
                    <div class="product-section-over">
                        <?php
                            foreach ($rows as $row) {
                        ?>
                        <div class="product-section-option">
                            <?php
                                echo    '<a href="../ViewProduct/ViewProduct.php?id='.$row['id_cat'].'">';
                            ?>
                            
                                <div class="product-section-option-img">
                                    <?php
                                    echo    '<img src="'.$row['anh'].'" alt="product">';
                                    ?>
                                    <div class="product-gif-new">
                                        
                                    </div>
                                    <div class="hover-add-cart-product">
                                        <div class="product-add-cart">
                                            <img src="../images/cart-add-product.png" alt="cart">
                                        </div>
                                        <div class="add-transition-icon-cart">
                                            <img src="../images/add-cart.png" alt="add">
                                        </div>
                                    </div>
                                </div>  
                                <div class="product-section-option-name">
                                    <?php
                                        echo    '<div class="product-id"> id: '.$row['id_cat'].'</div>';
                                        echo    '<div class="product-name"> Mèo ';
                                        if($row['ten_meo']=='muop'){
                                            echo    'Mướp';
                                        }elseif ($row['ten_meo']=='vang') {
                                            echo    'Vàng';
                                        }
                                        elseif ($row['ten_meo']=='tai_cup') {
                                            echo    'Tai Cụp';
                                        }
                                        else{
                                            echo    $row['ten_meo'];
                                        }
                                        echo    '</div>';
                                        echo    '<div class="product-price">'.number_format($row['price'],0,",",".").'<sup>đ</sup></div>';
                                    ?>
                                </div>
                            </a>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div> 
        </div>
            <div class="kind-can-you-like-container">
                <div class="kind-can-you-like-over">
                    <div class="kind-can-you-like-heard">
                        <img src="../KindOf/images/kind-can-you-like.png" alt="kind-can-you-like">
                        <div class="kind-can-you-like-heard-text">
                            Có thể bạn cũng thích:
                        </div>
                    </div>
                </div>
            </div>
    </div>
        </div>
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
        </div>
        <!--------------------------------------------- carousel(vòng xoay ảnh) -------------------------------------------------->
        <div class="home-carousel-container">
            <div class="home-carousel">
              <div class="home-carousel-list">
                <?php
                    $sqlcat="SELECT chung_loai, anh FROM all_product_cat WHERE CAST(SUBSTRING(id_cat,2) AS UNSIGNED)%1000 = 0";
                    $resultcat = $conn->query($sqlcat);
                    $rowscat= array();
                    if($resultcat && $resultcat->num_rows > 0){
                        while($rowcat = $resultcat->fetch_assoc()){
                            $rowscat[] = $rowcat;
                        }
                    }
                ?>
                <?php
                    foreach($rowscat as $rowcat){
                        if($rowcat['chung_loai'] != $loai){
                                echo    '<div class="home-carousel-item" style="background-image: url('.$rowcat['anh'].');">';
                                echo    '<div class="caroucel-content">';
                                echo        '<div class="caroucel-title">Mèo</div>';
                                echo        '<div class="caroucel-name">';
                                                if($rowcat['chung_loai']== 'muop'){
                                                    echo    'Mướp';
                                                }elseif($rowcat['chung_loai']== 'vang'){
                                                    echo    'Vàng';
                                                }elseif($rowcat['chung_loai']== 'tai_cup'){
                                                    echo    'Tai Cụp';
                                                }else{
                                                    echo    $rowcat['chung_loai'];
                                                }
                                echo        '</div>';
                                echo        '<div class="caroucel-btn">';
                                echo        '<button><a href="../KindOf/KindOf.php?type='.$rowcat['chung_loai'].'">Xem ngay</a></button>';
                                echo        '</div>';
                                echo    '</div>';
                                echo    '</div>';
                        }
                        
                    }
                ?>
              </div>
              <div class="home-carousel-arrows">
                <button class="home-carousel-arrows-prev"><<</button>
                <button class="home-carousel-arrows-next">>></button>
              </div>
              <div class="home-carousel-time-running"></div>
            </div>
          </div>    
    </section>
    <!------------------------------------ footer ------------------------------------>

    <?php
        include "../view/Footer.php";
    ?>

    <script src="../Homes/Home.js"></script>
    <script src="../KindOf/KindOf.js"></script>
</body>
</html>
