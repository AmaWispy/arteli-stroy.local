export const initTabs = (tabSelector) => {
    const tabWrappers = document.querySelectorAll(`.${tabSelector}`);
    const headerClass = `${tabSelector}__header`;
    const btnClass = `${tabSelector}__btn`;
    const btnActiveClass = `${tabSelector}__btn_active`;
    const contentClass = `${tabSelector}__content`;
    const contentActiveClass = `${tabSelector}__content_active`;

    const closeAll = ({ ...config }) => {
        const { contents, contentActiveClass, tabBtns, btnActiveClass } =
            config;
        contents.forEach((item, i) => {
            item.classList.remove(contentActiveClass);
            tabBtns[i].classList.remove(btnActiveClass);
        });
    };

    const openOne = ({ ...config }, index = 0) => {
        const { contents, contentActiveClass, tabBtns, btnActiveClass } =
            config;

        contents[index].classList.add(contentActiveClass);
        tabBtns[index].classList.add(btnActiveClass);
    };

    tabWrappers.forEach((tabWrapper) => {
        const tabHeader = tabWrapper.querySelector(`.${headerClass}`);
        const tabBtns = tabWrapper.querySelectorAll(`.${btnClass}`);
        const contents = tabWrapper.querySelectorAll(`.${contentClass}`);

        const config = {
            contents,
            contentActiveClass: contentActiveClass,
            tabBtns,
            btnActiveClass: btnActiveClass,
        };

        closeAll(config);

        openOne(config);

        tabHeader.addEventListener("click", (event) => {
            const target = event.target;

            if (target && target.classList.contains(btnClass)) {
                tabBtns.forEach((tabBtn, i) => {
                    if (tabBtn === target) {
                        closeAll(config), openOne(config, i);
                    }
                });
            }
        });
    });
};


