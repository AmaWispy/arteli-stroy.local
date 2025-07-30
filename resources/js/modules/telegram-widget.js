export function setupTelegramWidget(widget) {
    const closeBtn = widget.querySelector(".telegram-widget__close-btn");

    window.addEventListener("scroll", () => {
        if (getScreenWidth() < 768) {
            resetInlineTop(widget);
        } else {
            if (window.scrollY > 70) {
                widget.style.top = "70px";
            } else {
                widget.style.top = "150px";
            }
        }
    });

    window.addEventListener("resize", () => {
        if (getScreenWidth() < 768) {
            resetInlineTop(widget);
        }
    });

    closeBtn.addEventListener("click", () => {
        widget.classList.add("telegram-widget_hidden");
    });
}

function getScreenWidth() {
    return window.innerWidth;
}

function resetInlineTop(widget) {
    widget.style.top = "";
}
