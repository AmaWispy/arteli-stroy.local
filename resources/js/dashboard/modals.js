export const initDeleteModal = () => {
    const overlay = document.querySelector("#confirm-deletion");
    const trigger = document.querySelector("#delete-article");

    if (overlay && trigger) {
        const closeBtn = overlay.querySelector("#modal-close");
        const cancel = overlay.querySelector("#cancel-deletion");

        const show = () => {
            overlay.classList.remove("hidden");
            overlay.classList.add("flex");
        };

        const hide = () => {
            overlay.classList.remove("flex");
            overlay.classList.add("hidden");
        };

        trigger.addEventListener("click", () => {
            show();
        });

        overlay.addEventListener("click", (e) => {
            const target = e.target;

            if (
                target === overlay ||
                target === closeBtn ||
                target === cancel
            ) {
                hide();
            }
        });
    }
};
