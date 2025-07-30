import SortableMin from "sortablejs";
import { menuOptions, linksOptions } from "./config/sortable-options";
import { dropMenuItem, updateMenuItem } from "./menu-items";
import { MENU_LIST_CLASS, SECOND_LEVEL_MENU_LIST } from "./config/constants";

export const setupSortableList = () => {
    const menuLists = document.querySelectorAll(`.${MENU_LIST_CLASS}`);
    const secondLevelMenuLists = document.querySelectorAll(
        `.${SECOND_LEVEL_MENU_LIST}`
    );
    const linksList = document.querySelector("#link-list");

    menuLists.forEach((list) => {
        new SortableMin(list, {
            ...menuOptions,
            onAdd: dropMenuItem,
            onUpdate: updateMenuItem,
        });
    });

    secondLevelMenuLists.forEach((list) => {
        new SortableMin(list, {
            ...menuOptions,
            onAdd: dropMenuItem,
            onUpdate: updateMenuItem,
        });
    });

    new SortableMin(linksList, linksOptions);
};
