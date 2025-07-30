export const initPortfolioFilters = () => {
    const filters = document.querySelector(".portfolio-main__filters");
    const filterBtns = filters.querySelectorAll(".portfolio-main__filter");
    const items = document.querySelectorAll(".portfolio-main__item");

    const hideAll = () => {
        items.forEach((item) => {
            item.classList.add("portfolio-main__item_hidden");
        });
    };

    const showAll = () => {
        items.forEach((item) => {
            item.classList.remove("portfolio-main__item_hidden");
        });
    };

    const showByType = (type) => {
        items.forEach((item) => {
            const itemsType = item.dataset.type;

            if (itemsType === type) {
                item.classList.remove("portfolio-main__item_hidden");
            }
        });
    };

    const showNew = () => {
        items.forEach((item) => {
            const isNew = item.hasAttribute("data-new");

            if (isNew) {
                item.classList.remove("portfolio-main__item_hidden");
            }
        });
    };

    filters.addEventListener("click", (e) => {
        const target = e.target;

        if (target && target.classList.contains("portfolio-main__filter")) {
            filterBtns.forEach((btn) => {
                btn.classList.remove("portfolio-main__filter_active");
            });

            target.classList.add("portfolio-main__filter_active");

            const value = target.dataset.value;

            switch (value) {
                case "all":
                    showAll();
                    break;
                case "Наши работы":
                    hideAll();
                    showByType("Наши работы");
                    break;
                case "Дизайн проекты":
                    hideAll();
                    showByType("Дизайн проекты");
                    break;
                case "Реставрация":
                    hideAll();
                    showByType("Реставрация");
                    break;
                case "new":
                    hideAll();
                    showNew();
                    break;
                default:
                    console.log("Unknown state");
            }
        }
    });
};
