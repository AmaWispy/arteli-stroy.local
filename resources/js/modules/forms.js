import { postFormData } from "../sevices/postFormData";

const showMessage = (message) => {
    const html = `
        <div class="modal">
            <button class="modal__close-btn"></button>
            
            <div class="modal__content">
                ${message}
            </div>
        </div>
    `;

    const messageModal = document.createElement("div");
    messageModal.classList.add("overlay", "overlay_active");
    messageModal.innerHTML = html;

    document.body.appendChild(messageModal);

    const closeTrigger = messageModal.querySelector(".modal__close-btn");

    messageModal.addEventListener("click", (e) => {
        const target = e.target;

        if (target === closeTrigger || target === messageModal) {
            document.body.removeChild(messageModal);
        }
    });
};

const handlePortfolioForm = (form) => {
    const overlay = document.querySelector(".portfolio-modal");
    const gift = overlay.querySelector(".portfolio-modal__gift");

    overlay.classList.remove("portfolio-modal_active");
    form.reset();

    const value = gift.dataset.value;

    let html;
    if (value === "yes") {
        html = `
        <div class="portfolio-modal__modal">
            <div class="portfolio-modal__close">
                <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M32.9985 34.4677L10.3711 11.8403L12.2567 9.95471L34.8841 32.5821L32.9985 34.4677Z" fill="black"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M34.884 11.8408L12.2566 34.4683L10.371 32.5826L32.9984 9.95523L34.884 11.8408Z" fill="black"/>
                </svg>
            </div>
            
            <div class="portfolio-modal__title">Ваша заявка успешно принята!</div>
            <div class="portfolio-modal__subtitle">Менеджер свяжется с вами в течение 15 минут в рабочее время, чтобы уточнить детали проекта.</div>

            <div class="portfolio-modal__opening">
                <div class="portfolio-modal__opening-title">Режим работы:</div>
                <ul class="portfolio-modal__opening-list">
                    <li class="portfolio-modal__opening-item">ПН-ПТ с 10:00 до 19:00</li>
                    <li class="portfolio-modal__opening-item">СБ с 10:00 до 15:00</li>
                    <li class="portfolio-modal__opening-item">ВС выходной</li>
                </ul>
            </div>

            <a class="portfolio-modal__submit" href="/doc/top_10_mistakes.pdf" target="_blank">Скачать PDF файл «ТОП10 ошибок при выборе подрядчика»</a>
        </div>
    `;
    } else {
        html = `
        <div class="portfolio-modal__modal">
            <div class="portfolio-modal__close">
                <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M32.9985 34.4677L10.3711 11.8403L12.2567 9.95471L34.8841 32.5821L32.9985 34.4677Z" fill="black"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M34.884 11.8408L12.2566 34.4683L10.371 32.5826L32.9984 9.95523L34.884 11.8408Z" fill="black"/>
                </svg>
            </div>
            
            <div class="portfolio-modal__title">Ваша заявка успешно принята!</div>
            <div class="portfolio-modal__subtitle">Менеджер свяжется с вами в течение 15 минут в рабочее время, чтобы уточнить детали проекта.</div>

            <div class="portfolio-modal__opening">
                <div class="portfolio-modal__opening-title">Режим работы:</div>
                <ul class="portfolio-modal__opening-list">
                    <li class="portfolio-modal__opening-item">ПН-ПТ с 10:00 до 19:00</li>
                    <li class="portfolio-modal__opening-item">СБ с 10:00 до 15:00</li>
                    <li class="portfolio-modal__opening-item">ВС выходной</li>
                </ul>
            </div>
        </div>
    `;
    }

    const messageModal = document.createElement("div");
    messageModal.classList.add("portfolio-modal", "portfolio-modal_active");
    messageModal.innerHTML = html;

    document.body.appendChild(messageModal);

    const closeTrigger = messageModal.querySelector(".portfolio-modal__close");

    messageModal.addEventListener("click", (e) => {
        const target = e.target;

        if (target === closeTrigger || target === messageModal) {
            document.body.removeChild(messageModal);
        }
    });
};

const findOverlay = (id) => {
    const name = id.replace("form-", "");
    const overlay = document.querySelector(`.modal-${name}`);

    return overlay;
};

const wrapWithCaptcha = (form, url, metrikaGoal = "") => {
    form.classList.add("_sending");

    grecaptcha.ready(function () {
        grecaptcha
            .execute("6LehQDYqAAAAACGss2gNoIo7q9fw5p04pCdWCHuX", {
                action: "homepage",
            })
            .then(function (token) {
                form.querySelector(".token").value = token;

                const formData = new FormData(form);

                postFormData(url, formData)
                    .then(({ message, metrikaId, is_lead_saved }) => {
                        if (form.classList.contains("portfolio-modal__form")) {
                            handlePortfolioForm(form);
                        } else {
                            const overlay = findOverlay(form.id);

                            if (overlay) {
                                overlay.classList.remove("overlay_active");
                            }
                            form.reset();
                            showMessage(message);
                        }

                        if (metrikaGoal && metrikaId && is_lead_saved) {
                            ym(metrikaId, "reachGoal", metrikaGoal);
                        }
                    })
                    .catch(alert)
                    .finally(() => form.classList.remove("_sending"));
            });
    });
};

export function initForms() {
    const call = document.querySelector("#form-call");
    const application = document.querySelector("#form-application");
    const feedback = document.querySelector("#form-feedback");
    const mail = document.querySelector("#form-mail");
    const calc = document.querySelector("#form-calc");
    const help = document.querySelector("#form-help");
    const stopgap = document.querySelector("#form-stopgap");
    const contacts = document.querySelector("#form-contacts");

    const serviceForms = document.querySelectorAll(".service-general-form");

    const forms = [
        {
            form: call,
            route: "/mail-call",
            goal: "form-call",
        },
        {
            form: application,
            route: "/mail-application",
            goal: "form-application",
        },
        {
            form: feedback,
            route: "/mail-feedback",
            goal: "form-feedback",
        },
        {
            form: mail,
            route: "/mail-mail",
            goal: "form-mail",
        },
        {
            form: calc,
            route: "/mail-calc",
            goal: "raschet_stoimosti",
        },
        {
            form: help,
            route: "/mail-help",
            goal: "help",
        },
        {
            form: stopgap,
            route: "/mail-stopgap",
            goal: "zayavka_na_konsult",
        },
        {
            form: contacts,
            route: "/mail-contacts",
            goal: "form-contacts",
        },

        ...Array.from(serviceForms).map((form) => ({
            form,
            route: "/mail-service",
            goal: form.dataset.goal || "",
        })),
    ];

    forms.forEach(({ form, route, goal }) => {
        if (!form) {
            return;
        }

        form.addEventListener("submit", (e) => {
            e.preventDefault();

            wrapWithCaptcha(form, route, goal);
        });
    });
}
