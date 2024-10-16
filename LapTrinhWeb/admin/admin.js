function loadIframe(page, element) {
    document.getElementById('content_iframe').src = page;
    const menuItems = document.querySelectorAll('.product-subMenu2 .menu-kind');
    menuItems.forEach(item => item.classList.remove('product-active-menu'));
    element.classList.add('product-active-menu');
    document.querySelector('.manage_product').style.display = "none";
}

function loadIframe1(page, element) {
    document.getElementById('content_iframe').src = page;
    const menuItems = document.querySelectorAll('.product-subMenu3 .menu-kind1');
    menuItems.forEach(item => item.classList.remove('product-active-menu'));
    element.classList.add('product-active-menu');
}

function choose(element) {
    const menuItems = document.querySelectorAll('.product-subMenu2 .menu-kind');
    menuItems.forEach(item => item.classList.remove('product-active-menu'));
    element.classList.add('product-active-menu');
    document.querySelector('.manage_product').style.display = "block";
}
let isMenuVisible = true;

function toggleMenu() {
    const menu = document.querySelector('.product-menu');
    const mainContent = document.querySelector('.product-main-option-over');
    const toggleIcon = document.querySelector('.toggle-icon');

    if (isMenuVisible) {
        // Ẩn menu
        menu.classList.add('product-menu-hidden');
        mainContent.style.marginLeft = "-278px"; // Đặt lề trái của phần chính về 0
    } else {
        // Hiển thị menu
        menu.classList.remove('product-menu-hidden');
        mainContent.style.marginLeft = "5px"; // Đặt lề trái của phần chính để làm cho menu không bị đẩy ra ngoài
    }

    isMenuVisible = !isMenuVisible; // Đảo trạng thái của menu
}



