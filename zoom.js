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

zoomOutButton.addEventListener("click", zoomOut);

function zoomOut() {
  calenderImage.style.height = calenderHeight + "px";
  calenderImage.style.width = calenderWidth + "px";
}
