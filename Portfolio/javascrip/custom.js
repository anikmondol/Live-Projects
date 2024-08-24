document.addEventListener('DOMContentLoaded', function () {

    // Hero Slider
    // let heroSlider = new Swiper(".heroSwiper", {
    //   centeredSlides: true,
    //   autoplay: {
    //     delay: 5000,
    //     disableOnInteraction: false,
    //   },
    //   pagination: {
    //     el: ".swiper-pagination",
    //     dynamicBullets: true,
    //   },
    //   loop: true,
    //   effect: "cube"
    // });
  
    // Team slider
  
    var swiper = new Swiper(".mySwiper", {
        loop: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
  
    // service
  
    // var serviceSwiper = new Swiper(".serviceSwiper", {
    //   slidesPerView: 3,
    //   spaceBetween: 40,
    //   loop: true,
    //   navigation: {
    //     nextEl: ".swiper-button-next",
    //     prevEl: ".swiper-button-prev",
    //   },
    // });
    
  });
  