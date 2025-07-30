import { createElement } from "../../libs/create-element";
import {
    DELETE_MENU_ITEM_BTN_CLASS,
    MENU_ITEM_CLASS,
} from "../config/constants";

/*
    Функция для создания базового элемента меню

    Принимает: 
        title - заголовок
        link - ссылка
        parentId - id родителя
        categoryId - id категории
        menuId - id меню, если есть
        id - id самого элемента

    Класс элемента - MENU_ITEM_CLASS

    Содержит:
        инпут для заголовка с кнопками
        поле со ссылкой 
*/

export function createMenuItem({
    title,
    link,
    parentId,
    categoryId,
    menuId,
    id,
    isInner = true,
}) {
    const inputNamePrefix = `menu[${parentId}][items][${categoryId}][items]${
        menuId ? "[" + menuId + "][items]" : ""
    }[${id}]`;

    const addMenuButton = /* html */ `
        <button class="create-second-lavel-btn border-0 bg-transparent min-w-5 max-w-5 h-5" type="button"
            title="Добавить уровень">
            <svg class="h-full pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                <path d="M26 30l6-16h-26l-6 16zM4 12l-4 18v-26h9l4 4h13v4z"></path>
            </svg>
        </button>
    `;

    const html = /* html */ `
        <div 
            class="${MENU_ITEM_CLASS} w-full p-2 bg-slate-100 border border-slate-200 rounded-lg cursor-pointer"
            data-id=${id}
        >
            <div class="flex gap-2 items-center mb-1">
                <input 
                    type="text"
                    class="menu-item-title-input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    placeholder="Элемент меню" 
                    value="${title}" 
                    name="${inputNamePrefix}[name]"
                />
                ${isInner ? "" : addMenuButton}
                <button class="${DELETE_MENU_ITEM_BTN_CLASS} border-0 bg-transparent min-w-5 max-w-5 h-5" type="button">
                    <svg class="h-full pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path
                            d="M135.2 17.7L128 32 32 32C14.3 32 0 46.3 0 64S14.3 96 32 96l384 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-96 0-7.2-14.3C307.4 6.8 296.3 0 284.2 0L163.8 0c-12.1 0-23.2 6.8-28.6 17.7zM416 128L32 128 53.2 467c1.6 25.3 22.6 45 47.9 45l245.8 0c25.3 0 46.3-19.7 47.9-45L416 128z" />
                    </svg>
                </button>
            </div>

            <div class="text-xs">${link}</div>
            <input 
                class="menu-item-link-input"
                hidden
                type="text"
                value="${link}" 
                name="${inputNamePrefix}[url]"
            />
        </div>
    `;

    const menuItem = createElement(html);

    return menuItem;
}
