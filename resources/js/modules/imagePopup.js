export const imagePopup = () => {
    const images = document.querySelectorAll(".sib");

    const overlay = document.createElement("div");
    overlay.classList.add("image-popup");

    const closeBtn = document.createElement("div");
    closeBtn.classList.add("cross", "cross--light");

    const image = document.createElement("img");

    overlay.append(closeBtn);
    overlay.append(image);

    const onImgClick = (e) => {
        const elem = e.target;

        image.src = elem.src;
        image.alt = elem.alt;

        overlay.classList.add("image-popup_active");

        document.body.append(overlay);
    };

    images.forEach((img) => {
        img.addEventListener("click", onImgClick);
    });

    overlay.addEventListener("click", (e) => {
        overlay.classList.remove("image-popup_active");
    });
};
