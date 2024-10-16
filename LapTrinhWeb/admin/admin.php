<!------------------------------------ kết nối database ------------------------------------>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/icon-title.png" type="image/x-icon">
    <title>Admin</title>
    <link rel="stylesheet" href="../Homes/styleHome.css">
    <link rel="stylesheet" href="../admin/admin.css">
    <script src="../Login/Login.js" defer></script>
    <!-- Thư viện font chữ -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Zetta:wght@100..900&family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <!-- Thư viện icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <!-- header -->

    <!-- section -->
    <section>
        <div class="product-body-column">

            <!-- menu left -->
            <div class="menu-toggle">
                <i class="fas fa-bars toggle-icon" onclick="toggleMenu()"></i>
                <a href="https://www.instagram.com/_zanhuy/"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.tiktok.com/@zanhy812"><i class="fa-brands fa-tiktok"></i></a>
            </div>
            <div class="product-menu">
                <div class="user-icon">
                    <a onclick="supportlg()"><i class="fas fa-user-circle"></i></a>
                    <span class="username" id="user-displays" onclick="supportlg()"><?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Admin'; ?></span>
                </div>
                <ul class="product-subMenu1">
                    <li>
                        <ul class="product-subMenu2">
                            <li><a class="menu-kind fonrt-Roboto_Slab product-active-menu"
                                    onclick="loadIframe('../statistical/statistical.php',this)">Thống kê</a></li>
                            <li>
                                <a class="menu-kind fonrt-Roboto_Slab" onclick="choose(this)">Quản lí sản phẩm</a>
                                <ul class="product-subMenu3 manage_product">
                                    <li><a class="menu-kind1 fonrt-Roboto_Slab" onclick="loadIframe1('../manage/manage.php',this)">Danh sách sản phẩm</a></li>
                                    <li><a class="menu-kind1 fonrt-Roboto_Slab" onclick="loadIframe1('../add_product/add_product.php',this)">Thêm sản phẩm</a></li>
                                </ul>
                            </li>
                            <li><a class="menu-kind fonrt-Roboto_Slab" onclick="loadIframe('../order_management/order_management.php',this)" >Quản lý đơn hàng</a></li>
                            <!-- <li><a class="menu-kind fonrt-Roboto_Slab" onclick="loadIframe('../customer_management/customer_management.php',this)">Quản lý khách hàng</a></li> -->
                            
                        </ul>
                    </li>
                </ul>
                <div>
                    <a href="../Homes/Home.php" class="logo">
                        <img src="../images/logo.png" alt="" />
                    </a>
                </div>
            </div>
            <!-- main -->
            <div class="product-main-option-over">
                <div class="space"></div>
                <iframe id="content_iframe" src="../statistical/statistical.php" width="99%" height="100%" frameborder="0"
                    allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <!-- footer -->
    <script src="./admin.js"></script>
</body>

</html>
