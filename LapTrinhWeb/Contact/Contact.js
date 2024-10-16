var w;

// Mở cửa sổ hỗ trợ
function support() {
    w = window.open(
      "../../LapTrinhWeb/Support/Support.php",
      "sp",
      "width=500, height=500, top=50, left=600"
    );
    w.focus();
}

// Mở cửa sổ đăng nhập
function supportlg() {
    w = window.open(
      "../../LapTrinhWeb/Login/Login.php",
      "lg",
      "width=500, height=500, top=50, left=600"
    );
    w.focus();
}

window.onload = () => {
    const loginBox = document.getElementById('login-box');
    const registerBox = document.getElementById('register-box');
    const showRegister = document.getElementById('show-register');
    const showLogin = document.getElementById('show-login');
    const loginForm = document.getElementById('login-form');
    const registerForm = document.getElementById('register-form');
    const userInfo = document.getElementById('user-info');
    const userUsername = document.getElementById('user-username');
    const userEmail = document.getElementById('user-email');
    const userPhone = document.getElementById('user-phone');
    const logoutBtn = document.getElementById('logout-btn');

    // Kiểm tra xem người dùng đã đăng nhập chưa
    const storedUsername = localStorage.getItem('username');
    const storedEmail = localStorage.getItem('email');
    const storedPhone = localStorage.getItem('phone');

    if (storedUsername && storedEmail && storedPhone) {
        // Nếu đã đăng nhập, ẩn các form và hiển thị thông tin người dùng
        loginBox.style.display = 'none';
        registerBox.style.display = 'none';
        userInfo.style.display = 'block';
        userUsername.value = storedUsername;  // Sử dụng .value để cập nhật thông tin vào input
        userEmail.value = storedEmail;
        userPhone.value = storedPhone;
    } else {
        // Nếu chưa đăng nhập, hiển thị form đăng nhập hoặc đăng ký
        if (loginBox && registerBox && showRegister && showLogin) {
            const registeredUsername = localStorage.getItem('registeredUsername');
            if (registeredUsername) {
                loginBox.style.display = 'block';
                registerBox.style.display = 'none';
                document.getElementById('login-username').value = registeredUsername;
                document.getElementById('login-password').focus();
                localStorage.removeItem('registeredUsername');
            } else {
                registerBox.style.display = 'block';
                loginBox.style.display = 'none';
            }

            showRegister.addEventListener('click', () => {
                loginBox.style.display = 'none';
                registerBox.style.display = 'block';
            });

            showLogin.addEventListener('click', () => {
                registerBox.style.display = 'none';
                loginBox.style.display = 'block';
            });
        }
    }

    // Xử lý đăng ký người dùng
    if (registerForm) {
        registerForm.addEventListener('submit', function(event) {
            event.preventDefault();
            const username = document.getElementById('register-username').value;
            const password = document.getElementById('register-password').value;
            const email = document.getElementById('register-email').value;
            const phone = document.getElementById('register-phone').value;

            // Kiểm tra mật khẩu phải có ít nhất 6 ký tự
            if (password.length < 6) {
                alert("Mật khẩu phải có ít nhất 6 ký tự.");
                document.getElementById('register-password').focus();
                return;
            }

            // Kiểm tra định dạng email
            const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            if (!emailPattern.test(email)) {
                alert("Vui lòng nhập email hợp lệ.");
                document.getElementById('register-email').focus();
                return;
            }

            // Kiểm tra định dạng số điện thoại (ví dụ: phải có 10 số)
            const phonePattern = /^\d{10}$/;
            if (!phonePattern.test(phone)) {
                alert("Vui lòng nhập số điện thoại hợp lệ (10 số).");
                document.getElementById('register-phone').focus();
                return;
            }

            // Lưu thông tin người dùng vào localStorage và hiển thị thông báo
            localStorage.setItem('registeredUsername', username);
            localStorage.setItem('email', email);
            localStorage.setItem('phone', phone);
            alert("Đăng ký thành công! Vui lòng đăng nhập.");
            loginBox.style.display = 'block';
            registerBox.style.display = 'none';
        });
    }
    
    // Xử lý đăng nhập
    if (loginForm) {
        loginForm.addEventListener('submit', function(event) {
            event.preventDefault();
            const username = document.getElementById('login-username').value;
            const password = document.getElementById('login-password').value;
            const registeredUsername = localStorage.getItem('registeredUsername');
            const registeredEmail = localStorage.getItem('email');
            const registeredPhone = localStorage.getItem('phone');

            // Kiểm tra xem người dùng đã đăng ký chưa
            if (username !== registeredUsername) {
                alert("Tên đăng nhập không tồn tại. Vui lòng đăng ký trước.");
                registerBox.style.display = 'block';
                loginBox.style.display = 'none';
            } else {
                // Lưu thông tin đăng nhập vào localStorage
                localStorage.setItem('username', username);
                localStorage.setItem('email', registeredEmail);
                localStorage.setItem('phone', registeredPhone);

                // Cập nhật thông tin người dùng trên trang chủ
                const userDisplay = window.opener ? window.opener.document.getElementById('user-display') : null;
                if (userDisplay) {
                    userDisplay.innerHTML = `<span id="username">${username}</span>`;
                }

                // Đóng cửa sổ đăng nhập
                window.close();
            }
        });
    }
    
    // Xử lý đăng xuất
    if (logoutBtn) {
        logoutBtn.addEventListener('click', () => {
            localStorage.removeItem('username');
            localStorage.removeItem('email');
            localStorage.removeItem('phone');
            userInfo.style.display = 'none';
            loginBox.style.display = 'block';
            registerBox.style.display = 'none';
            
            // Xóa tên người dùng trên trang chủ
            const userDisplay = window.opener ? window.opener.document.getElementById('user-display') : null;
            if (userDisplay) {
                userDisplay.innerHTML = 'Đăng Nhập';
            }
            
            window.close(); // Đóng cửa sổ đăng nhập
        });
    }
}

