import { error } from "jquery";
import { postData } from "../sevices/mail-service";

export const initMail = () => {
    const forms = document.querySelectorAll("form");

    const handleSubmit = async (e) => {
        e.preventDefault();

        const form = e.target;

        const formData = new FormData(form);
        const { response, isError } = await postData("/mail", formData);

        if (isError) {
            console.log("error");
        } else {
            console.log(response);
        }

        form.reset();
    };

    forms.forEach((form) => {
        form.addEventListener("submit", handleSubmit);
    });
};
