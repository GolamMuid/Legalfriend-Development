// Script for swiper

var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  loop: true,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
});

const facebookBtn = document.querySelector("#fb-share");
let postUrl = encodeURI(document.location.href);

console.log(postUrl);

facebookBtn.addEventListener("click", fbShare);

function fbShare() {
  facebookBtn.setAttribute(
    "href",
    `https://www.facebook.com/sharer.php?u=${postUrl}`
  );
}
