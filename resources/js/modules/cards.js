const cards = () => {
    const cards = document.querySelectorAll(".service-block__card-text");
    
    cards.forEach((card => {
        const button = card.querySelector(".service-block__card-open");
        button.addEventListener("click", (() => {
            card.classList.toggle("active");
        }));
    }));
};

export default cards;