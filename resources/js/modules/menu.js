import { hideAll, TAB_BTN_CLASS } from "./multilevel-menu";

export const initMenu = () => {
    const menus = document.querySelector(".menus");
    const hamburger = document.querySelector(".menu__hamburger");
    const mobileMenuItems = document.querySelectorAll(
        ".mobile-menu__list-item"
    );
    const phone = document.querySelector(".menu__phone");

    mobileMenuItems.forEach((item) => {
        const expandBtn = item.querySelector(".mobile-menu__expand");

        if (!expandBtn) {
            return;
        }

        expandBtn.addEventListener("click", () => {
            item.classList.toggle("mobile-menu__list-item_active");
        });
    });

    hamburger.addEventListener("click", () => {
        const returnTrigger = document.querySelector(
            ".multilevel-menu__return"
        );

        if (returnTrigger) {
            const tabBtns = document.querySelectorAll(`.${TAB_BTN_CLASS}`);
            const tabContents = document.querySelectorAll(
                ".multilevel-menu__categories"
            );

            hideAll(tabContents, tabBtns);

            returnTrigger.replaceWith(phone);
        }

        menus.classList.toggle("menus_active");
    });
};
