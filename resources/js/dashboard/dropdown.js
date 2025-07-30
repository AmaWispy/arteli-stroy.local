export const initDropdown = () => {
    const dropdownMenu = document.querySelector("#dropdown-menu");

    if (dropdownMenu) {
        const dropdown = dropdownMenu.querySelector("#dropdown");

        dropdownMenu.addEventListener("click", () => {
            dropdown.classList.toggle("hidden");
        });
    }
};
