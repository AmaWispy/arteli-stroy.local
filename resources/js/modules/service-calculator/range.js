const initRange = (range) => {
    if (!range) {
        return;
    }

    const updateProgress = () => {
        const percent = ((range.value - range.min) / range.max) * 100;
        range.style.setProperty("--progress", `${percent}%`);
    };

    updateProgress();

    range.addEventListener("input", updateProgress);
};

export const initSquareCounting = () => {
    const squares = document.querySelectorAll(".service-calculator__square");

    squares.forEach((square) => {
        const range = square.querySelector(".service-calculator__range-slider");
        const resultBox = square.querySelector(
            ".service-calculator__square-result"
        );
        const inc = square.querySelector(".service-calculator__square-inc");
        const dec = square.querySelector(".service-calculator__square-dec");

        initRange(range);

        let value = +range.value;

        const printResult = (value) => {
            resultBox.textContent = `${value} м.кв.`;
        };

        printResult(value);

        const setValue = (newValue) => {
            if (newValue < +range.min) {
                newValue = +range.min;
            }

            if (newValue > +range.max) {
                newValue = +range.max;
            }

            value = newValue;

            range.value = value;
            printResult(value);
        };

        range.addEventListener("input", (e) => setValue(+e.target.value));
        inc.addEventListener("click", () => setValue(value + 1));
        dec.addEventListener("click", () => setValue(value - 1));
    });
};
