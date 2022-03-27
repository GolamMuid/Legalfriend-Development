// script for navbar

var hamburger = document.querySelector(".fa-bars");
var navlist = document.querySelector("#navlist");

hamburger.addEventListener("click", navSlide);

function navSlide() {
  navlist.classList.toggle("nav-click");
}

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

// script for calender zoom in and out;

var zoomInButton = document.querySelector("#zoom-in");
var zoomOutButton = document.querySelector("#zoom-out");
var calenderImage = document.querySelector(".calender-image");

var calenderHeight = document.querySelector(".calender-image").clientHeight;
var calenderWidth = document.querySelector(".calender-image").clientWidth;

zoomInButton.addEventListener("click", zoomIn);

function zoomIn() {
  calenderImage.style.height = calenderHeight + 100 + "px";
  calenderImage.style.width = calenderWidth + 100 + "px";
}
