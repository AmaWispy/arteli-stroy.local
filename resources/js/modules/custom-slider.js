export const initSlider = (config) => {
    const slider = document.querySelector(`.${config.main}`);
    const prevBtn = slider.querySelector(`.${config.prev}`);
    const nextBtn = slider.querySelector(`.${config.next}`);
    const wrapper = slider.querySelector(`.${config.wrapper}`);
    const slides = slider.querySelectorAll(`.${config.slide}`);

    let currentSlide = wrapper.dataset.current ? +wrapper.dataset.current : 0;
    let intervalId = 0;

    const gap = 20;
    let step = slides[0].getBoundingClientRect().width + gap;
    let clientWidth = document.documentElement.clientWidth;

    function startInterval() {
        if (!config.auto) {
            return;
        }

        intervalId = setInterval(switchNext, 5000);
    }

    function updateSlides(current) {
        wrapper.style.translate = `-${step * current}px`;
    }

    function switchPrev() {
        currentSlide--;

        if (currentSlide < 0) {
            currentSlide = slides.length - 1;
        }

        updateSlides(currentSlide);
    }

    function switchNext() {
        currentSlide++;

        if (currentSlide > slides.length - 1) {
            currentSlide = 0;
        }

        updateSlides(currentSlide);
    }

    if (clientWidth >= config.breakpoint && config.auto) {
        startInterval();
    }

    prevBtn.addEventListener("click", () => {
        console.log("click");
        if (intervalId) {
            clearInterval(intervalId);
        }

        switchPrev();

        startInterval();
    });

    nextBtn.addEventListener("click", () => {
        if (intervalId) {
            clearInterval(intervalId);
        }

        switchNext();

        startInterval();
    });

    window.addEventListener("resize", () => {
        // reculculate step
        step = slides[0].getBoundingClientRect().width + gap;
        clientWidth = document.documentElement.clientWidth;

        // enable/disable interval
        if (clientWidth < config.breakpoint) {
            clearInterval(intervalId);
        } else {
            if (intervalId) {
                clearInterval(intervalId);
            }

            startInterval();
        }
    });
};
