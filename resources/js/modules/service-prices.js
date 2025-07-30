export const initServicePrices = () => {
    const main = document.querySelector(".service-prices");
    const tabs = main.querySelector(".service-prices__tabs");
    const btns = tabs.querySelectorAll(".service-prices__tab");
    const items = main.querySelectorAll(".service-prices__item");

    const closeAll = () => {
        btns.forEach((btn) => {
            btn.classList.remove("service-prices__tab_active");
            items.forEach((item) => {
                item.classList.remove("service-prices__item_active");
            });
        });
    };

    const open = (idx) => {
        btns[idx].classList.add("service-prices__tab_active");
        items[idx].classList.add("service-prices__item_active");
    };

    tabs.addEventListener("click", (e) => {
        const target = e.target;

        if (target && target.classList.contains("service-prices__tab")) {
            btns.forEach((btn, idx) => {
                if (target === btn) {
                    closeAll();
                    open(idx);
                }
            });
        }
    });
};
