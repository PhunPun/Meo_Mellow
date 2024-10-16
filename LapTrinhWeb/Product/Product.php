<!------------------------------------ ket noi database------------------------------------>
<?php
    include "../connect.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../images/icon-title.png" type="image/x-icon">
        <title>Mặt hàng</title>
        <link rel="stylesheet" href="../Homes/styleHome.css">
        <link rel="stylesheet" href="../Product/styleProduct.css">
        <script src="../Product/Product.js"></script>
        <!------------------------------------ Thư viện font chữ ------------------------------------>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lexend+Zetta:wght@100..900&family=Pacifico&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Honk&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&family=Honk&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
        <!------------------------------------ Thư viện icon ------------------------------------>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script src="../Login/Login.js" defer></script>
    </head>

<body>
    <!------------------------------------ header ------------------------------------>

    <?php
        include "../view/Header.php";
    ?>
      <!------------------------------------ section ------------------------------------>
    <section>
        <div class="product-body-column">
            <!------------------------------------ menu left ------------------------------------>
            <div class="product-menu">
                <ul class="product-subMenu1">
                    <li>
                        <a href="#" >
                            <div class="product-menu-domestic-foreign fonrt-Roboto_Slab  product-active-menu">Mèo nhập khẩu</div>
                        </a>
                        <ul class="product-subMenu2">
                            <li><a class="menu-kind fonrt-Roboto_Slab  product-active-menu" onclick="scrollSectionToView('foreign1')">Mèo tai cụp</a></li>
                            <li><a class="menu-kind fonrt-Roboto_Slab" onclick="scrollSectionToView('foreign2')">Mèo Ai Cập Sphynx</a></li>
                            <li><a class="menu-kind fonrt-Roboto_Slab" onclick="scrollSectionToView('foreign3')">Mèo Anh lông ngắn</a></li>
                            <li><a class="menu-kind fonrt-Roboto_Slab" onclick="scrollSectionToView('foreign4')">Mèo Anh lông dài</a></li>
                            <li><a class="menu-kind fonrt-Roboto_Slab" onclick="scrollSectionToView('foreign5')">Mèo Ba Tư</a></li>
                            <li><a class="menu-kind fonrt-Roboto_Slab" onclick="scrollSectionToView('foreign6')">Mèo chân ngắn Munchkin</a></li>
                            <li><a class="menu-kind fonrt-Roboto_Slab" onclick="scrollSectionToView('foreign7')">Mèo Ragdoll</a></li>
                            <li><a class="menu-kind fonrt-Roboto_Slab" onclick="scrollSectionToView('foreign8')">Mèo Xiêm</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" >
                            <div class="product-menu-domestic-foreign fonrt-Roboto_Slab">Mèo trong nước</div>
                        </a>
                        <ul class="product-subMenu2">
                            <li><a class="menu-kind fonrt-Roboto_Slab" onclick="scrollSectionToView('domestic1')">Mèo Mướp</a></li>
                            <li><a class="menu-kind fonrt-Roboto_Slab" onclick="scrollSectionToView('domestic2')">Mèo Vàng</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <!------------------------------------ main ------------------------------------>
            <div class="product-main-option-over">
            <div class="product-domestic-and-foreign">
                    <div class="product-foreign">
                        <?php
                            for ($i = 2; $i <10; $i++){
                                echo    '<div id="foreign'.($i-1).'" class= product-main-option>'
                        ?>
                            <div class="content-product-name">
                                <?php
                                $sql = "SELECT chung_loai,anh FROM all_product_cat WHERE id_cat ='M".$i."000'";
                                $result = $conn->query($sql);
                                $row = $result->fetch_assoc();
                                if($row['chung_loai'] == 'tai_cup'){
                                    echo '<h1>Mèo Tai Cụp</h1>';
                                } else
                                    echo '<h1>Mèo '.$row['chung_loai'].'</h1>';
                                ?>
                            </div>
                            <div class="product-section">
                                <div class="product-section-over">
                                    <?php
                                        for($j = 0; $j<6; $j++){
                                            $sql1 = "SELECT id_cat, ten_meo, anh, price FROM all_product_cat WHERE id_cat = 'M".$i."0".$j."0'";
                                            $result1 = $conn->query($sql1);
                                            if($result1 && $result1->num_rows >0){
                                                $row1 = $result1->fetch_assoc();
                                    ?>
                                    <div class="product-section-option">
                                    <?php
                                        echo    '<a href="../ViewProduct/ViewProduct.php?id='.$row1['id_cat'].'">';
                                    ?>
                                            <div class="product-section-option-img">
                                                <?php
                                                    echo    '<img src="'.$row1['anh'].'" alt="">'
                                                ?>
                                                <div class="product-gif-new">
                                                    
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart" >
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <?php
                                                    echo    '<div class="product-id"> id: '.$row1['id_cat'].'</div>';
                                                    echo    '<div class="product-name"> '.$row1['ten_meo'].'</div>';
                                                    echo    '<div class="product-price">'.number_format($row1['price'],0,",",".").'<sup>đ</sup></div>';
                                                ?>
                                            </div>
                                        </a>
                                    </div>
                                    <?php
                                            }
                                        }
                                    ?>
                                    <div class="product-section-see-more-over">
                                        <div class="product-section-see-more">
                                            <div class="slideshow-see-more-container">
                                                <?php
                                                    for($j=0; $j<4; $j++){
                                                        $sql1 = "SELECT anh FROM all_product_cat WHERE id_cat = 'M".$i."0".$j."0'";
                                                        $result1 = $conn->query($sql1);
                                                        if($result1 && $result1->num_rows >0){
                                                            $row1 = $result1->fetch_assoc();
                                                
                                                        echo    '<div class="slideshow-see-more fade">';
                                                        echo        '<img src="'.$row1['anh'].'" alt="anh">';
                                                        echo    '</div>';
                                                
                                                        }
                                                    }
                                                    echo    '<a href="../KindOf/KindOf.php?type='.$row['chung_loai'].'">';
                                                        echo    '<div class="text-slideshow-see-more">Nhấn để xem thêm</div>';
                                                    echo    '</a>';
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                echo '</div>';
                            }
                            ?>
                </div>
            </div>
                <div class="product-domestic-and-foreign">
                    <div class="product-domestic">
                        <?php
                            for ($i = 0; $i <2; $i++){
                                echo    '<div id="domestic'.($i+1).'" class= product-main-option>'
                        ?>
                            <div class="content-product-name">
                                <?php
                                $sql = "SELECT id_cat, chung_loai,anh FROM all_product_cat WHERE id_cat ='M".$i."000'";
                                $result = $conn->query($sql);
                                $row = $result->fetch_assoc();
                                if($row['chung_loai'] == 'muop'){
                                    echo '<h1>Mèo Mướp</h1>';
                                } else
                                    echo '<h1>Mèo Vàng</h1>';
                                ?>
                            </div>
                            <div class="product-section">
                                <div class="product-section-over">
                                    <?php
                                        for($j = 0; $j<6; $j++){
                                            $sql1 = "SELECT id_cat, ten_meo, anh, price FROM all_product_cat WHERE id_cat = 'M".$i."0".$j."0'";
                                            $result1 = $conn->query($sql1);
                                            if($result1 && $result1->num_rows >0){
                                                $row1 = $result1->fetch_assoc();
                                    ?>
                                    <div class="product-section-option">
                                    <?php
                                        echo    '<a href="../ViewProduct/ViewProduct.php?id='.$row1['id_cat'].'">';
                                    ?>
                                            <div class="product-section-option-img">
                                                <?php
                                                    echo    '<img src="'.$row1['anh'].'" alt="">'
                                                ?>
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart" >
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <?php
                                                    echo    '<div class="product-id"> id: '.$row1['id_cat'].'</div>';
                                                    echo    '<div class="product-name"> '.$row1['ten_meo'].'</div>';
                                                    echo    '<div class="product-price">'.number_format($row1['price'],0,",",".").'<sup>đ</sup></div>';
                                                ?>
                                            </div>
                                        </a>
                                    </div>
                                    <?php
                                            }
                                        }
                                    ?>
                                    <div class="product-section-see-more-over">
                                        <div class="product-section-see-more">
                                            <div class="slideshow-see-more-container">
                                                <?php
                                                    for($j=0; $j<4; $j++){
                                                        $sql1 = "SELECT anh FROM all_product_cat WHERE id_cat = 'M".$i."0".$j."0'";
                                                        $result1 = $conn->query($sql1);
                                                        if($result1 && $result1->num_rows >0){
                                                            $row1 = $result1->fetch_assoc();
                                                
                                                        echo    '<div class="slideshow-see-more fade">';
                                                        echo        '<img src="'.$row1['anh'].'" alt="anh">';
                                                        echo    '</div>';
                                                
                                                        }
                                                    }
                                                    echo    '<a href="../KindOf/KindOf.php?type='.$row['chung_loai'].'">';
                                                        echo    '<div class="text-slideshow-see-more">Nhấn để xem thêm</div>';
                                                    echo    '</a>';
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                echo '</div>';
                            }
                            ?>
                    </div>
                </div>
            </div>
            <!------------------------------------ right ------------------------------------>
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
        
    </section>
    <!------------------------------------ footer ------------------------------------>

    <?php
        include "../view/Footer.php";
    ?>

    <script src="../Product/Product.js"></script>
</body>
</html>
