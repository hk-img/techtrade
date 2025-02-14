var swiper = new Swiper(".mySwiper ", {
});
document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll('.mySwiper').forEach(swiperEl => {
    const config = JSON.parse(swiperEl.getAttribute('data-swiper'));
    new Swiper(swiperEl, config);
  });
});


let isOpen = true;

function toggleContent() {
  var content = document.getElementById("jobContent");
  var iconPath = document.getElementById("iconPath");

  if (isOpen) {
    content.style.maxHeight = "0px";
    content.style.opacity = "0";
    iconPath.setAttribute("d", "M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"); // Plus icon
  } else {
    content.style.maxHeight = "1000px";
    content.style.opacity = "1";
    iconPath.setAttribute("d", "M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"); // Minus icon
  }

  isOpen = !isOpen;
}