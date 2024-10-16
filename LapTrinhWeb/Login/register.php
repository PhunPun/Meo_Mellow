
<?php
include "../connect.php"; // Kết nối đến database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    // Kiểm tra độ dài mật khẩu
    if (strlen($password) < 6 || strlen($password) > 24) {
        echo "<script>alert('Mật khẩu phải từ 6 đến 24 ký tự!');
        window.location.href = './Login.php';
        </script>";
        exit();
    }
    // Kiểm tra định dạng email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Email không hợp lệ!');
        window.location.href = './Login.php';
        </script>";
        exit();
    }
    // Kiểm tra định dạng số điện thoại
    if (!preg_match('/^[0-9]{10}$/', $phone)) {
        echo "<script>alert('Số điện thoại không hợp lệ!');
        window.location.href = './Login.php';
        </script>";
        exit();
    }
    // Kiểm tra tên đăng nhập có tồn tại chưa
    $query = "SELECT * FROM tai_khoan WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        echo "<script>alert('Tên đăng nhập đã tồn tại!');
        window.location.href = './Login.php';
        </script>";
        exit();
    } else {
        // Thêm người dùng mới vào database
        
        $query = "INSERT INTO tai_khoan (username, password, email, phone) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssss", $username, $password, $email, $phone);
        if ($stmt->execute()) {
            echo "<script>
                alert('Đăng ký thành công!');
                window.location.href = './login.php'; // Chuyển hướng tới trang đăng nhập
            </script>";
        } else {
            echo "<script>alert('Có lỗi xảy ra khi đăng ký!');
            window.location.href = './Login.php';
            </script>";
        }
    }
}
