export const initCalculator = () => {
    const calculators = document.querySelectorAll(".service-calculator");

    calculators.forEach((calculator) => {
        const list = calculator.querySelector(
            ".service-calculator__types-list"
        );
        const slider = calculator.querySelector(
            ".service-calculator__range-slider"
        );
        const price = calculator.querySelector(
            ".service-calculator__result-target"
        );
        const squares = calculator.querySelector(
            ".service-calculator__square-result"
        );
        const btns = calculator.querySelector(
            ".service-calculator__square-bottom"
        );

        const getSquare = () => {
            return parseInt(squares.textContent);
        };

        const coefs = {
            reconstruction: 32000,
            building: 35000,
            decoration: 11000,
            communication: 4000,
        };

        let currentCoef = coefs[list.dataset.value];

        const count = (coef, square) => {
            return coef * square;
        };

        const formatPrice = (value) => {
            return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
        };

        const renderPrice = () => {
            const value = count(currentCoef, getSquare());

            price.textContent = `${formatPrice(value)} р.`;
        };

        renderPrice();

        list.addEventListener("click", () => {
            currentCoef = coefs[list.dataset.value];
            renderPrice();
        });

        btns.addEventListener("click", () => {
            renderPrice();
        });

        slider.addEventListener("input", () => {
            renderPrice();
        });
    });
};
