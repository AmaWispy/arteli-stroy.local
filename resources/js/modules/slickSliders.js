import "slick-carousel";

const headerSlider = $(".header-slider").slick({
    dots: !0,
    infinite: !0,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: !0,
    autoplay: !0,
    autoplaySpeed: 5e3,
    arrows: !0,
    dotsClass: "header-slider__dots",
    responsive: [
        {
            breakpoint: 425,
            settings: {
                arrows: !1,
            },
        },
    ],
});

const feedbackSlider = $(".feedback-block").slick({
    infinite: !0,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: !0,
    autoplay: !0,
    autoplaySpeed: 5e3,
    arrows: !0,
});
