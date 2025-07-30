export const initGallery = () => {
    const galleries = document.querySelectorAll(".service-portfolio__gallery");

    galleries.forEach((gallery) => {
        const main = gallery.querySelector(
            ".service-portfolio__gallery-main img"
        );
        const thumbs = gallery.querySelector(
            ".service-portfolio__gallery-wrapper"
        );

        thumbs.addEventListener("click", (e) => {
            const target = e.target;

            if (target && target.tagName === "IMG") {
                main.src = target.src;
            }
        });
    });
};
