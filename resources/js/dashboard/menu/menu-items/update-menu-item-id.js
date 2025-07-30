import { MENU_LIST_CLASS, SECOND_LEVEL_MENU_LIST } from "../config/constants";
import { updateInputName } from "../utils/update-input-name";

export const updateMenuItemIds = (menuList, partToChange, startId = 0) => {
    let menuItems = null;

    const type = menuList.dataset.type;

    switch (type) {
        case "category": {
            menuItems = menuList.querySelectorAll(`.${MENU_LIST_CLASS} > div`);
            break;
        }
        case "second-layer": {
            menuItems = menuList.querySelectorAll(
                `.${SECOND_LEVEL_MENU_LIST} > div`
            );
            break;
        }
    }

    const length = menuItems.length;
    for (let i = startId; i < length; i++) {
        const item = menuItems[i];
        const secondLevelMenu = item.querySelector(
            `.${SECOND_LEVEL_MENU_LIST}`
        );

        item.dataset.id = i;

        if (secondLevelMenu) {
            secondLevelMenu.dataset.menuId = i;
            updateMenuItemIds(secondLevelMenu, 4);
        }

        const inputs = item.querySelectorAll("input");
        inputs.forEach((input) => {
            input.name = updateInputName(input.name, i, partToChange);
        });
    }
};
