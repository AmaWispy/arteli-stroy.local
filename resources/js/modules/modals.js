export const initModals = () => {
    const items = [
        {
            openTrigger: ".modal-open__call",
            overlay: ".modal-call",
        },
        {
            openTrigger: ".modal-application__open",
            overlay: ".modal-application",
        },
        {
            openTrigger: ".calc__open",
            overlay: ".modal-calc",
        },
        {
            openTrigger: ".allFeedback-block__open",
            overlay: ".modal-feedback",
        },
        {
            openTrigger: ".help__open",
            overlay: ".modal-help",
        },
        {
            openTrigger: ".mail__open",
            overlay: ".modal-mail",
        },
        {
            openTrigger: ".footer__regions",
            overlay: ".city-overlay",
            closeTrigger: ".cities__close-btn",
            active: "city-overlay_active",
        },
        {
            openTrigger: ".service-portfolio__modal-btn",
            overlay: ".portfolio-modal",
            closeTrigger: ".portfolio-modal__close",
            active: "portfolio-modal_active",
        },
    ];

    const autoOpened = [
        {
            overlay: ".modal-calc",
            delay: 15e3,
        },
        {
            overlay: ".modal-help",
            delay: 15e3,
        },
    ];

    items.forEach((item) => {
        const openTriggers = document.querySelectorAll(item.openTrigger);
        const overlay = document.querySelector(item.overlay);

        if (!overlay) {
            return;
        }

        const closeTrigger = overlay.querySelector(
            item.closeTrigger ?? ".modal__close-btn"
        );
        const activity = item.active ?? "overlay_active";

        const openModal = () => {
            overlay.classList.add(activity);
        };

        openTriggers.forEach((trigger) => {
            trigger.addEventListener("click", openModal);
        });

        overlay.addEventListener("click", (e) => {
            const target = e.target;

            if (target === overlay || target === closeTrigger) {
                overlay.classList.remove(activity);
            }
        });

        autoOpened.forEach((auto) => {
            if (auto.overlay === item.overlay) {
                setTimeout(openModal, auto.delay);
            }
        });
    });
};
