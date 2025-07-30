export const initMessages = () => {
    const messageWrapper = document.querySelector('.message');
    const button = messageWrapper.querySelector('.message__button');
    const list = messageWrapper.querySelector('.message__list');

    button.addEventListener('click', () => {
        list.classList.toggle('message__list_open');
    })
}

