$(".phone").mask("+7 (999) 999-99-99");
new WOW().init();
$(document).ready(function () {
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none",
    });
    $("#single_1").fancybox({
        helpers: {
            title: {
                type: "float",
            },
        },
    });
    $("#single_2").fancybox({
        openEffect: "elastic",
        closeEffect: "elastic",
        helpers: {
            title: {
                type: "inside",
            },
        },
    });
    let bLazy = new Blazy({
        success: function (element) {
            setTimeout(function () {
                let parent = element.parentNode;
                parent.className = parent.className.replace(/\bloading\b/, "");
            }, 200);
        },
    });
});
document.addEventListener("DOMContentLoaded", function () {
    const button = document.querySelectorAll(".button-open-2"),
        buttonOpen = document.querySelector(".button-open"),
        close = document.querySelectorAll(".modal-close"),
        modal = document.querySelector("#modal"),
        modal_2 = document.querySelector("#modal-2"),
        formCall = document.querySelector("#form-call"),
        formOffer = document.querySelector("#form-offer"),
        modalApplication = document.querySelector("#modal-application"),
        modalApplicationBtns = document.querySelectorAll(
            ".modal-application__open"
        );

    modalApplicationBtns.forEach((btn) => {
        btn.addEventListener("click", () => {
            modalApplication.classList.add("modal-active");
        });
    });

    modalApplication.addEventListener("click", (e) => {
        const closeBtn = modalApplication.querySelector("#close-application");
        if (e.target === modalApplication || e.target === closeBtn) {
            modalApplication.classList.remove("modal-active");
        }
    });

    buttonOpen.addEventListener("click", () => {
        modal.classList.toggle("active");
    });
    button.forEach((item) => {
        item.addEventListener("click", () => {
            modal_2.classList.toggle("active");
        });
    });
    modal.addEventListener("click", (e) => {
        e.target.classList.remove("active");
    });
    modal_2.addEventListener("click", (e) => {
        e.target.classList.remove("active");
    });
    close.forEach((item) => {
        item.addEventListener("click", () => {
            modal.classList.remove("active");
            modal_2.classList.remove("active");
        });
    });
    window.addEventListener("keydown", (e) => {
        if (e.code === "Escape") {
            modal.classList.remove("active");
            modal_2.classList.remove("active");
        }
    });
    formOffer.addEventListener("submit", formSend_2);
    async function formSend_2(e) {
        e.preventDefault();
        let error = formValidate_2(formOffer);
        let formData = new FormData(formOffer);
        if (error === 0) {
            let response = await fetch("/mail", {
                method: "POST",
                body: formData,
            });
            if (response.ok) {
                let result = await response.json();
                alert(result.message);
                formOffer.reset();
                yaCounter68343361.reachGoal("kommerch_predloj");
                return;
            } else {
                alert("Ошибка");
            }
        } else {
            alert("Заполните обязательные поля");
        }
    }

    function formValidate_2(formOffer) {
        let error = 0;
        let formReq = document.querySelectorAll("._req_2");
        formReq.forEach((item) => {
            formRemoveError_2(item);
            if (
                item.getAttribute("type") === "checkbox" &&
                item.checked === false
            ) {
                formAddError_2(item);
                error++;
            } else {
                if (item.value === "") {
                    formAddError_2(item);
                    error++;
                }
            }
        });
        return error;
    }

    function formAddError_2(input) {
        input.classList.add("_error");
    }

    function formRemoveError_2(input) {
        input.classList.remove("_error");
    }
    formCall.addEventListener("submit", formSend);
    async function formSend(e) {
        e.preventDefault();
        let error = formValidate(formCall);
        let formData = new FormData(formCall);
        if (error === 0) {
            let response = await fetch("/mail", {
                method: "POST",
                body: formData,
            });
            if (response.ok) {
                let result = await response.json();
                alert(result.message);
                formCall.reset();
                yaCounter68343361.reachGoal("zakazat_zvonok");
                return;
            } else {
                alert("Ошибка");
            }
        } else {
            alert("Заполните обязательные поля");
        }
    }

    function formValidate(formCall) {
        let error = 0;
        let formReq = document.querySelectorAll("._req");
        formReq.forEach((item) => {
            formRemoveError(item);
            if (
                item.getAttribute("type") === "checkbox" &&
                item.checked === false
            ) {
                formAddError(item);
                error++;
            } else {
                if (item.value === "") {
                    formAddError(item);
                    error++;
                }
            }
        });
        return error;
    }

    function formAddError(input) {
        input.classList.add("_error");
    }

    function formRemoveError(input) {
        input.classList.remove("_error");
    }

    /* Отправка формы application */

    const modalBlockList = document.querySelectorAll(".modal-block__list");

    const formApplication = document.querySelector("#form-application");
    formApplication.addEventListener("submit", formSendApplication);

    async function formSendApplication(e) {
        e.preventDefault();

        let formDataApplication = new FormData(formApplication);

        modalBlockList.forEach((item) => {
            item.children[1].classList.add("_sending");
        });

        let response = await fetch("/mail-application", {
            method: "POST",
            body: formDataApplication,
        });

        if (response.ok) {
            let result = await response.json();
            modalBlockList.forEach((item) => {
                item.children[1].classList.remove("_sending");
                item.innerHTML = result.message;
            });
            formApplication.reset();
        } else {
            alert("Ошибка");
            modalBlockList.forEach((item) => {
                item.children[1].classList.remove("_sending");
            });
        }
    }

    //FAQ section

    const faqWrapper = document.querySelectorAll(".faq__wrapper"),
        addBtns = document.querySelectorAll(".faq__add"),
        dismissBtns = document.querySelectorAll(".faq__dismiss"),
        contents = document.querySelectorAll(".faq__content");

    addBtns.forEach((btn, i) => {
        btn.addEventListener("click", () => {
            btn.style.display = "none";
            dismissBtns[i].style.display = "block";
            contents[i].style.display = "block";
        });
    });

    dismissBtns.forEach((btn, i) => {
        btn.addEventListener("click", () => {
            btn.style.display = "none";
            addBtns[i].style.display = "block";
            contents[i].style.display = "none";
        });
    });
});
