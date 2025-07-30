import { createSecondLevelMenu } from "../second-level-menu/create-second-layer";

export function setupSecondLevelAdding() {
    const menuWrapper = document.querySelector(".menu-wrapper");

    menuWrapper.addEventListener("click", (evt) => {
        const target = evt.target;

        if (target && target.classList.contains("create-second-lavel-btn")) {
            const parent = target.parentNode.parentNode;
            addSecondLevel(parent);
        }
    });
}

function addSecondLevel(target = null) {
    if (!target) {
        return;
    }

    const parent = target.parentNode;

    const parentId = parent.dataset.parentId;
    const categoryId = parent.dataset.categoryId;

    const id = target.dataset.id;
    const title = target.querySelector(".menu-item-title-input").value || "";
    const link = target.querySelector(".menu-item-link-input").value || "";

    const secondLevelItem = createSecondLevelMenu({
        parentId,
        categoryId,
        id,
        title,
        link,
    });

    target.replaceWith(secondLevelItem);
}
