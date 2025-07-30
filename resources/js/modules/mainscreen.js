const mainscreen = () => {
    const article = document.querySelector('article.article');

    if (article) {
        const title = article.querySelector('.article__title');
        const headerStatuses = article.querySelector('.header-statuses');
        const headerStatusesList = headerStatuses.children;

        const mainscreen = document.createElement('div');
        mainscreen.classList.add('mainscreen');

        const h1 = title.textContent;
        const headerStatusesArr = Array.from(headerStatusesList);

        mainscreen.innerHTML = `
        <h1 class='mainscreen__title' itemprop='headline'>${h1}</h1>

        <!-- start header-statuses -->
        <ul class="mainscreen__header-statuses">
            <li class="mainscreen__header-statuses-item">${headerStatusesArr[0].innerText}</li>
            <li class="mainscreen__header-statuses-item">${headerStatusesArr[1].innerText}</li>
            <li class="mainscreen__header-statuses-item">${headerStatusesArr[2].innerText}</li>
            <li class="mainscreen__header-statuses-item">${headerStatusesArr[3].innerHTML}</li>
        </ul>
        <!-- end header-statuses -->

        <ul class="mainscreen__list">
            <li class='mainscreen__list-item'>
                <div class="mainscreen__icon">
                    <img src="/img/mainscreen/deadline.svg" alt="deadline">
                </div>
                <div class="mainscreen__text-wrapper">
                    <div class="mainscreen__header">Гарантия соблюдения сроков</div>
                    <div class="mainscreen__descr">В случае задержки несем штрафные сакции в размере 3% за день</div>
                </div>
            </li>
            <li class='mainscreen__list-item'>
                <div class="mainscreen__icon">
                    <img src="/img/mainscreen/price.svg" alt="price">
                </div>
                <div class="mainscreen__text-wrapper">
                    <div class="mainscreen__header">Прозрачная фиксированная смета</div>
                    <div class="mainscreen__descr">Вы платите только за то что вам нужно, никаких скрытых платежей</div>
                </div>
            </li>
            <li class='mainscreen__list-item'>
                <div class="mainscreen__icon">
                    <img src="/img/mainscreen/daily.svg" alt="daili">
                </div>
                <div class="mainscreen__text-wrapper">
                    <div class="mainscreen__header">Ежедневные фото-видео отчеты</div>
                    <div class="mainscreen__descr">Вы будете в курсе, даже если не можете присутствовать на объекте</div>
                </div>
            </li>
            <li class='mainscreen__list-item'>
                <div class="mainscreen__icon">
                    <img src="/img/mainscreen/economy.svg" alt="economy">
                </div>
                <div class="mainscreen__text-wrapper">
                    <div class="mainscreen__header">Экономия на материалах до 25%</div>
                    <div class="mainscreen__descr">Работаем напрямую с производителями стройматериалов</div>
                </div>
            </li>
        </ul>
        `;

        title.replaceWith(mainscreen);

        headerStatuses.remove();
    }
};

export default mainscreen;