document.addEventListener('DOMContentLoaded', function () {
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

});
