
var swiper = new Swiper(".mySwiper", {
});
document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll('.mySwiper').forEach(swiperEl => {
    const config = JSON.parse(swiperEl.getAttribute('data-swiper'));
    new Swiper(swiperEl, config);
  });
});
