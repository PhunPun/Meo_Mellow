document.getElementById('loyalty-form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    
    // Kiểm tra định dạng email
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailPattern.test(email)) {
        alert("Vui lòng nhập email hợp lệ.");
        document.getElementById('email').focus();
        return;
    }
    
    // Kiểm tra định dạng số điện thoại (ví dụ: phải có 10 số)
    const phonePattern = /^\d{10}$/;
    if (!phonePattern.test(phone)) {
        alert("Vui lòng nhập số điện thoại hợp lệ (10 số).");
        document.getElementById('phone').focus();
        return;
    }
    
    // Hiển thị thông báo gửi thành công lên màn hình
    document.getElementById('response').textContent = "Bạn đã gửi thành công!";
    
    // Xử lý đăng ký (giả lập)
    document.getElementById('response').textContent = `Cảm ơn ${name}, bạn đã đăng ký thành công chương trình Khách Hàng Thân Thiết!`;
    
    // Xóa các giá trị trong form sau khi đăng ký thành công
    document.getElementById('loyalty-form').reset();
});
