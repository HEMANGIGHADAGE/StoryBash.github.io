jQuery(document).ready(function($){

    //nnc-hero-slider
    var hero_slider = new Swiper('.nnc-hero-slider-container', {
        slidesPerView: 1,
        speed: 1000,
        loop: true,
        // autoplay: {
        //     delay: 3000,
        // },
        pagination: {
            el: '.swiper-pagination-hero',
            clickable: true,
        },
    });
    
    //nnc-testimonial-container
    var hero_slider = new Swiper('.nnc-testimonial-container', {
        slidesPerView: 1,
        spaceBetween: 30,
        speed: 1000,
        loop: true,
        // autoplay: {
        //     delay: 3000,
        // },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

    // Scroll To Top
    $(window).scroll(function () {
        if ($(this).scrollTop() > 500) {
            $('.nnc-scroll-top').addClass("show");
        } else {
            $('.nnc-scroll-top').removeClass("show");
        }
    });

    $(".nnc-scroll-top").on("click", function () {
        $("html, body").animate({scrollTop: 0}, 600);
        return false;
    });

    // Aos
    AOS.init({
        once: true,
        easing: 'ease-out-back',
        duration: 1500,
        delay: 200,
    });

    // Micromodal
    MicroModal.init({
        openTrigger: 'data-custom-open', // [3]
        closeTrigger: 'data-custom-close', // [4]
        openClass: 'is-open', // [5]
        disableScroll: true, // [6]
        disableFocus: false, // [7]
        awaitOpenAnimation: true, // [8]
        awaitCloseAnimation: true, // [9]
        debugMode: true // [10]
    });
});
