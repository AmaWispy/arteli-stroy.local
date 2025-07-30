export const initServiceTable = () => {
    const main = document.querySelector(".service-table");

    // Tab feature

    const tabs = main.querySelector(".service-table__tabs");
    const tabBtns = tabs.querySelectorAll(".service-table__tab");
    const items = main.querySelectorAll(".service-table__item");

    const hideAll = () => {
        tabBtns.forEach((btn) =>
            btn.classList.remove("service-table__tab_active")
        );
        items.forEach((item) =>
            item.classList.remove("service-table__item_active")
        );
    };

    const showExact = (idx) => {
        tabBtns[idx].classList.add("service-table__tab_active");
        items[idx].classList.add("service-table__item_active");
    };

    tabs.addEventListener("click", (e) => {
        const target = e.target;

        if (target && target.classList.contains("service-table__tab")) {
            tabBtns.forEach((btn, idx) => {
                if (target === btn) {
                    hideAll();
                    showExact(idx);
                }
            });
        }
    });

    // Price counting

    const tableWrapper = main.querySelector(".service-table__items");
    const result = main.querySelector(".service-table__result");
    const countFields = main.querySelectorAll(".service-table__count");

    let total = 0;

    const sum = () => {
        total = 0;

        for (let idx = 0; idx < countFields.length; idx++) {
            const count = parseInt(countFields[idx].value);
            // if (!count) {
            //     continue;
            // }

            const row = countFields[idx].parentNode.parentNode;
            const rowTotal = row.querySelector(".service-table__col-total");
            const price = row.querySelector(".service-table__col-price");
            const priceValue = parseInt(price.textContent);

            total += count * priceValue;
            rowTotal.textContent = count * priceValue;
        }

        result.textContent = `${total} р.`;
    };

    const validateInput = (value) => {};

    const incremetTotal = (btn) => {
        const row = btn.parentNode.parentNode;

        const input = row.querySelector(".service-table__count");
        let inputValue = parseInt(input.value);
        if (isNaN(inputValue)) {
            inputValue = 0;
        }

        inputValue += 1;

        input.value = inputValue;

        sum();
    };

    const decremetTotal = (btn) => {
        const row = btn.parentNode.parentNode;

        const input = row.querySelector(".service-table__count");
        let inputValue = parseInt(input.value);
        if (isNaN(inputValue)) {
            inputValue = 0;
        }

        inputValue -= 1;

        if (inputValue >= 0) {
            input.value = inputValue;
            sum();
        }
    };

    tableWrapper.addEventListener("click", (e) => {
        const target = e.target;

        if (target && target.classList.contains("service-table__dec")) {
            decremetTotal(target);
        }

        if (target && target.classList.contains("service-table__inc")) {
            incremetTotal(target);
        }
    });

    tableWrapper.addEventListener("input", (e) => {
        const target = e.target;
        let value = target.value.replace(/\D/g, "");

        target.value = value;
        sum();
    });
};
