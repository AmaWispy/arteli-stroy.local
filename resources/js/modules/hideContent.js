const hideContent = () => {
    const article = document.querySelector('.article__block');
    
    if(article) {
        const content = article.querySelector('ol');

        const wrapper = document.createElement('div');
        wrapper.classList.add('wrapped');

        const wrappedContent = content.cloneNode(true);
        wrappedContent.classList.add('wrapped__list');
        wrapper.append(wrappedContent);

        const button = document.createElement('span');
        button.classList.add('wrapped__btn');
        button.textContent = 'Показать';
        wrapper.append(button);

        content.replaceWith(wrapper);

        const show = () => {
            wrappedContent.classList.add('wrapped__list_active');
            button.textContent = 'Скрыть';
        };

        const hide = () => {
            wrappedContent.classList.remove('wrapped__list_active');
            button.textContent = 'Показать';
        };

        const isActive = () => {
            return wrappedContent.classList.contains('wrapped__list_active');
        };

        button.addEventListener('click', () => {
            isActive() ? hide() : show();
        });
    }
};

export default hideContent;