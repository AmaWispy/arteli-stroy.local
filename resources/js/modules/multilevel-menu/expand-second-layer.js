export const expandSecondLayer = () => {
    const menus = document.querySelectorAll(".multilevel-menu");

    menus.forEach((menu) => {
        menu.addEventListener("click", (e) => {
            const target = e.target;

            if (
                target &&
                target.classList.contains("multilevel-menu__subitem-item")
            ) {
                const parent = target.parentNode;
                parent.classList.toggle("multilevel-menu__subitem_expanded");
            }

            if (
                target &&
                target.classList.contains("multilevel-menu__subitem-icon")
            ) {
                const parent = target.parentNode.parentNode;
                parent.classList.toggle("multilevel-menu__subitem_expanded");
            }
        });
    });
};
