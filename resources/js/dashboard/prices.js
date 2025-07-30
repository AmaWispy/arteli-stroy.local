export function initPrices() {
    const activeWrappers = document.querySelectorAll(".prices__list");
    const passiveWrappers = document.querySelectorAll(".prices__list-notactive");

    function addActiveItem(parent, idx) {
        const childs = parent.querySelectorAll(".prices__item");
        const lastChild = childs[childs.length - 1];
        const currentIdx = isNaN(+lastChild?.dataset.index + 1) ? 0 : +lastChild?.dataset.index + 1;
        const last = parent.lastElementChild;

        const item = document.createElement('div');
        item.classList.add("mb-5", "flex", "justify-between", "prices__item");
        const html = `
            <div class="w-[80%] ">
                <label for="price_list_${idx + 1}_${currentIdx}"
                    class="block mb-2 text-sm font-medium text-gray-900 ">Активный элемент списка</label>
                <input type="text" id="price_list_${idx + 1}_${currentIdx}" name="prices[${idx + 1}][list][${currentIdx}]"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    placeholder="элемент списка" />
            </div>

            <div
                class="w-10 h-10 flex justify-center items-center self-end cursor-pointer prices__delete-item-btn">
                <svg class="w-1/2 pointer-events-none" viewBox="0 0 32 32">
                    <path fill="red"
                        d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z">
                    </path>
                </svg>
            </div>
        `

        item.innerHTML = html;
        item.dataset.index = currentIdx;
        parent.insertBefore(item, last);
    }

    function addPassiveItem(parent, idx) {
        const childs = parent.querySelectorAll(".prices__item-notactive");
        const lastChild = childs[childs.length - 1];
        const currentIdx = isNaN(+lastChild?.dataset.index + 1) ? 0 : +lastChild?.dataset.index + 1;
        const last = parent.lastElementChild;

        const item = document.createElement('div');
        item.classList.add("mb-5", "flex", "justify-between", "prices__item-notactive");
        const html = `
            <div class="w-[80%] ">
                <label for="price_list_notactive_${idx + 1}_${currentIdx}"
                    class="block mb-2 text-sm font-medium text-gray-900 ">Неактивный элемент списка</label>
                <input type="text" id="price_list_notactive_${idx + 1}_${currentIdx}" name="prices[${idx + 1}][list-notactive][${currentIdx}]"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    placeholder="элемент списка" />
            </div>

            <div
                class="w-10 h-10 flex justify-center items-center self-end cursor-pointer prices__delete-item-notactive-btn">
                <svg class="w-1/2 pointer-events-none" viewBox="0 0 32 32">
                    <path fill="red"
                        d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z">
                    </path>
                </svg>
            </div>
        `

        item.innerHTML = html;
        item.dataset.index = currentIdx;
        parent.insertBefore(item, last);
    }

    function deleteItem(target) {
        const parent = target.parentNode;
        
        parent.remove();
    }

    activeWrappers.forEach((list, idx) => {
        list.addEventListener('click', e => {
            const target = e.target;
            
            if(target && target.classList.contains("prices__add-item-btn")) {
                addActiveItem(list, idx);
            }

            if(target && target.classList.contains("prices__delete-item-btn")) {
                deleteItem(target);
            }
        })
    })

    passiveWrappers.forEach((list, idx) => {
        list.addEventListener('click', e => {
            const target = e.target;
            
            if(target && target.classList.contains("prices__add-item-notactive-btn")) {
                addPassiveItem(list, idx);
            }

            if(target && target.classList.contains("prices__delete-item-notactive-btn")) {
                deleteItem(target);
            }
        })
    })
}