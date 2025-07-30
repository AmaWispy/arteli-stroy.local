import Swiper from "swiper";
import {
    Navigation,
    Pagination,
    Autoplay,
    Keyboard,
    Mousewheel,
} from "swiper/modules";

export const swiperContainer = new Swiper(".swiper-container", {
    modules: [Navigation, Pagination, Autoplay, Keyboard, Mousewheel],
    cssMode: !0,
    autoplay: {
        delay: 3500,
        disableOnInteraction: !0,
    },
    speed: 300,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
    },
    mousewheel: !0,
    keyboard: !0,
});

export const partnersSwiper = new Swiper(".partners__slider", {
    modules: [Navigation, Autoplay],

    navigation: {
        nextEl: ".partners__slider-next",
        prevEl: ".partners__slider-prev",
    },

    loop: true,
    speed: 300,
    autoplay: {
        delay: 5000,
    },
});

export const partnersMobileSwiper = new Swiper(".partners__mobile-slider", {
    modules: [Pagination, Autoplay],

    loop: true,
    speed: 300,
    autoplay: {
        delay: 5000,
    },

    pagination: {
        el: ".swiper-pagination",
        type: "bullets",
    },
});

export const doneSlider = new Swiper(".done__slider", {
    modules: [Autoplay, Navigation, Pagination],

    loop: true,
    speed: 300,
    autoplay: {
        delay: 5000,
    },
    spaceBetween: 70,

    navigation: {
        nextEl: ".done__slider-next",
        prevEl: ".done__slider-prev",
    },
    breakpoints: {
        1200: {
            slidesPerView: 3,
        },
        992: {
            slidesPerView: 2,

            pagination: false,
        },
        320: {
            slidesPerView: 1,

            pagination: {
                el: ".done__pagination",
                type: "bullets",
            },

            navigation: false,
        },
    },
});
