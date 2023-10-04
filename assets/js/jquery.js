jQuery(document).ready(function($) {
    $('.slider').slick({
        dots: true,
        arrows: true,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 3000,
        adaptiveHeight: true,
    });
});
