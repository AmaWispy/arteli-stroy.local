export function initServicePortfolio() {
    const wrappers = document.querySelectorAll(".service-portfolio__info-wrapper");

    wrappers.forEach(wrapper => {
        const list = wrapper.querySelector(".service-portfolio__list");
        const btn = wrapper.querySelector(".service-portfolio__showmore-btn");

        btn.addEventListener('click', (e) => {
            console.log(e.target);

            list.classList.toggle('service-portfolio__list_active');
            btn.textContent = btn.textContent === 'Подробнее' ? 'Скрыть' : 'Подробнее';;
        })
    })
}