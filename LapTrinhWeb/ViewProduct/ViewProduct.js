// ----------------------------------------smail img------------------------------------------------------------
// Chọn tất cả các phần tử có class view-main-left-small-img
var smallImages = document.querySelectorAll(".view-main-left-small-img");
var smallImagesContainer = document.querySelector(".view-main-left-small");
var smallActive = document.querySelector(".small-img-active");
var hidenText = document.querySelectorAll(".small-img-text");
// Chọn phần tử hiển thị ảnh lớn
var bigImage = document.querySelector(".view-main-left-big-img");
var curentIndex = 0;
document.addEventListener("DOMContentLoaded", function () {
  smallImages = document.querySelectorAll(".view-main-left-small-img");
  hidenText = document.querySelectorAll(".small-img-text");
  if (smallImages.length > 6) {
    var imgHidenEd = smallImages.length - 6;
    hidenText.forEach(function (hidentext) {
      hidentext.textContent = "+ " + imgHidenEd;
    });
  }
});
// Lặp qua từng phần tử nhỏ và thêm sự kiện click
smallImages.forEach(function (smallImage, index) {
  smallImage.addEventListener("click", function () {
    bgImage = getComputedStyle(smallImage).backgroundImage;
    bigImage.style.backgroundImage = bgImage;
    curentIndex = index;
    smallActive.classList.remove("small-img-active");
    smallImage.classList.add("small-img-active");
    smallActive = document.querySelector(".small-img-active");
  });
});
function mainLeftPrev() {
  smallImages[smallImages.length - 1].click();
  showSmallList("prev");
}
function mainLeftNext() {
  smallImages[1].click();
  showSmallList("next");
}
function showSmallList(type) {
  smallImageDom = document.querySelectorAll(".view-main-left-small-img");
  if (type === "prev") {
    smallImagesContainer.prepend(smallImageDom[smallImageDom.length - 1]);
  } else if (type === "next") {
    smallImagesContainer.appendChild(smallImageDom[0]);
  } else {
  }
  smallImages = document.querySelectorAll(".view-main-left-small-img");
  smallActive.classList.remove("small-img-active");
  smallImages[0].classList.add("small-img-active");
  smallActive = document.querySelector(".small-img-active");
}
// -------------------------------------------------------see other ---------------------------------------------
var otherImages = document.querySelectorAll(".view-see-other-img");
var otherImageCover = document.querySelector(".view-see-other-over");

function seeOtherPrev() {
  scrollOtherImg("prev");
}
function seeOtherNext() {
  scrollOtherImg("next");
}
function scrollOtherImg(type) {
  var otherImagesDom = document.querySelectorAll(".view-see-other-img");
  if (type === "next") {
    otherImageCover.appendChild(otherImagesDom[0]);
  } else {
    otherImageCover.prepend(otherImagesDom[otherImagesDom.length - 1]);
  }
}
function addToCart() {
  // Lấy thông tin sản phẩm từ trang
  const productName = document.querySelector(".main-right-name").innerText.trim();
  const productId = document.querySelector(".main-right-name-id").innerText.trim();
  const productPriceText = document.querySelector(".main-right-price span").innerText.trim();
  const productImage = document.querySelector(".view-main-left-big-img").style.backgroundImage;
    // Chuyển đổi giá tiền từ định dạng có dấu chấm thành số
    let productPrice = parseFloat(productPriceText.replace(/\./g, '').replace('đ', '').trim());

  // Tạo đối tượng sản phẩm
  const product = {
    id: productId,
    name: productName,
    price: productPrice,
    image: productImage.slice(5, -2), // Loại bỏ 'url("")' để lấy đường dẫn ảnh
    quantity: 1,
  };

  // Lưu sản phẩm vào localStorage
  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  cart.push(product);
  localStorage.setItem("cart", JSON.stringify(cart));
  // Thêm sản phẩm vào giỏ hàng
  function addToCart() {
    // Kiểm tra xem đã có giỏ hàng trong localStorage chưa
    let cart = JSON.parse(localStorage.getItem("cart")) || [];

    // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
    const existingProductIndex = cart.findIndex(
      (item) => item.id === product.id
    );

    if (existingProductIndex !== -1) {
      // Nếu có, tăng số lượng sản phẩm
      cart[existingProductIndex].quantity += 1;
    } else {
      // Nếu chưa có, thêm sản phẩm vào giỏ hàng với số lượng là 1
      product.quantity = 1;
      cart.push(product);
    }

    // Cập nhật lại giỏ hàng trong localStorage
    localStorage.setItem("cart", JSON.stringify(cart));

    // Hiển thị thông báo thêm vào giỏ hàng thành công
    alert(`${product.name} đã được thêm vào giỏ hàng!`);
  }

  // Xử lý sự kiện khi nhấn nút "Thêm vào giỏ hàng"
  document
    .querySelector(".main-price-button-add")
    .addEventListener("click", addToCart);
  // Hiển thị thông báo
  alert(`Đã thêm ${productName} vào giỏ hàng!`);

  // Tùy chọn: Cập nhật giỏ hàng trên giao diện, nếu có
  updateCartUI();
}

function updateCartUI() {
  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  let totalPrice = cart.reduce((acc, product) => acc + (product.price * product.quantity), 0);

  // Giả sử bạn có một phần tử HTML với id="total-price" để hiển thị tổng tiền
  document.getElementById("total-price").innerText = totalPrice.toLocaleString('vi-VN') + " đ";
}
