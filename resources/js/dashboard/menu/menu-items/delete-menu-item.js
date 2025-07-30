import { DELETE_MENU_ITEM_BTN_CLASS } from "../config/constants";
import { updateMenuItemIds } from "./update-menu-item-id";

const deleteMenuItem = (item = null) => {
    if (!item) {
        return;
    }
    const id = item.dataset.id;
    const menuList = item.parentNode;
    const type = menuList.dataset.type;

    item.remove();

    switch (type) {
        case "category": {
            updateMenuItemIds(menuList, 4, id);
            break;
        }
        case "second-layer": {
            updateMenuItemIds(menuList, 6, id);
            break;
        }
    }
};

export const setupMenuItemDeleting = () => {
    const menuWrapper = document.querySelector(".menu-wrapper");

    menuWrapper.addEventListener("click", (evt) => {
        const target = evt.target;

        if (target && target.classList.contains(DELETE_MENU_ITEM_BTN_CLASS)) {
            const parent = target.parentNode.parentNode;
            deleteMenuItem(parent);
        }
    });
};
