<?php
include "../connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Sản Phẩm</title>
    <link rel="stylesheet" href="./fix_product.css">
</head>
<body>
    <h1>Sửa Sản Phẩm</h1>
    <?php
            if(isset($_POST['fix_cat'])){
                $id_cat = $_POST['fix_cat'];
                $sql = "SELECT * FROM all_product_cat where id_cat = '$id_cat'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
            ?>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="chung_loai">Chủng Loại:</label>
        <select id="chung_loai" name="chung_loai" required>
            <option value="muop" <?php echo ( $row['chung_loai'] == 'muop') ? 'selected' : ''; ?>>Mèo Mướp</option>
            <option value="vang" <?php echo ( $row['chung_loai'] == 'vang') ? 'selected' : ''; ?>>Mèo Vàng</option>
            <option value="tai_cup" <?php echo ($row['chung_loai'] == 'tai_cup') ? 'selected' : ''; ?>>Mèo tai cụp</option>
            <option value="Ai Cập Sphynx" <?php echo ($row['chung_loai'] == 'Ai Cập Sphynx') ? 'selected' : ''; ?>>Ai Cập Sphynx</option>
            <option value="Anh Lông Ngắn" <?php echo ($row['chung_loai'] == 'Anh Lông Ngắn') ? 'selected' : ''; ?>>Anh Lông Ngắn</option>
            <option value="Anh Lông Dài" <?php echo ($row['chung_loai'] == 'Anh Lông Dài') ? 'selected' : ''; ?>>Anh Lông Dài</option>
            <option value="Ba Tư" <?php echo ($row['chung_loai'] == 'Ba Tư') ? 'selected' : ''; ?>>Ba Tư</option>
            <option value="Chân Ngắn Munchkin" <?php echo ($row['chung_loai'] == 'Chân Ngắn Munchkin') ? 'selected' : ''; ?>>Chân Ngắn Munchkin</option>
            <option value="Ragdoll" <?php echo ($row['chung_loai'] == 'Ragdoll') ? 'selected' : ''; ?>>Ragdoll</option>
            <option value="Xiêm" <?php echo ( $row['chung_loai'] == 'Xiêm') ? 'selected' : ''; ?>>Mèo Xiêm</option>
        </select><br><br>

        <label for="id_cat">ID Cat:</label>
        <input type="text" id="id_cat" name="id_cat" value="<?php echo $row['id_cat'] ?>" required><br><br>

        <label for="ten_meo">Tên Mèo:</label>
        <input type="text" id="ten_meo" name="ten_meo" value="<?php echo $row['ten_meo'] ?>" required><br><br>

        <label for="anh">Ảnh:</label>
        <input type="file" id="anh" name="anh" accept="image/*"><br><br>

        <?php if (!empty($row['anh'])): ?>
            <p>Ảnh hiện tại:</p>
            <img src="<?php echo $row['anh']; ?>" alt="Ảnh hiện tại" style="width: 200px; height: 200px;">
        <?php endif; ?>

        <label for="price">Giá (vnd):</label>
        <input type="number" step="1000" min="0" id="price" name="price" value="<?php echo $row['price'] ?>" required><br><br>

        <label for="tuoi">Tuổi:</label>
        <input type="text" id="tuoi" name="tuoi" value="<?php echo $row['tuoi'] ?>" required><br><br>

        <label for="can_nang">Cân Nặng (kg):</label>
        <input type="number" step="0.1" min="0" id="can_nang" name="can_nang" value="<?php echo $row['can_nang'] ?>" required><br><br>

        <label for="sex">Giới Tính:</label>
        <select id="sex" name="sex" required>
            <option <?php echo ($row['sex'] == 1) ? 'selected' : ''; ?> value="1">Đực</option>
            <option <?php echo ($row['sex'] == 0) ? 'selected' : ''; ?> value="0">Cái</option>
        </select><br><br>

        <label for="nguon_goc">Nguồn Gốc:</label>
        <select id="nguon_goc" name="nguon_goc" required>
            <option <?php echo ($row['nguon_goc'] == 'Anh') ? 'selected' : ''; ?> value="Anh">Anh</option>
            <option <?php echo ($row['nguon_goc'] == 'Canada') ? 'selected' : ''; ?> value="Canada">Canada</option>
            <option <?php echo ($row['nguon_goc'] == 'Châu Âu') ? 'selected' : ''; ?> value="Châu Âu">Châu Âu</option>
            <option <?php echo ($row['nguon_goc'] == 'Hoa Kỳ') ? 'selected' : ''; ?> value="Hoa Kỳ">Hoa Kỳ</option>
            <option <?php echo ($row['nguon_goc'] == 'Nga') ? 'selected' : ''; ?> value="Nga">Nga</option>
            <option <?php echo ($row['nguon_goc'] == 'Nhật Bản') ? 'selected' : ''; ?> value="Nhật Bản">Nhật Bản</option>
            <option <?php echo ($row['nguon_goc'] == 'Pháp') ? 'selected' : ''; ?> value="Pháp">Pháp</option>
            <option <?php echo ($row['nguon_goc'] == 'Thái Lan') ? 'selected' : ''; ?> value="Thái Lan">Thái Lan</option>
            <option <?php echo ($row['nguon_goc'] == 'Trung Quốc') ? 'selected' : ''; ?> value="Trung Quốc">Trung Quốc</option>
            <option <?php echo ($row['nguon_goc'] == 'Việt Nam') ? 'selected' : ''; ?> value="Việt Nam">Việt Nam</option>
           
            <!-- Thêm các quốc gia khác nếu cần -->
        </select><br><br>

        <label for="vaccin_4_benh">Vaccin 4 Bệnh:</label>
        <select id="vaccin_4_benh" name="vaccin_4_benh" required>
            <option value="1" <?php echo ($row['vaccin_4_benh'] == 1) ? 'selected' : ''; ?>>Có</option>
            <option value="0" <?php echo ($row['vaccin_4_benh'] == 0) ? 'selected' : ''; ?>>Không</option>
        </select><br><br>

        <label for="vaccin_dai">Vaccin Dại:</label>
        <select id="vaccin_dai" name="vaccin_dai" required>
            <option value="1" <?php echo ($row['vaccin_dai'] == 1) ? 'selected' : ''; ?>>Có</option>
            <option value="0" <?php echo ($row['vaccin_dai'] == 0) ? 'selected' : ''; ?>>Không</option>
        </select><br><br>

        <label for="vaccin_phuc_mac">Vaccin Phúc Mạc:</label>
        <select id="vaccin_phuc_mac" name="vaccin_phuc_mac" required>
            <option value="1" <?php echo ($row['vaccin_phuc_mac'] == 1) ? 'selected' : ''; ?>>Có</option>
            <option value="0" <?php echo ($row['vaccin_phuc_mac'] == 0) ? 'selected' : ''; ?>>Không</option>
        </select><br><br>

        <label for="tay_giun">Tẩy Giun:</label>
        <select id="tay_giun" name="tay_giun" required>
            <option value="1" <?php echo ($row['tay_giun'] == 1) ? 'selected' : ''; ?>>Có</option>
            <option value="0" <?php echo ($row['tay_giun'] == 0) ? 'selected' : ''; ?>>Không</option>
        </select><br><br>

        <label for="additional_images">Thêm Ảnh:</label>
        <input type="file" id="additional_images" name="additional_images[]" accept="image/*" multiple><br><br>
        <input name="sua_san_pham" type="submit" value="Cập nhật">
        <?php
            }
            ?>
        
    </form>
    <?php
    // Kiểm tra xem tệp có được tải lên không và không có lỗi nào
if (isset($_POST['sua_san_pham'])) {
    if(isset($_FILES['anh']) && $_FILES['anh']['error'] == UPLOAD_ERR_OK){
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
                $sql = "UPDATE all_product_cat SET
                    chung_loai = '$chung_loai',
                    ten_meo = '$ten_meo',
                    anh = '$anh',
                    price = $price,
                    tuoi = '$tuoi',
                    can_nang = $can_nang,
                    sex = $sex,
                    nguon_goc = '$nguon_goc',
                    vaccin_4_benh = $vaccin_4_benh,
                    vaccin_dai = $vaccin_dai,
                    vaccin_phuc_mac = $vaccin_phuc_mac,
                    tay_giun = $tay_giun
                WHERE id_cat = '$id_cat'";

                // Thực thi câu lệnh SQL và kiểm tra kết quả
                if ($conn->query($sql) === TRUE) {
                    echo "<script>
                        alert('Sản phẩm đã được cập nhật thành công!');
                        window.location.href = '../manage/manage.php';
                    </script>";

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
                                    echo "<script> alert('Ảnh bổ sung $newFileName đã được tải lên thành công!<br>') </script>";
                                } else {
                                  
                                    echo "<script> alert('Có lỗi khi di chuyển ảnh bổ sung đến thư mục đích.') </script>";
                                }
                            } else {
                                
                                echo "<script> alert('Chỉ cho phép tải lên các tệp ảnh có định dạng jpg.') </script>";
                            }
                        }
                    }
                } else {
                    echo "Lỗi: " . $sql . "<br>" . $conn->error;
                }
            } else {
                
                echo "<script> alert('Có lỗi khi di chuyển ảnh bổ sung đến thư mục đích.') </script>";
            }
        } else {
            echo "<script> alert('Chỉ cho phép tải lên các tệp ảnh có định dạng jpg.') </script>";
        }
    }else{
        $id_cat = $_POST['id_cat'];
        $chung_loai = $_POST['chung_loai'];
        $ten_meo = $_POST['ten_meo'];
        $price = $_POST['price'];
        $tuoi = $_POST['tuoi'];
        $can_nang = $_POST['can_nang'];
        $sex = $_POST['sex'];
        $nguon_goc = $_POST['nguon_goc'];
        $vaccin_4_benh = $_POST['vaccin_4_benh'];
        $vaccin_dai = $_POST['vaccin_dai'];
        $vaccin_phuc_mac = $_POST['vaccin_phuc_mac'];
        $tay_giun = $_POST['tay_giun'];
        $sql = "UPDATE all_product_cat SET
            chung_loai = '$chung_loai',
            ten_meo = '$ten_meo',
            price = $price,
            tuoi = '$tuoi',
            can_nang = $can_nang,
            sex = $sex,
            nguon_goc = '$nguon_goc',
            vaccin_4_benh = $vaccin_4_benh,
            vaccin_dai = $vaccin_dai,
            vaccin_phuc_mac = $vaccin_phuc_mac,
            tay_giun = $tay_giun
        WHERE id_cat = '$id_cat'";
        if ($conn->query($sql) === TRUE) {
            echo "<script>
            alert('Sản phẩm đã được cập nhật thành công!');
            window.location.href = '../manage/manage.php';
          </script>";
        } else {
            echo "Lỗi: " . $sql . "<br>" . $conn->error;
        }
    }
    
} else {
}
    ?>
</body>
</html>
