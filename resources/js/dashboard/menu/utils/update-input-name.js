export const updateInputName = (oldName = "", newIdx, partToChange) => {
    if (!oldName.length) {
        return;
    }

    const matches = [...oldName.matchAll(/\[\w+\]/g)];
    const newName = `menu${matches
        .map((match, id) => (id === partToChange ? `[${newIdx}]` : match))
        .join("")}`;

    return newName;
};
