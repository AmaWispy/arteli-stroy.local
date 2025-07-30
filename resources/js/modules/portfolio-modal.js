export const initPortfolioModal = () => {
    const modal = document.querySelector(".portfolio-modal__modal");
    const btnWrap = modal.querySelector(".portfolio-modal__btns");
    const btns = modal.querySelectorAll(".portfolio-modal__btn");
    const gift = modal.querySelector(".portfolio-modal__gift");

    btnWrap.addEventListener("click", (e) => {
        const target = e.target;

        if (target && target.classList.contains("portfolio-modal__btn")) {
            btns.forEach((btn) => {
                btn.classList.remove("portfolio-modal__btn_active");
                if (target === btn) {
                    btn.classList.add("portfolio-modal__btn_active");
                    gift.dataset.value = btn.dataset.value;
                }
            });
        }
    });
};
