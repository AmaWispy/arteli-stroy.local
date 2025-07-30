export const setupLinkFilter = () => {
    const categoryFilter = document.getElementById("filter-category");
    const versionFilter = document.getElementById("filter-version");
    const linkItems = document.querySelectorAll(".link-item");

    function applyFilters() {
        const selectedCategory = categoryFilter.value;
        const selectedVersion = versionFilter.value;

        linkItems.forEach((item) => {
            const itemCategory = item.dataset.category;
            const itemVersion = item.dataset.version;

            const matchesCategory =
                !selectedCategory || itemCategory === selectedCategory;
            const matchesVersion =
                !selectedVersion || itemVersion === selectedVersion;

            item.style.display =
                matchesCategory && matchesVersion ? "block" : "none";
        });
    }

    categoryFilter.addEventListener("change", applyFilters);
    versionFilter.addEventListener("change", applyFilters);
};
