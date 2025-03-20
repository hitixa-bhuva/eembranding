
$(document).ready(function () {
    $('.brand-slider').slick({
        dots: false,
        infinite: true,
        speed: 1000,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        slidesToShow: 6, /* Always show 6 logos */
        slidesToScroll: 2,
        responsive: [
            { breakpoint: 1200, settings: { slidesToShow: 6, slidesToScroll: 2 } },
            { breakpoint: 992, settings: { slidesToShow: 6, slidesToScroll: 2 } },
            { breakpoint: 767, settings: { slidesToShow: 6, slidesToScroll: 2 } },
            { breakpoint: 575, settings: { slidesToShow: 6, slidesToScroll: 2 } }
        ]
    });
});