const priceNumber = (tableSelector) => {
    const table = document.querySelector(tableSelector);
    const tableItems = table.querySelectorAll('.estimates__items');

    tableItems.forEach((item, itemIndex) => {
        const rows = item.querySelectorAll('.calc_row');
        rows.forEach((row, rowIndex) => {
            const tableCell = row.firstElementChild;
            tableCell.textContent = `${tableCell.textContent.replace(/\d*\.\d*(?:\.|\s)/,'').trim()}`;
        });
    });
};

export default priceNumber;