export const createElement = (html = "") => {
    if (!html.length) {
        return null;
    }

    const template = document.createElement("template");
    template.innerHTML = html.trim();
    return template.content.firstChild;
};
