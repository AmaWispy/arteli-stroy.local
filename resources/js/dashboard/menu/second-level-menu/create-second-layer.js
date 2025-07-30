import SortableMin from "sortablejs";
import { createElement } from "../../libs/create-element";
import {
    SECOND_LEVEL_MENU_LIST,
    SECOND_LEVEL_MENU_ITEM_CLASS,
    DELETE_SECOND_LAYER_BTN_CLASS,
} from "../config/constants";
import { menuOptions } from "../config/sortable-options";
import { dropMenuItem, updateMenuItem } from "../menu-items";

/*
    Функция для создания базового элемента меню

    Принимает:
        parentId - id родителя
        categoryId - id категории
        id - id самого элемента

    Класс элемента - SECOND_LEVEL_MENU_ITEM_CLASS

    Содержит:
        инпут для заголовка с кнопкой удаления
        меню элементов
*/

export const createSecondLevelMenu = ({
    parentId,
    categoryId,
    id,
    title = "",
    link = "",
}) => {
    const html = /* html */ `
        <div
            class="${SECOND_LEVEL_MENU_ITEM_CLASS} w-full p-2 bg-slate-100 border border-slate-200 rounded-lg cursor-pointer"
            data-parent-id=${parentId}
            data-category-id=${categoryId}
            data-id=${id}
        >
            <div class="flex gap-2 items-center mb-1">
                <input 
                    type="text"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    placeholder="Элемент меню"
                    name="menu[${parentId}][items][${categoryId}][items][${id}][name]"
                    value="${title}"
                />
                <button class="${DELETE_SECOND_LAYER_BTN_CLASS} border-0 bg-transparent min-w-5 max-w-5 h-5" type="button">
                    <svg class="h-full pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path
                            d="M135.2 17.7L128 32 32 32C14.3 32 0 46.3 0 64S14.3 96 32 96l384 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-96 0-7.2-14.3C307.4 6.8 296.3 0 284.2 0L163.8 0c-12.1 0-23.2 6.8-28.6 17.7zM416 128L32 128 53.2 467c1.6 25.3 22.6 45 47.9 45l245.8 0c25.3 0 46.3-19.7 47.9-45L416 128z" />
                    </svg>
                </button>
            </div>

            ${link && createLink({ parentId, categoryId, id, link })}

            <div 
                class="${SECOND_LEVEL_MENU_LIST} flex flex-col gap-2 pl-2 pb-4"
                data-parent-id=${parentId}
                data-category-id=${categoryId}
                data-menu-id=${id}
                data-type="second-layer"
            >

            </div>
        </div>
    `;

    const secondLevelMenu = createElement(html);

    const menu = secondLevelMenu.querySelector(`.${SECOND_LEVEL_MENU_LIST}`);

    new SortableMin(menu, {
        ...menuOptions,
        onAdd: dropMenuItem,
        onUpdate: updateMenuItem,
    });

    return secondLevelMenu;
};

function createLink({ parentId, categoryId, id, link }) {
    return /* html */ `
        <div class="text-xs">${link}</div>
        <input 
            hidden
            type="text"
            value="${link}" 
            name="menu[${parentId}][items][${categoryId}][items][${id}][url]"
        />
    `;
}
