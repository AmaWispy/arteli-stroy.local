export const initShowmore = () => {
    const wrapper = document.querySelector(".service-tiles__wrapper");
    const btn = wrapper.querySelector(".service-tiles__showmore-btn");

    btn.addEventListener("click", () => {
        wrapper.classList.toggle("service-tiles__wrapper_expanded");
        btn.textContent =
            btn.textContent === "Подробнее" ? "Скрыть" : "Подробнее";
    });
};
