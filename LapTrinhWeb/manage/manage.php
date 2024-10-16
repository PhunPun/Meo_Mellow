<?php
ob_start(); // Bắt đầu output buffering
include "../connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <link rel="stylesheet" href="./manage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body>  

    <h1>Danh sách sản phẩm</h1>
    <?php
// Xử lý việc xóa sản phẩm
if (isset($_POST['delete_cat'])) {
    $id_cat = $_POST['delete_cat'];
    $sql_check = "SELECT * FROM all_product_cat WHERE id_cat = '$id_cat' and trang_thai = '0'";
    $result_check = $conn->query($sql_check);
    if($result_check->num_rows > 0){
        echo "<script>alert('Sản phẩm đã có trong đơn hàng, không thể xóa');</script>";
    }else{
        $sql = "DELETE FROM all_product_cat WHERE id_cat = ?";
    
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $id_cat);
        if ($stmt->execute()) {
            // Xóa thành công, làm mới trang
            header("Location: " . $_SERVER['PHP_SELF']);
            exit;
        } else {
            echo "Xóa thất bại: " . $stmt->error;
        }
        $stmt->close();
    }

    
}

// Xử lý việc thay đổi trạng thái ẩn/hiện
if (isset($_POST['toggle_cat'])) {
    $id_cat = $_POST['toggle_cat'];
    
    // Lấy trạng thái hiện tại của sản phẩm
    $sql_get = "SELECT an_hien FROM all_product_cat WHERE id_cat = ?";
    $stmt_get = $conn->prepare($sql_get);
    $stmt_get->bind_param("s", $id_cat);
    $stmt_get->execute();
    $result_get = $stmt_get->get_result();

    // Kiểm tra nếu có dữ liệu trả về
    if ($result_get->num_rows > 0) {
        $row = $result_get->fetch_assoc();
        $new_visibility = ($row['an_hien'] == '1') ? '0' : '1'; // Đổi trạng thái

        // Cập nhật trạng thái
        $sql_update = "UPDATE all_product_cat SET an_hien = ? WHERE id_cat = ?";
        $stmt_update = $conn->prepare($sql_update);
        $stmt_update->bind_param("ss", $new_visibility, $id_cat);

        if ($stmt_update->execute()) {
            // Cập nhật thành công, làm mới trang
            header("Location: " . $_SERVER['PHP_SELF']);
            exit;
        } else {
            echo "Cập nhật trạng thái thất bại: " . $stmt_update->error;
        }

        $stmt_update->close();
    } else {
        echo "Không tìm thấy sản phẩm với ID này.";
    }

    $stmt_get->close();
}

// Truy vấn toàn bộ sản phẩm
if (isset($_POST['filter_chung_loai'])) {
    $filter_chung_loai = $conn->real_escape_string($_POST['filter_chung_loai']);
    if ($filter_chung_loai == '*') {
        $sql = "SELECT * FROM all_product_cat WHERE CAST(SUBSTRING(id_cat,2) AS UNSIGNED) % 10 = 0";
    } else {
        $sql = "SELECT * FROM all_product_cat WHERE CAST(SUBSTRING(id_cat,2) AS UNSIGNED) % 10 = 0 AND chung_loai = '$filter_chung_loai'";
    }
} else {
    $sql = "SELECT * FROM all_product_cat WHERE CAST(SUBSTRING(id_cat,2) AS UNSIGNED) % 10 = 0";
}
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
    <thead>
    <tr>
        <th>ID</th>
        "?>

    <th>
        <form action="" method="post">
            <label for="filter_chung_loai">Chủng loại</label>
            <select name="filter_chung_loai" id="filter_chung_loai" onchange="this.form.submit()">
                <option value="*"
                    <?php echo (isset($_POST['filter_chung_loai']) && $_POST['filter_chung_loai'] == '*') ? 'selected' : ''; ?>>
                    Tất cả</option>
                <option value="muop"
                    <?php echo ( isset($_POST['filter_chung_loai']) && $_POST['filter_chung_loai'] == 'muop') ? 'selected' : ''; ?>>
                    Mèo Mướp</option>
                <option value="vang"
                    <?php echo ( isset($_POST['filter_chung_loai']) && $_POST['filter_chung_loai'] == 'vang') ? 'selected' : ''; ?>>
                    Mèo Vàng</option>
                <option value="tai_cup"
                    <?php echo (isset($_POST['filter_chung_loai']) && $_POST['filter_chung_loai'] == 'tai_cup') ? 'selected' : ''; ?>>
                    Mèo tai cụp</option>
                <option value="Ai Cập Sphynx"
                    <?php echo (isset($_POST['filter_chung_loai']) && $_POST['filter_chung_loai'] == 'Ai Cập Sphynx') ? 'selected' : ''; ?>>
                    Ai Cập Sphynx</option>
                <option value="Anh Lông Ngắn"
                    <?php echo (isset($_POST['filter_chung_loai']) && $_POST['filter_chung_loai'] == 'Anh Lông Ngắn') ? 'selected' : ''; ?>>
                    Anh Lông Ngắn</option>
                <option value="Anh Lông Dài"
                    <?php echo (isset($_POST['filter_chung_loai']) && $_POST['filter_chung_loai'] == 'Anh Lông Dài') ? 'selected' : ''; ?>>
                    Anh Lông Dài</option>
                <option value="Ba Tư"
                    <?php echo (isset($_POST['filter_chung_loai']) && $_POST['filter_chung_loai'] == 'Ba Tư') ? 'selected' : ''; ?>>
                    Ba Tư</option>
                <option value="Chân Ngắn Munchkin"
                    <?php echo (isset($_POST['filter_chung_loai']) && $_POST['filter_chung_loai'] == 'Chân Ngắn Munchkin') ? 'selected' : ''; ?>>
                    Chân Ngắn Munchkin</option>
                <option value="Ragdoll"
                    <?php echo (isset($_POST['filter_chung_loai']) && $_POST['filter_chung_loai'] == 'Ragdoll') ? 'selected' : ''; ?>>
                    Ragdoll</option>
                <option value="Xiêm"
                    <?php echo ( isset($_POST['filter_chung_loai']) && $_POST['filter_chung_loai'] == 'Xiêm') ? 'selected' : ''; ?>>
                    Mèo Xiêm</option>
            </select>
        </form>

    </th>
    <?php
        echo "
        <th>Tên Mèo</th>
        <th>Ảnh</th>
        <th>Giá</th>
        <th>Tuổi</th>
        <th>Cân Nặng</th>
        <th>Giới Tính</th>
        <th>Nguồn Gốc</th>
        <th>Vaccin 4 Bệnh</th>
        <th>Vaccin Dại</th>
        <th>Vaccin Phức Mạc</th>
        <th>Tẩy Giun</th>
        <th>Ẩn/Hiện</th>
        <th>Trạng thái</th>
        <th>Hành Động</th>
    </tr>
    </thead>
    <tbody>";
    
    while ($row = $result->fetch_assoc()) {
        if(htmlspecialchars($row['chung_loai']) == 'muop'){
            $chung_loai = 'Mướp';
        }elseif(htmlspecialchars($row['chung_loai']) == 'vang'){
            $chung_loai = 'Vàng';
        }elseif(htmlspecialchars($row['chung_loai']) == 'tai_cup'){
            $chung_loai = 'Tai cụp';
        }else{
            $chung_loai = htmlspecialchars($row['chung_loai']);
        }
        echo "<tr>
            <td>" . htmlspecialchars($row['id_cat']) . "</td>
            <td>" . $chung_loai . "</td>
            <td>" . htmlspecialchars($row['ten_meo']) . "</td>
            <td><img src='" . htmlspecialchars($row['anh']) . "' alt='Ảnh sản phẩm'></td>
            <td>" . htmlspecialchars($row['price']) . "</td>
            <td>" . htmlspecialchars($row['tuoi']) . "</td>
            <td>" . htmlspecialchars($row['can_nang']) . "</td>
            <td>" . ($row['sex'] == 1 ? 'Đực' : 'Cái') . "</td>
            <td>" . htmlspecialchars($row['nguon_goc']) . "</td>
            <td>" . ($row['vaccin_4_benh'] == 1 ? 'Có' : 'Không') . "</td>
            <td>" . ($row['vaccin_dai'] == 1 ? 'Có' : 'Không') . "</td>
            <td>" . ($row['vaccin_phuc_mac'] == 1 ? 'Có' : 'Không') . "</td>
            <td>" . ($row['tay_giun'] == 1 ? 'Có' : 'Không') . "</td>
            <td>" . ($row['an_hien'] == '1' ? 'Hiện' : 'Ẩn') . "</td>
            <td>" . ($row['trang_thai'] == '1' ? 'Còn hàng' : 'Đã bán') . "</td>
            <td class='actions'>
                <form action='' method='post'>
                    <input type='hidden' name='delete_cat' value='" . htmlspecialchars($row['id_cat']) . "'>
                    <input type='submit' value='Xóa'>
                </form>
                <form action='../fix_product/fix_product.php' method='post'>
                    <input type='hidden' name='fix_cat' value='" . htmlspecialchars($row['id_cat']) . "'>
                    <input type='submit' value='Sửa'>
                </form>
                <form action='' method='post'>
                    <input type='hidden' name='toggle_cat' value='" . htmlspecialchars($row['id_cat']) . "'>
                    <input type='submit' value='" . ($row['an_hien'] == '1' ? 'Ẩn' : 'Hiện') . "'>
                </form>
            </td>
        </tr>";
    }

    echo "</tbody></table>";
} else {
    echo "<p>Không có sản phẩm nào.</p>";
}

$conn->close(); // Đóng kết nối cơ sở dữ liệu
ob_end_flush(); // Kết thúc output buffering và gửi nội dung đến trình duyệt
?>
    <button id="backToTopBtn" title="Quay lại đầu trang" class="custom-tooltip">
  <i class="fas fa-arrow-up"></i>
  
</button>
    <script>
    // Lấy phần tử nút
    var backToTopBtn = document.getElementById("backToTopBtn");

    // Hiển thị nút khi người dùng cuộn xuống 200px từ đầu trang
    window.onscroll = function() {
        scrollFunction();
    };

    function scrollFunction() {
        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
            backToTopBtn.style.display = "block";
        } else {
            backToTopBtn.style.display = "none";
        }
    }

    // Khi nhấn vào nút, cuộn trở lại đầu trang
    backToTopBtn.onclick = function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    };
    </script>
</body>

</html>