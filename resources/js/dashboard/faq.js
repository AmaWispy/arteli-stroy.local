export const initFaq = () => {
    const faq = document.querySelector(".faq");
    const addBtn = faq.querySelector(".faq__add");
    const faqWrapper = faq.querySelector(".faq__wrapper");
    const faqItems = faq.querySelectorAll(".faq__item");

    let faqItemsLength = faqItems.length;

    addBtn.addEventListener("click", () => {
        const html = `
            <div class="grow">
                <div class="mb-5">
                    <label for="faq[${faqItemsLength}][question]" class="block mb-2 text-sm font-medium text-gray-900 ">Вопрос</label>
                    <input type="text" id="faq[${faqItemsLength}][question]" name="faq[${faqItemsLength}][question]"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    placeholder="Вопрос" />
                </div>
                <div>
                    <label for="faq[${faqItemsLength}][answer]" class="block mb-2 text-sm font-medium text-gray-900 ">Ответ</label>
                    <textarea maxlength=500 id="faq[${faqItemsLength}][answer]" name="faq[${faqItemsLength}][answer]" rows="3"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                    placeholder="Ответ"></textarea>
                </div>
            </div>
            <div class="w-10 h-10 flex justify-center items-center self-center cursor-pointer faq__delete-btn">
                <svg class="w-1/2 pointer-events-none" viewBox="0 0 32 32">
                    <path fill="red" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
                </svg>
            </div>
        `;

        const div = document.createElement("div");
        div.classList.add("faq__item", "flex", "gap-5");
        div.innerHTML = html;

        faqWrapper.appendChild(div);

        faqItemsLength++;
    });

    faqWrapper.addEventListener("click", (e) => {
        const target = e.target;

        if (target && target.classList.contains("faq__delete-btn")) {
            const parent = target.parentNode;
            parent.remove();
        }
    });
};
