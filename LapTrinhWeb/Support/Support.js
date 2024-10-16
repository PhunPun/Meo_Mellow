document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('form').addEventListener('submit', function(event) {
        event.preventDefault(); // Ngăn chặn hành động gửi mặc định của biểu mẫu

        // Lấy dữ liệu từ biểu mẫu (nếu cần)
        const name = document.getElementById('name').value;
        const tel = document.getElementById('tel').value;
        const hotro = document.getElementById('hotro').value;

        // Bạn có thể thực hiện bất kỳ hành động nào với dữ liệu này nếu cần

        // Thông báo cho người dùng và đóng cửa sổ
        alert('Bạn đã gửi thành công!');
        window.close(); 
    });
});
