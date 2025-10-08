

//menu
const menu = document.querySelector(".menu");
const openMenuBtn = document.querySelector(".open-menu-btn");
const closeMenuBtn = document.querySelector(".close-menu-btn"); 

[openMenuBtn, closeMenuBtn].forEach((btn) => {
  btn.addEventListener("click", () => {
    menu.classList.toggle("open");
    menu.style.transition = "transform 0.5s ease";
  });
});

menu.addEventListener("transitionend" , function() {
  this.removeAttribute("style");
});

menu.querySelectorAll(".dropdown > i").forEach((arrow) => {
  arrow.addEventListener("click", function() {
    this.closest(".dropdown").classList.toggle("active");
  });
});



//contact form
const inputs = document.querySelectorAll(".input");

function focusFunc() {
  let parent = this.parentNode;
  parent.classList.add("focus");
}

function blurFunc() {
  let parent = this.parentNode;
  if (this.value == "") {
    parent.classList.remove("focus");
  }
}

inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
});



function redirectCart(){
  window.location.hred = "/pages/cart.html";
}


 // Function to add products to the cart
 function addToCart(id, name, price, img) {
  let cart = JSON.parse(localStorage.getItem('cart')) || [];

  // Check if product already in cart, then increase quantity
  const existingProductIndex = cart.findIndex(item => item.id === id);
  if (existingProductIndex > -1) {
      cart[existingProductIndex].quantity += 1;
  } else {
      cart.push({ id, name, price, img, quantity: 1 });
  }

  // Save updated cart to localStorage
  localStorage.setItem('cart', JSON.stringify(cart));

  // Optional: Alert user when product is added
  alert(name + ' has been added to the cart!');
}