export const initPriceTable = () => {
    const main = document.querySelector(".price-table");
    const categoryWrapper = main.querySelector(".price-table__categories");
    const categories = categoryWrapper.querySelectorAll(
        ".price-table__category"
    );

    const addCategoryBtn = main.querySelector(".price-table__add-category-btn");

    let categoriesLength = categories.length;

    categoryWrapper.addEventListener("click", (e) => {
        const target = e.target;

        if (target && target.classList.contains("price-table__add-row-btn")) {
            const category = target.parentNode;
            const rowWrap = category.querySelector(".price-table__rows");
            const rows = category.querySelectorAll(".price-table__row");

            const rowsLength = rows.length;
            const currentCategory = category.dataset.current;

            const html = `
                <div>
                    <label for="table[2][${currentCategory}][${
                rowsLength + 1
            }][name]" class="block mb-2 text-sm font-medium text-gray-900 ">Наименование работ</label>
                    <input type="text" id="table[2][${currentCategory}][${
                rowsLength + 1
            }][name]" name="table[2][${currentCategory}][${
                rowsLength + 1
            }][name]"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    placeholder="Наименование работ"/>
                </div>
                <div>
                    <label for="table[2][${currentCategory}][${
                rowsLength + 1
            }][measure]" class="block mb-2 text-sm font-medium text-gray-900 ">Ед. изм.</label>
                    <select id="table[2][${currentCategory}][${
                rowsLength + 1
            }][measure]" name="table[2][${currentCategory}][${
                rowsLength + 1
            }][measure]"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="шт.">шт.</option>
                            <option value="м²">м²</option>
                            <option value="м³">м³</option>
                            <option value="п.м.">п.м.</option>
                            <option value="см">см</option>
                            <option value="к-т (комплект)">к-т (комплект)</option>
                            <option value="т">т</option>
                    </select>
                </div>
                <div>
                    <label for="table[2][${currentCategory}][${
                rowsLength + 1
            }][price]" class="block mb-2 text-sm font-medium text-gray-900 ">Цена</label>
                    <input type="number" id="table[2][${currentCategory}][${
                rowsLength + 1
            }][price]" name="table[2][${currentCategory}][${
                rowsLength + 1
            }][price]"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    placeholder="Цена"/>
                </div>
                <div class="w-10 h-10 flex justify-center items-center self-end cursor-pointer price-table__delete-btn">
                    <svg class="w-1/2 pointer-events-none" viewBox="0 0 32 32">
                        <path fill="red" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
                    </svg>
                </div>
            `;

            const element = document.createElement("div");
            element.classList.add(
                "grid",
                "grid-cols-[repeat(3,_1fr)_40px]",
                "gap-4",
                "mb-4",
                "price-table__row"
            );
            element.innerHTML = html;
            rowWrap.appendChild(element);
        }

        if (
            target &&
            (target.classList.contains("price-table__delete-btn") ||
                target.classList.contains("price-table__delete-category"))
        ) {
            const parent = target.parentNode;
            parent.remove();
        }
    });

    addCategoryBtn.addEventListener("click", () => {
        const html = `
            <div class="mb-5">
                <label for="table[2][${categoriesLength}][0]" class="block mb-2 text-sm font-medium text-gray-900 ">Категория</label>
                <input type="text" id="table[2][${categoriesLength}][0]" name="table[2][${categoriesLength}][0]"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    placeholder="Категория" />
            </div>
            <div class="price-table__rows">
                <div class="grid grid-cols-[repeat(3,_1fr)_40px] gap-4 mb-4 price-table__row">
                    <div>
                        <label for="table[2][${categoriesLength}][1][name]" class="block mb-2 text-sm font-medium text-gray-900 ">Наименование работ</label>
                        <input type="text" id="table[2][${categoriesLength}][1][name]" name="table[2][${categoriesLength}][1][name]"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="Наименование работ" />
                    </div>
                    <div>
                        <label for="table[2][${categoriesLength}][1][measure]" class="block mb-2 text-sm font-medium text-gray-900 ">Ед. изм.</label>
                        <select id="table[2][${categoriesLength}][1][measure]" name="table[2][${categoriesLength}][1][measure]"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option value="шт.">шт.</option>
                                <option value="м²">м²</option>
                                <option value="м³">м³</option>
                                <option value="п.м.">п.м.</option>
                                <option value="см">см</option>
                                <option value="к-т (комплект)">к-т (комплект)</option>
                                <option value="т">т</option>
                        </select>
                    </div>
                    <div>
                        <label for="table[2][${categoriesLength}][1][price]" class="block mb-2 text-sm font-medium text-gray-900 ">Цена</label>
                        <input type="number" id="table[2][${categoriesLength}][1][price]" name="table[2][${categoriesLength}][1][price]"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="300"/>
                    </div>
                    <div class="w-10 h-10 flex justify-center items-center self-end cursor-pointer price-table__delete-btn">
                        <svg class="w-1/2 pointer-events-none" viewBox="0 0 32 32">
                            <path fill="red" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
                        </svg>
                    </div>
                </div>
            </div>
            <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center mx-auto block price-table__add-row-btn mb-5">Добавить строку</a>
            <a class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:max-w-[200px] px-5 py-2.5 text-center block price-table__delete-category">Удалить категорию</a>
        `;

        const element = document.createElement("div");
        element.classList.add(
            "mb-5",
            "p-5",
            "border",
            "border-solid",
            "rounded",
            "border-[#d1d5db]",
            "price-table__category"
        );
        element.innerHTML = html;
        element.dataset.current = categoriesLength;
        categoryWrapper.appendChild(element);

        categoriesLength++;
    });
};
