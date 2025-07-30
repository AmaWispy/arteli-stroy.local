import { widthObserver } from "../width-observer";

const CATEGORIES_ACTIVE_CLASS = "multilevel-menu__categories_active";
export const TAB_BTN_CLASS = "multilevel-menu__tab-button";
const TAB_BTN_ACTIVE_CLASS = "multilevel-menu__tab-button_active";

export const setupMenuTabs = () => {
    const menus = document.querySelectorAll(".multilevel-menu");

    menus.forEach((menu) => {
        const tabs = menu.querySelector(".multilevel-menu__tabs");
        const tabBtns = tabs.querySelectorAll(`.${TAB_BTN_CLASS}`);
        const tabContents = menu.querySelectorAll(
            ".multilevel-menu__categories"
        );

        let menuPhone;
        let returnTrigger;

        let isMobile = widthObserver.currentWidth < 768;
        widthObserver.onWidthChange((width) => {
            isMobile = width < 768;
        });

        hideAll(tabContents, tabBtns);

        if (!isMobile) {
            showById(tabContents, tabBtns);
        }

        tabs.addEventListener("click", (e) => {
            const target = e.target;

            if (target && target.classList.contains(TAB_BTN_CLASS)) {
                tabBtns.forEach((btn, id) => {
                    if (target === btn) {
                        hideAll(tabContents, tabBtns);
                        showById(tabContents, tabBtns, id);

                        if (isMobile) {
                            returnTrigger = createReturnTrigger(
                                btn.dataset.title
                            );
                            const returnBtn =
                                returnTrigger.querySelector("button");
                            menuPhone = document.querySelector(".menu__phone");

                            menuPhone.replaceWith(returnTrigger);

                            returnBtn.addEventListener("click", () => {
                                returnTrigger.replaceWith(menuPhone);
                                hideAll(tabContents, tabBtns);
                            });
                        }
                    }
                });
            }
        });

        tabs.addEventListener("mouseover", (e) => {
            const target = e.target;

            if (target && target.classList.contains(TAB_BTN_CLASS)) {
                tabBtns.forEach((btn, id) => {
                    if (target === btn) {
                        hideAll(tabContents, tabBtns);
                        showById(tabContents, tabBtns, id);
                    }
                });
            }
        });
    });
};

export const hideAll = (items, btns) => {
    items.forEach((item) => item.classList.remove(CATEGORIES_ACTIVE_CLASS));
    btns.forEach((btn) => btn.classList.remove(TAB_BTN_ACTIVE_CLASS));
};

const showById = (items, btns, id = 0) => {
    items[id].classList.add(CATEGORIES_ACTIVE_CLASS);
    btns[id].classList.add(TAB_BTN_ACTIVE_CLASS);
};

const createReturnTrigger = (title = "") => {
    const template = document.createElement("template");
    const html = /* html */ `
        <div class="multilevel-menu__return">
            <button class="multilevel-menu__return-btn">
                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.3661 26.1314C17.878 25.6432 17.878 24.8504 18.3661 24.3622L25.8647 16.8637C26.3529 16.3755 27.1457 16.3755 27.6339 16.8637C28.122 17.3519 28.122 18.1447 27.6339 18.6329L21.018 25.2488L27.63 31.8647C28.1181 32.3529 28.1181 33.1457 27.63 33.6339C27.1418 34.122 26.349 34.122 25.8608 33.6339L18.3622 26.1353L18.3661 26.1314Z" fill="#586282"/>
                </svg>
            </button>
            <div class="multilevel-menu__return-title">${title}</div>
        </div>
    `;

    template.innerHTML = html.trim();

    return template.content.firstChild;
};
