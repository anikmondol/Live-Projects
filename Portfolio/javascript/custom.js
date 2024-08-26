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

    var swiper = new Swiper(".mySwiper1", {
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });


    var swiper = new Swiper(".mySwiper2", {
        slidesPerView: 5,
        spaceBetween: 40,
        freeMode: true,
        loop: true
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
