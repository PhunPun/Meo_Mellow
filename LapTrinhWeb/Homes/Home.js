// -------------------------------------------------------see other ---------------------------------------------
var otherImages = document.querySelectorAll('.view-see-other-img')
var otherImageCover = document.querySelector('.view-see-other-over')

function seeOtherPrev(){
    scrollOtherImg('prev')
}
function seeOtherNext(){
    scrollOtherImg('next')
}
function scrollOtherImg(type){
    var otherImagesDom = document.querySelectorAll('.view-see-other-img');
    if (type === "next") {
            otherImageCover.appendChild(otherImagesDom[0]);
    } else {
       otherImageCover.prepend(otherImagesDom[otherImagesDom.length -1]);
    }
}
window.onload = () => {
    const userDisplay = document.getElementById('user-display');
    const accountInfo = document.getElementById('account-info');
    const storedUsername = localStorage.getItem('username');

    if (userDisplay) {
        if (storedUsername) {
            userDisplay.innerHTML = `<span id="username">${storedUsername}</span>`;
            
            // Hiển thị thông tin tài khoản khi nhấp vào tên đăng nhập
            userDisplay.addEventListener('click', () => {
                accountInfo.style.display = accountInfo.style.display === 'none' ? 'block' : 'none';
            });

            // Hiển thị tên người dùng
            const usernameSpan = document.getElementById('username');
            if (usernameSpan) {
                usernameSpan.textContent = storedUsername;
            }

            // Xử lý đăng xuất
            const logoutBtn = document.getElementById('logout-btn');
            if (logoutBtn) {
                logoutBtn.addEventListener('click', () => {
                    localStorage.removeItem('username');
                    userDisplay.innerHTML = 'Đăng Nhập';
                    accountInfo.style.display = 'none';
                });
            }
        } else {
            userDisplay.textContent = 'Đăng Nhập';
        }
    }
}
