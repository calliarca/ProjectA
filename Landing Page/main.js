document.addEventListener("DOMContentLoaded", function () {
    const nav = document.querySelector("nav");

    window.addEventListener("scroll", () => {
        if (window.pageYOffset > 60) {
            nav.classList.add("scrolled");
        } else {
            nav.classList.remove("scrolled");
        }
    });
});

    // Initialize Swiper
    var swiper = new Swiper("swiper-container", {
      slidesPerView: 3,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });