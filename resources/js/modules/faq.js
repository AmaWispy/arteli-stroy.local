export const initFaq = (wrapCLs, itemCls, activeCls) => {
    const wrapper = document.querySelector(`.${wrapCLs}`);
    const questions = wrapper.querySelectorAll(`.${itemCls}`);

    wrapper.addEventListener("click", (e) => {
        const target = e.target;

        if (target && target.classList.contains(itemCls)) {
            questions.forEach((q) => {
                if (q === target) {
                    q.classList.toggle(activeCls);
                }
            });
        }
    });
};
