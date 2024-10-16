document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('customer-form');
    const table = document.getElementById('customer-table');
    const modal = document.getElementById('order-modal');
    const closeBtn = document.querySelector('.close-btn');
    const orderDetailsDiv = document.getElementById('order-details');
    
    // Xử lý sự kiện khi nhấn nút sửa
    table.addEventListener('click', function(event) {
        if (event.target.classList.contains('edit-btn')) {
            const id = event.target.getAttribute('data-id');
            fetchCustomerData(id);
        }
        // Xử lý sự kiện khi nhấn nút xóa
        if (event.target.classList.contains('delete-btn')) {
            const id = event.target.getAttribute('data-id');
            if (confirm('Bạn có chắc chắn muốn xóa khách hàng này?')) {
                deleteCustomer(id);
            }
        }
        // Xử lý sự kiện khi nhấn nút chi tiết
        if (event.target.classList.contains('details-btn')) {
            const id = event.target.getAttribute('data-id');
            showOrderDetails(id);
        }
    });
    // Xử lý sự kiện gửi form
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData(form);
        saveCustomer(formData);
    });
    function fetchCustomerData(id) {
    }
    function deleteCustomer(id) {
        fetch('delete_customer.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `id=${id}`
        })
        .then(response => response.text())
        .then(result => {
            if (result === 'success') {
                location.reload();
            } else {
                alert('Có lỗi xảy ra khi xóa khách hàng.');
            }
        });
    }
    function saveCustomer(formData) {
        fetch('save_customer.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(result => {
            if (result === 'success') {
                location.reload();
            } else {
                alert('Có lỗi xảy ra khi lưu khách hàng.');
            }
        });
    }
    function showOrderDetails(customerId) {
        fetch('get_orders.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `customer_id=${customerId}`
        })
        .then(response => response.json())
        .then(data => {
            let detailsHtml = '<h2>Chi Tiết Đơn Hàng</h2>';
            data.orders.forEach(order => {
                detailsHtml += `<div class="order-detail">
                    <h3>Đơn hàng ID: ${order.id}</h3>
                    <p>Ngày đặt: ${order.order_date}</p>
                    <p>Trạng thái: ${order.trang_thai}</p>
                    <p>Tổng tiền: ${order.total} VND</p>
                    <p>Địa chỉ giao hàng: ${order.shipping_address}</p>
                    <p>Phương thức thanh toán: ${order.payment_method}</p>
                    <p>Ghi chú: ${order.note}</p>
                    <h4>Sản phẩm:</h4>
                    <ul>`;
                order.products.forEach(product => {
                    detailsHtml += `<li>
                        <img src="${product.anh}" alt="${product.ten_meo}" width="100">
                        <p>Tên: ${product.ten_meo}</p>
                        <p>Giá: ${product.price} VND</p>
                        <p>Tuổi: ${product.tuoi}</p>
                        <p>Cân nặng: ${product.can_nang}</p>
                        <p>Giới tính: ${product.sex}</p>
                        <p>Nguồn gốc: ${product.nguon_goc}</p>
                        <p>Vắc xin 4 bệnh: ${product.vaccin_4_benh}</p>
                        <p>Vắc xin dài: ${product.vaccin_dai}</p>
                        <p>Vắc xin phục mạc: ${product.vaccin_phuc_mac}</p>
                        <p>Tẩy giun: ${product.tay_giun}</p>
                    </li>`;
                });
                detailsHtml += `</ul></div>`;
            });
            orderDetailsDiv.innerHTML = detailsHtml;
            modal.style.display = 'block';
        });
    }
    closeBtn.addEventListener('click', function() {
        modal.style.display = 'none';
    });
    window.onclick = function(event) {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    };
});
