import SortableMin from "sortablejs";
import { menuOptions } from "../config/sortable-options";
import { dropMenuItem, updateMenuItem } from "../menu-items";
import { createElement } from "../../libs/create-element";
import {
    ADD_SECOND_LAYER_BTN_CLASS,
    CATEGORY_CLASS,
    MENU_ITEM_CLASS,
    MENU_LIST_CLASS,
} from "../config/constants";
import { updateInputName } from "../utils/update-input-name";

export const setupCategories = () => {
    const contents = document.querySelectorAll(".tab-content");

    contents.forEach((content) => {
        const addCategoryBtn = content.querySelector(".add-category-btn");
        const categories = content.querySelector(".categories");

        addCategoryBtn.addEventListener("click", () => {
            const categoryLength = countCategories(categories) || 0;
            const parentIdx = categories.dataset.id || 0;

            const newCategory = createCategory(categoryLength, parentIdx);
            categories.appendChild(newCategory);
        });

        content.addEventListener("click", (e) => {
            const target = e.target;

            if (target && target.classList.contains("delete-category-btn")) {
                deleteCategory(target.parentNode.parentNode);
            }
        });
    });
};

const createCategory = (idx, parentIdx) => {
    const html = /* html */ `
        <div 
            class="${CATEGORY_CLASS} flex flex-col gap-2 border border-slate-200 rounded-lg p-1"
            data-parent-id=${parentIdx}
            data-id=${idx}
        >
            <div class="mb-5 flex gap-5 items-center">
                <input 
                    type="text"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    placeholder="Название категории"
                    name="menu[${parentIdx}][items][${idx}][name]"
                />
                <button type="button"
                    class="delete-category-btn focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2  dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Удалить</button>
            </div>

            <button 
                class="${ADD_SECOND_LAYER_BTN_CLASS} text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                type="button"
            >
                Добавить уровень
            </button>

            <div 
                class="${MENU_LIST_CLASS} flex flex-col gap-2" 
                data-parent-id=${parentIdx}
                data-category-id=${idx}
                data-type="category"
            >
                
            </div>
        </div>
    `;

    const category = createElement(html);

    const categoryMenu = category.querySelector(`.${MENU_LIST_CLASS}`);

    new SortableMin(categoryMenu, {
        ...menuOptions,
        onAdd: dropMenuItem,
        onUpdate: updateMenuItem,
    });

    return category;
};

const countCategories = (parent) => {
    return parent.querySelectorAll(`.${CATEGORY_CLASS}`).length;
};

const updateCategory = (category, id) => {
    category.dataset.id = id;

    const input = category.querySelector("input");
    input.name = updateInputName(input.name, id, 2);

    const list = category.querySelector(`.${MENU_LIST_CLASS}`);
    list.dataset.categoryId = id;
};

const updateMenuItems = (category) => {
    const menuList = category.querySelector(`.${MENU_LIST_CLASS}`);
    const menuItems = menuList.querySelectorAll(`.${MENU_ITEM_CLASS}`);

    menuItems.forEach((item) => {
        const inputs = item.querySelectorAll("input");

        inputs.forEach((input) => {
            input.name = updateInputName(
                input.name,
                menuList.dataset.categoryId,
                2
            );
        });
    });
};

const deleteCategory = (item) => {
    const categoriesParent = item.parentNode;
    const itemIdx = item.dataset.id;

    item.remove();

    const categories = categoriesParent.querySelectorAll(`.${CATEGORY_CLASS}`);
    for (let idx = itemIdx; idx < categories.length; idx++) {
        const category = categories[idx];

        updateCategory(category, idx);
        updateMenuItems(category);
    }
};
