const reviewProgressBar = () => {
    const rateBlockList = document.querySelectorAll('.rate_bar_wrap');

    const initAnimation = (rateBlock) => {
        const reviewCriteria = rateBlock.querySelector('.review-criteria');
        const rateBars = reviewCriteria.querySelectorAll('.rate-bar-bar');

        const removeAnimationClass = (bar) => {
            if(bar.classList.contains('progress')) {
                bar.classList.remove('progress');
            }
        };

        const addAnimationClass = (bar) => {
            if(!bar.classList.contains('progress')) {
                bar.classList.add('progress');
            }
        };

        window.addEventListener('scroll', () => {
            const topBorder = reviewCriteria.getBoundingClientRect().top;
            const windowHeight = document.documentElement.clientHeight;
            if(topBorder - windowHeight < -50) {
                rateBars.forEach(bar => addAnimationClass(bar));
            }
        });

        rateBars.forEach(bar => removeAnimationClass(bar));


    };

    rateBlockList.forEach(rateBlock => initAnimation(rateBlock));
};

export default reviewProgressBar;