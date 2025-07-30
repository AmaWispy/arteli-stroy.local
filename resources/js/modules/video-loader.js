export function initVideoLoading() {
    const containers = document.querySelectorAll(".video-container");

    const handleError = (item, img) => {
        const reserveId = item.dataset.reserveId;

        if (!reserveId) {
            return;
        }

        img.src = `https://rutube.ru/api/video/${reserveId}/thumbnail/?redirect=1`;
        item.dataset.mode = "reserve";
    };

    containers.forEach((container) => {
        const items = container.querySelectorAll(".video-container__item");

        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach((entry) => {
                const item = entry.target;
                const img = item.querySelector("img");
                let isLoaded = false;

                if (img.complete && img.naturalWidth > 0) {
                    isLoaded = true;
                    item.dataset.loaded = true;
                } else {
                    img.addEventListener("load", () => {
                        isLoaded = true;
                        item.dataset.loaded = true;
                    });

                    img.addEventListener("error", () => handleError(item, img));
                }

                if (entry.isIntersecting) {
                    setTimeout(() => {
                        if (!isLoaded) {
                            handleError(item, img);
                        }
                    }, 1e4);

                    obs.unobserve(item);
                }
            });
        });

        items.forEach((item) => observer.observe(item));

        container.addEventListener("click", (e) => {
            const target = e.target;

            if (target.classList.contains("video-container__item")) {
                const loaded = target.dataset.loaded;
                const mode = target.dataset.mode;
                const id = target.dataset.id;
                const reserveId = target.dataset.reserveId;

                if (!loaded) {
                    return;
                }

                const iframe = document.createElement("iframe");

                if (!reserveId) {
                    iframe.src = `https://rutube.ru/play/embed/${id}`;
                } else {
                    if (mode === "reserve") {
                        iframe.src = `https://rutube.ru/play/embed/${reserveId}`;
                    } else {
                        iframe.src = `https://www.youtube.com/embed/${id}`;
                    }
                }

                iframe.setAttribute("frameborder", "0");
                iframe.setAttribute("allowfullscreen", "allowfullscreen");

                target.replaceChildren(iframe);
            }
        });
    });
}
