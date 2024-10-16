<?php
session_start();
header('Content-Type: application/json');

// Kiểm tra xem người dùng đã đăng nhập chưa
if (isset($_SESSION['username'])) {
    echo json_encode([
        'loggedIn' => true,
        'username' => $_SESSION['username'],
        'email' => $_SESSION['email'],
        'phone' => $_SESSION['phone']
    ]);
} else {
    echo json_encode(['loggedIn' => false]);
}
?>
