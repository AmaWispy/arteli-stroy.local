import { DELETE_SECOND_LAYER_BTN_CLASS } from "../config/constants";
import { updateMenuItemIds } from "../menu-items";

export const setupSecondLayerDeletion = () => {
    const menuWrapper = document.querySelector(".menu-wrapper");

    menuWrapper.addEventListener("click", (evt) => {
        const target = evt.target;

        if (
            target &&
            target.classList.contains(DELETE_SECOND_LAYER_BTN_CLASS)
        ) {
            const parent = target.parentNode.parentNode;
            deleteSecondLayerItem(parent);
        }
    });
};

const deleteSecondLayerItem = (item = null) => {
    if (!item) {
        return;
    }
    const id = item.dataset.id;
    const menuList = item.parentNode;

    item.remove();

    updateMenuItemIds(menuList, 4, id);
};
