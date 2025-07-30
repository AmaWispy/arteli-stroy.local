import { createMenuItem } from "./create-menu-item";
import { updateMenuItemIds } from "./update-menu-item-id";

export const dropMenuItem = (evt) => {
    // List data
    const list = evt.to;
    const parentId = list.dataset.parentId;
    const categoryId = list.dataset.categoryId;
    const menuId = list.dataset.menuId || null;
    const isInner = list.dataset.type === "second-layer";

    // Source
    const source = evt.from;
    const sourceType = source.dataset.type;

    // Item data
    const item = evt.item;
    const id = evt.newIndex;
    const oldId = evt.oldIndex;

    let title = "";
    let slug = "";

    switch (sourceType) {
        case "links": {
            title = item.dataset.title || "";
            slug = item.dataset.slug || "";

            break;
        }
        case "category": {
            const inputs = item.querySelectorAll("input");

            title = inputs[0].value || "";
            slug = inputs[1]?.value || "";

            break;
        }
    }

    // const newItem = createMenuItem(title, slug, parentId, categoryId, id);
    const newItem = createMenuItem({
        title,
        link: slug,
        parentId,
        categoryId,
        menuId,
        id,
        isInner,
    });

    item.replaceWith(newItem);

    // Update ids from target list
    if (menuId) {
        updateMenuItemIds(list, 6, id + 1);
    } else {
        updateMenuItemIds(list, 4, id + 1);
    }

    // Update ids from source list
    if (sourceType === "category") {
        updateMenuItemIds(source, 4, oldId);
    }
};
