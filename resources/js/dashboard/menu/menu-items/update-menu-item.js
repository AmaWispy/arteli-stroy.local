import { updateMenuItemIds } from "./update-menu-item-id";

export const updateMenuItem = (evt) => {
    const list = evt.to;
    const type = list.dataset.type;

    switch (type) {
        case "category": {
            updateMenuItemIds(list, 4);
            break;
        }
        case "second-layer": {
            updateMenuItemIds(list, 6);
            break;
        }
    }
};
