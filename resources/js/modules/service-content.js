export function initServiceContent() {
    const content = document.querySelector(".service-content__wrapper");
    const btn = content.querySelector(".service-content__showmore-btn");

    btn.addEventListener('click', () => {
        content.classList.toggle('service-content__wrapper_active');
        btn.textContent = btn.textContent === "Подробнее" ? "Скрыть" : "Подробнее";
    })
}