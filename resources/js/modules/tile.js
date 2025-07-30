import Swiper from "swiper";
import { Navigation } from "swiper/modules";

const tile = (tileSelector) => {
    const LIMIT_LENGTH = 2;

    let originTile = document.querySelector(tileSelector);
    const tileLinks = Array.from(originTile.children);

    const Main = () => {
        const wrapper = document.createElement("div");
        wrapper.classList.add("tile-wrapper");

        wrapper.innerHTML = `
            <div class="btn-wrapper">
                <span class="tile-btn tile-btn_hidden">Показать все</span>
            </div>
        `;

        return wrapper;
    };

    const ArticleTile = (tileLinks) => {
        const articleTile = document.createElement("div");
        articleTile.classList.add("article-tile");

        const links = tileLinks.map(
            (link) => `
            <a class="${link.classList}" href="${link.href}">${link.textContent}</a>
        `
        );

        articleTile.innerHTML = `
            ${links.join("")}
        `;

        return articleTile;
    };

    const TileSlider = (tileLinks) => {
        const slider = document.createElement("div");
        slider.classList.add("tile-slider");
        slider.classList.add("swiper");

        const slides = tileLinks.map(
            (link) => `
            <div class="swiper-slide tile__swiper-slide">
                <a class="${link.classList}" href="${link.href}">${link.textContent}</a>
            </div>
        `
        );

        slider.innerHTML = `
            <div class="swiper-wrapper">
                ${slides.join("")}
            </div>

            <button class="tile-arrow__prev">
                <img src="/img/interface/chevron-left-solid.svg" alt="Предыдущий" />
            </button>
            <button class="tile-arrow__next">
                <img src="/img/interface/chevron-right-solid.svg" alt="Следующий" />
            </button>
        `;

        return slider;
    };

    if (tileLinks.length > LIMIT_LENGTH) {
        const main = Main();
        const articleTile = ArticleTile(tileLinks);
        const tileSlider = TileSlider(tileLinks);
        const showButton = main.querySelector(".tile-btn");

        main.prepend(tileSlider);
        originTile.replaceWith(main);
        originTile = null;

        const options = {
            modules: [Navigation],
            on: {
                init: function () {
                    console.log("swiper initialized");
                },
                destroy: function () {
                    console.log("swiper destroyed");
                },
            },
            centeredSlides: true,
            loop: true,
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    navigation: false,
                },
                576: {
                    slidesPerView: 2.2,
                    navigation: {
                        nextEl: ".tile-arrow__next",
                        prevEl: ".tile-arrow__prev",
                    },
                },
                768: {
                    navigation: {
                        nextEl: ".tile-arrow__next",
                        prevEl: ".tile-arrow__prev",
                    },
                    centeredSlides: true,
                    slidesPerView: 2.2,
                },
            },
        };

        const swiper = new Swiper(".tile-slider", options);

        showButton.addEventListener("click", () => {
            if (showButton.classList.contains("tile-btn_hidden")) {
                showButton.textContent = "Скрыть";
                tileSlider.replaceWith(articleTile);
                showButton.classList.remove("tile-btn_hidden");
            } else {
                showButton.textContent = "Показать все";
                articleTile.replaceWith(tileSlider);
                showButton.classList.add("tile-btn_hidden");
            }
        });
    }
};

export default tile;
