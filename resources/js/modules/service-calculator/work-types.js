export const initWorkTypes = () => {
    const lists = document.querySelectorAll(".service-calculator__types-list");

    const updateActive = (items, list) => {
        const current = list.dataset.value;

        items.forEach((item) => {
            if (item.dataset.value === current) {
                item.classList.add("service-calculator__types-item_active");
            } else {
                item.classList.remove("service-calculator__types-item_active");
            }
        });
    };

    lists.forEach((list) => {
        const items = list.querySelectorAll(".service-calculator__types-item");

        updateActive(items, list);

        list.addEventListener("click", (e) => {
            const target = e.target;

            if (target.classList.contains("service-calculator__types-item")) {
                list.dataset.value = target.dataset.value;
                updateActive(items, list);
            }
        });
    });
};
