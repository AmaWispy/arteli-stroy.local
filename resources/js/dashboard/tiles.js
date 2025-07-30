import { createElement } from "./libs/create-element";

export const initTiles = () => {
    const tiles = document.querySelector(".tiles");
    const addBtn = tiles.querySelector(".tiles__add");
    const tilesWrapper = tiles.querySelector(".tiles__wrapper");
    const tilesItems = tiles.querySelectorAll(".tiles__item");

    let tilesItemsLength = tilesItems.length;

    addBtn.addEventListener("click", () => {
        const html = /* html */ `
            <div class="tiles__item grid grid-cols-[repeat(2,_1fr)_40px] gap-5">
                <div class="mb-5">
                    <label for="tiles[items][${tilesItemsLength}][link]" class="block mb-2 text-sm font-medium text-gray-900 ">Ссылка</label>
                    <input type="text" id="tiles[items][${tilesItemsLength}][link]" name="tiles[items][${tilesItemsLength}][link]"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    placeholder="Ссылка" />
                </div>
                <div>
                    <label for="tiles[items][${tilesItemsLength}][title]" class="block mb-2 text-sm font-medium text-gray-900 ">Заголовок</label>
                    <input type="text" id="tiles[items][${tilesItemsLength}][title]" name="tiles[items][${tilesItemsLength}][title]"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    placeholder="Заголовок" />
                </div>
                <div class="w-10 h-10 flex justify-center items-center self-center cursor-pointer tiles__delete-btn">
                    <svg class="w-1/2 pointer-events-none" viewBox="0 0 32 32">
                        <path fill="red" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
                    </svg>
                </div>
            </div>
        `;

        const tile = createElement(html);

        tilesWrapper.appendChild(tile);

        tilesItemsLength++;
    });

    tilesWrapper.addEventListener("click", (e) => {
        const target = e.target;

        if (target && target.classList.contains("tiles__delete-btn")) {
            const parent = target.parentNode;
            parent.remove();
        }
    });
};
