// Script for swiper

var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  loop: true,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
});

var swiper = new Swiper(".vidSwiper", {
  slidesPerView: 1,
  loop: true,
  // autoplay: {
  //   delay: 4000,
  //   disableOnInteraction: false,
  // },
});

// script for messenger icon

var cross = document.querySelector(".cross-button");
var messenger = document.querySelector(".messenger-mobile-container");
cross.addEventListener("click", close);

function close() {
  messenger.style.display = "none";
}
