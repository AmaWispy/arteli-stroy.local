import {
    ADD_SECOND_LAYER_BTN_CLASS,
    MENU_ITEM_CLASS,
    MENU_LIST_CLASS,
    SECOND_LEVEL_MENU_ITEM_CLASS,
    SECOND_LEVEL_MENU_LIST,
} from "../config/constants";
import { createSecondLevelMenu } from "../second-level-menu";

export const setupSecondLevelCreation = () => {
    const menuWrapper = document.querySelector(".menu-wrapper");

    menuWrapper.addEventListener("click", (e) => {
        const target = e.target;

        if (target && target.classList.contains(ADD_SECOND_LAYER_BTN_CLASS)) {
            const parent = target.parentNode;
            const menuList = parent.querySelector(`.${MENU_LIST_CLASS}`);

            const parentId = parent.dataset.parentId;
            const categoryId = parent.dataset.id;
            const id = countAllItemsInMenu(menuList);

            const secondLayerItem = createSecondLevelMenu({
                parentId,
                categoryId,
                id,
            });

            menuList.appendChild(secondLayerItem);
        }
    });
};

const countAllItemsInMenu = (menuElement) => {
    const firstLevelItems = menuElement.querySelectorAll(
        `.${MENU_LIST_CLASS} > .${MENU_ITEM_CLASS}`
    );
    const secondLevelItems = menuElement.querySelectorAll(
        `.${SECOND_LEVEL_MENU_ITEM_CLASS}`
    );

    return firstLevelItems.length + secondLevelItems.length;
};
