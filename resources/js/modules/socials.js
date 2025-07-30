const initExternal = () => {
    const externals = document.querySelectorAll("[data-external]");

    externals.forEach((item) => {
        const href = item.dataset.href;

        if (href) {
            item.addEventListener("click", () => {
                if (item.getAttribute("target") === "_blank") {
                    window.open(href);
                } else {
                    location.href = href;
                }
            });
        }
    });
};

export { initExternal };
