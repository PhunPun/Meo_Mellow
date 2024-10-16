document.addEventListener('DOMContentLoaded', () => {
    const confirmButtons = document.querySelectorAll('.confirm-btn');
    const deleteButtons = document.querySelectorAll('.delete-btn');
    confirmButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            const id = e.target.getAttribute('data-id');
            if (confirm('Bạn có chắc chắn xác nhận đơn hàng chưa?')) {
                fetch(`confirm-order.php?id=${id}`, {
                    method: 'GET'
                })
                .then(response => response.text())
                .then(result => {
                    alert(result);
                    const row = button.closest('tr');
                    const actionCell = row.querySelector('.action-cell');
                    actionCell.innerHTML = `
                        <button class='detail-btn' data-id='${id}'>Detail</button>
                        <button class='delete-btn' data-id='${id}'>Delete</button>
                    `;
                    const detailButton = actionCell.querySelector('.detail-btn');
                    detailButton.addEventListener('click', () => {
                        window.location.href = `order-detail.php?id=${id}`; 
                    });
                    const deleteButton = actionCell.querySelector('.delete-btn');
                    deleteButton.addEventListener('click', (e) => {
                        const id = e.target.getAttribute('data-id');
                        if (confirm('Bạn có chắc chắn muốn xóa đơn hàng không?')) {
                            fetch(`delete-order.php?id=${id}`, {
                                method: 'GET'
                            })
                            .then(response => response.json()) 
                            .then(result => {
                                alert(result.message); 
                                if (result.status === 'success') {
                                    const row = button.closest('tr');
                                    row.remove();
                                }
                            })
                            .catch(error => console.error('Error:', error));
                        }
                    });
                })
                .catch(error => console.error('Error:', error));
            }
        });
    });
    deleteButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            const id = e.target.getAttribute('data-id');
            if (confirm('Bạn có chắc chắn muốn xóa đơn hàng không?')) {
                fetch(`delete-order.php?id=${id}`, {
                    method: 'GET'
                })
                .then(response => response.json())
                .then(result => {
                    alert(result.message);
                    if (result.status === 'success') {
                        const row = button.closest('tr');
                        row.remove();
                    }
                })
                .catch(error => console.error('Error:', error));
            }
        });
    });
    const detailButtons = document.querySelectorAll('.detail-btn');
    detailButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            const id = e.target.getAttribute('data-id');
            window.location.href = `order-detail.php?id=${id}`;
        });
    });
});
