<?php
include "../connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sản Phẩm</title>
    <link rel="stylesheet" href="./add_product.css">
    <link rel="stylesheet" href="../fix_product/fix_product.css">
</head>
<body>
    <h1>Thêm Sản Phẩm</h1>
   
    <form action="" method="post" enctype="multipart/form-data">
            <?php
                if(isset($_POST['chung_loai'])){
                $chung_loai = $_POST['chung_loai'];
                }else{
                    $chung_loai = 'muop';
                }
            ?>
            <label for="chung_loai">Chủng Loại:</label>
            <select id="chung_loai" name="chung_loai" onchange="this.form.submit()" required>
                <option value="muop" <?php echo ( $chung_loai == 'muop') ? 'selected' : ''; ?>>Mèo Mướp</option>
                <option value="vang" <?php echo ( $chung_loai == 'vang') ? 'selected' : ''; ?>>Mèo Vàng</option>
                <option value="tai_cup" <?php echo ( $chung_loai == 'tai_cup') ? 'selected' : ''; ?>>Mèo tai cụp</option>
                <option value="Ai Cập Sphynx" <?php echo ( $chung_loai == 'Ai Cập Sphynx') ? 'selected' : ''; ?>>Ai Cập Sphynx</option>
                <option value="Anh Lông Ngắn" <?php echo ( $chung_loai == 'Anh Lông Ngắn') ? 'selected' : ''; ?>>Anh Lông Ngắn</option>
                <option value="Anh Lông Dài" <?php echo ( $chung_loai == 'Anh Lông Dài') ? 'selected' : ''; ?>>Anh Lông Dài</option>
                <option value="Ba Tư" <?php echo ( $chung_loai == 'Ba Tư') ? 'selected' : ''; ?>>Ba Tư</option>
                <option value="Chân Ngắn Munchkin" <?php echo ( $chung_loai == 'Chân Ngắn Munchkin') ? 'selected' : ''; ?>>Chân Ngắn Munchkin</option>
                <option value="Ragdoll" <?php echo ( $chung_loai == 'Ragdoll') ? 'selected' : ''; ?>>Ragdoll</option>
                <option value="Xiêm" <?php echo ( $chung_loai == 'Xiêm') ? 'selected' : ''; ?>>Mèo Xiêm</option>
            </select>
        <br><br>
        <?php
        $sql_id_max ="SELECT MAX(id_cat) AS max_id FROM all_product_cat  WHERE chung_loai = '$chung_loai' && CAST(SUBSTRING(id_cat,2) AS UNSIGNED) %10 = 0";
        $result_id_max = $conn->query($sql_id_max);
        if($result_id_max && $result_id_max->num_rows >0){
            $row_id_max = $result_id_max->fetch_assoc();
            $id_max = substr($row_id_max['max_id'],1);
            $id_max_num = (int)$id_max;
            $id_max_new = 'M'.str_pad($id_max_num +10, 4, '0', STR_PAD_LEFT);
        } 
        ?>
        <label for="id_cat">ID Cat:</label>
        <input type="text" id="id_cat" name="id_cat" value="<?php echo $id_max_new ?>" required readonly ><br><br>
        

        <label for="ten_meo">Tên Mèo:</label>
        <input type="text" id="ten_meo" name="ten_meo" required><br><br>

        <label for="anh">Ảnh:</label>
        <input type="file" id="anh" name="anh" accept="image/*" required><br><br>

        <label for="price">Giá (vnd):</label>
        <input type="number" step="1000" min="0" id="price" name="price" required><br><br>

        <label for="tuoi">Tuổi:</label>
        <input type="text" id="tuoi" name="tuoi" required><br><br>

        <label for="can_nang">Cân Nặng (kg):</label>
        <input type="number" step="0.1" min="0" id="can_nang" name="can_nang" required><br><br>

        <label for="sex">Giới Tính:</label>
        <select id="sex" name="sex" required>
            <option value="1">Đực</option>
            <option value="0">Cái</option>
        </select><br><br>

        <label for="nguon_goc">Nguồn Gốc:</label>
        <select id="nguon_goc" name="nguon_goc" required>
            <option value="Anh">Anh</option>
            <option value="Canada">Canada</option>
            <option value="Châu Âu">Châu Âu</option>
            <option value="Hoa Kỳ">Hoa Kỳ</option>
            <option value="Nga">Nga</option>
            <option value="Nhật Bản">Nhật Bản</option>
            <option value="Pháp">Pháp</option>
            <option value="Thái Lan">Thái Lan</option>
            <option value="Trung Quốc">Trung Quốc</option>
            <option value="Việt Nam">Việt Nam</option>
        </select><br><br>

        <label for="vaccin_4_benh">Vaccin 4 Bệnh:</label>
        <select id="vaccin_4_benh" name="vaccin_4_benh" required>
            <option value="1">Có</option>
            <option value="0">Không</option>
        </select><br><br>

        <label for="vaccin_dai">Vaccin Dại:</label>
        <select id="vaccin_dai" name="vaccin_dai" required>
            <option value="1">Có</option>
            <option value="0">Không</option>
        </select><br><br>

        <label for="vaccin_phuc_mac">Vaccin Phức Mạc:</label>
        <select id="vaccin_phuc_mac" name="vaccin_phuc_mac" required>
            <option value="1">Có</option>
            <option value="0">Không</option>
        </select><br><br>

        <label for="tay_giun">Tẩy Giun:</label>
        <select id="tay_giun" name="tay_giun" required>
            <option value="1">Có</option>
            <option value="0">Không</option>
        </select><br><br>

        <label for="additional_images">Thêm Ảnh:</label>
        <input type="file" id="additional_images" name="additional_images[]" accept="image/*" multiple><br><br>

        <input name="them_san_pham" type="submit" value="Thêm Sản Phẩm">
    </form>
<?php
if (isset($_FILES['anh']) && $_FILES['anh']['error'] == UPLOAD_ERR_OK && isset($_POST['them_san_pham'])) {
    // Lấy thông tin tệp chính
    $fileTmpPath = $_FILES['anh']['tmp_name'];
    $fileName = $_FILES['anh']['name'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    // Danh sách các loại tệp ảnh được phép
    $allowedExts = array('jpg');

    if (in_array($fileExtension, $allowedExts)) {
        // Lấy ID từ form
        $id_cat = $_POST['id_cat'];
        
        // Đặt đường dẫn lưu trữ ảnh chính với tên tệp là ID và phần mở rộng của tệp gốc
        $uploadFileDir = '../images/'; // Đảm bảo thư mục này tồn tại và có quyền ghi
        $dest_file_path = $uploadFileDir . $id_cat . '.' . $fileExtension;

        // Di chuyển tệp từ thư mục tạm đến thư mục đích
        if (move_uploaded_file($fileTmpPath, $dest_file_path)) {
            // Lấy dữ liệu từ form
            $chung_loai = $_POST['chung_loai'];
            $ten_meo = $_POST['ten_meo'];
            $anh = '../images/'.$id_cat . '.' . $fileExtension;  // Lưu tên tệp chính là ID với phần mở rộng
            $price = $_POST['price'];
            $tuoi = $_POST['tuoi'];
            $can_nang = $_POST['can_nang'];
            $sex = $_POST['sex'];
            $nguon_goc = $_POST['nguon_goc'];
            $vaccin_4_benh = $_POST['vaccin_4_benh'];
            $vaccin_dai = $_POST['vaccin_dai'];
            $vaccin_phuc_mac = $_POST['vaccin_phuc_mac'];
            $tay_giun = $_POST['tay_giun'];

            // Chuẩn bị câu lệnh SQL
            $sql = "INSERT INTO all_product_cat (id_cat, chung_loai, ten_meo, anh, price, tuoi, can_nang, sex, nguon_goc, vaccin_4_benh, vaccin_dai, vaccin_phuc_mac, tay_giun)
            VALUES ('$id_cat', '$chung_loai', '$ten_meo', '$anh', $price, '$tuoi', $can_nang, $sex, '$nguon_goc', $vaccin_4_benh, $vaccin_dai, $vaccin_phuc_mac, $tay_giun)";

            // Thực thi câu lệnh SQL và kiểm tra kết quả
            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Sản phẩm đã thêm thành công');</script>";

                // Xử lý ảnh bổ sung
                if (isset($_FILES['additional_images']) && $_FILES['additional_images']['error'][0] == UPLOAD_ERR_OK) {
                    $totalFiles = count($_FILES['additional_images']['name']);

                    for ($i = 0; $i < $totalFiles; $i++) {
                        $fileTmpPath = $_FILES['additional_images']['tmp_name'][$i];
                        $fileName = $_FILES['additional_images']['name'][$i];
                        $fileNameCmps = explode(".", $fileName);
                        $fileExtension = strtolower(end($fileNameCmps));

                        if (in_array($fileExtension, $allowedExts)) {
                            // Tạo ID mới cho ảnh bổ sung
                            $id_cat_temp = intval(substr($id_cat, 1)); // Loại bỏ ký tự đầu tiên và chuyển đổi phần còn lại thành số nguyên
                            $newFileId = $id_cat_temp + $i + 1;
                            
                            // Đảm bảo định dạng với số không đứng đầu
                            $newFileIdFormatted = str_pad($newFileId, 4, '0', STR_PAD_LEFT);
                            $newid_cat = 'M'.$newFileIdFormatted;
                            $newFileName = '../images/M' . $newFileIdFormatted . '.' . $fileExtension;
                            $dest_file_path = $uploadFileDir . $newFileName;
                            
                            $sql = "INSERT INTO all_product_cat (id_cat, chung_loai, ten_meo, anh, price, tuoi, can_nang, sex, nguon_goc, vaccin_4_benh, vaccin_dai, vaccin_phuc_mac, tay_giun)
                            VALUES ('$newid_cat', '$chung_loai', '$ten_meo', '$newFileName', $price, '$tuoi', $can_nang, $sex, '$nguon_goc', $vaccin_4_benh, $vaccin_dai, $vaccin_phuc_mac, $tay_giun)";
                            $conn->query($sql);
                            if (move_uploaded_file($fileTmpPath, $dest_file_path)) {
                                echo "Ảnh bổ sung $newFileName đã được tải lên thành công!<br>";
                            } else {
                                echo 'Có lỗi khi di chuyển ảnh bổ sung đến thư mục đích.';
                            }
                        } else {
                            echo 'Chỉ cho phép tải lên các tệp ảnh có định dạng jpg.';
                        }
                    }
                }
            } else {
                echo "Lỗi: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo 'Có lỗi khi di chuyển tệp chính đến thư mục đích.';
        }
    } else {
        echo 'Chỉ cho phép tải lên các tệp ảnh có định dạng jpg.';
    }
}
?>
</body>
</html>
