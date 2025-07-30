export const setupMenuTabs = () => {
    const tabButtonWrapper = document.querySelector(".tab-buttons");
    const tabButtons = tabButtonWrapper.querySelectorAll(".tab-button");
    const tabContents = document.querySelectorAll(".tab-content");

    function hideAll() {
        tabContents.forEach((tabContent) => {
            tabContent.dataset.active = false;
        });
    }

    function showOneByIndex(idx = 0) {
        hideAll();

        tabContents[idx].dataset.active = true;
    }

    showOneByIndex();

    tabButtonWrapper.addEventListener("click", (e) => {
        const target = e.target;

        if (target && target.classList.contains("tab-button")) {
            tabButtons.forEach((btn, idx) => {
                if (target === btn) {
                    showOneByIndex(idx);
                }
            });
        }
    });
};
