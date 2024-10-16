document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector("#order-form form");
  form.addEventListener("submit", function (event) {
    event.preventDefault(); // Ngăn form gửi đi mặc định
    // Kiểm tra các trường thông tin
    const name = document.getElementById("name").value.trim();
    const phone = document.getElementById("phone").value.trim();
    const email = document.getElementById("email").value.trim();
    const address = document.getElementById("address").value.trim();
    const paymentMethod = document.querySelector(
      'input[name="payment_method"]:checked'
    );
    if (!name || !phone || !email || !address || !paymentMethod) {
      alert("Vui lòng nhập đầy đủ thông tin và chọn phương thức thanh toán.");
      return;
    }
    // Kiểm tra giỏ hàng có sản phẩm không
    if (cart.length === 0) {
      if (
        confirm(
          "Giỏ hàng của bạn đang trống. Bạn có muốn xem sản phẩm để thêm vào giỏ hàng không?"
        )
      ) {
        window.location.href = "../Product/Product.php";
      }
      return;
    }
    // Dữ liệu đơn hàng
    const orderData = {
      name: name,
      phone: phone,
      email: email,
      address: address,
      payment_method: paymentMethod.value,
      note: document.getElementById("note").value.trim(),
      items: cart,
    };
    // Gửi dữ liệu lên server
    fetch("./submit-order.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(orderData),
    })
      .then((response) => {
        if (!response.ok) {
          throw new Error("Network response was not ok");
        }
        return response.text();
      })
      .then((text) => {
        try {
          const data = JSON.parse(text);
          if (data.status === "success") {
            alert("Bạn đã đặt hàng thành công!");
            form.reset();
            cart = [];
            updateCart();
            displayCartItems();
          } else {
            alert("Lỗi đặt hàng: " + data.message);
          }
        } catch (e) {
          console.error("Lỗi phân tích JSON:", e);
          alert("Đã xảy ra lỗi khi đặt hàng: " + text);
        }
      })
      .catch((error) => {
        console.error("Lỗi:", error);
        alert("Đã xảy ra lỗi khi đặt hàng.");
      });
  });
  // Lấy danh sách sản phẩm từ localStorage
  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  // Hàm cập nhật giỏ hàng trong localStorage
  function updateCart() {
    localStorage.setItem("cart", JSON.stringify(cart));
  }
  // Hàm xử lý định dạng giá tiền để chuyển đổi thành số
  function formatPrice(price) {
    // Định dạng tiền
    if (typeof price !== "string") {
      price = price.toString();
    }
    return price.replace(/[^\d.-]/g, "");
  }
  function formatPriceDisplay(price) {
    return price.toLocaleString("vi-VN") + "đ";
  }
  // Hàm hiển thị tổng tiền
  function updateTotalPrice() {
    const totalPriceElement = document.querySelector(".total-price");
    const totalPrice = cart.reduce((total, item) => {
      const price = parseFloat(formatPrice(item.price));
      return total + price * item.quantity;
    }, 0);
    totalPriceElement.innerText = `Tổng tiền: ${formatPriceDisplay(
      totalPrice
    )}`;
  }
  // Hàm hiển thị thông tin sản phẩm trong giỏ hàng
  
  // Gọi hàm hiển thị khi trang được load
});
