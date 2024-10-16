// form đăng nhập
var w;
function support() {
  w = window.open(
    "Login.html",
    "lg",
    "width=500, height=500, top=50,left=600"
  );
  w.focus();
  //
document.addEventListener("scroll", function () {
    const footer = document.getElementById("footer");
    const rightContact = document.querySelector(".right-contact");
  
    const footerRect = footer.getBoundingClientRect();
    const rightContactRect = rightContact.getBoundingClientRect();
  
    // Kiểm tra xem footer có nằm trong viewport không
    if (footerRect.top < window.innerHeight) {
      rightContact.style.position = "absolute";
      rightContact.style.top = `${window.scrollY + footerRect.top - rightContactRect.height}px`;
    } else {
      rightContact.style.position = "fixed";
      rightContact.style.top = "50%";
      rightContact.style.transform = "translateY(-50%)";
    }
  });
}