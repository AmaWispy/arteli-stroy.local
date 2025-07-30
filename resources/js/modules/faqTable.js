const faqTable = () => {
    const table = document.querySelector('.faq-section table');
    const thead = table.querySelector('thead');
    const tbody = table.querySelector('tbody');

    const theadTableCells = Array.from(thead.querySelectorAll('tr td'));

    const tbodyRows = tbody.querySelectorAll('tr');
    const tbodyTableCells = [];
    tbodyRows.forEach(row => {
        tbodyTableCells.push(Array.from(row.children));
    });

    const createNewTable = (theadTd, tbodyTd) => {
        const createRows = (theadTd, tbodyTd) => {
            const rows = [];

            const length = theadTd.length;
            for( let index = 0; index < length; index++ ) {
                const cols = tbodyTd.map(row => {
                    const item = row[index];

                    if(!item) {
                        return '';
                    }

                    return `<td aria-label="${item.ariaLabel}">${item.textContent}</td>`;
                });

                const row = `
                    <tr>
                        <td>${theadTd[index].textContent}</td>
                        ${cols.join('')}
                    </tr>
                `;
                rows.push(row);
            }

            return rows;
        };
        const table = document.createElement('table');
        table.classList.add('table');
        table.innerHTML = `
            <tbody>${createRows(theadTd, tbodyTd).join('')}</tbody>
        `;

        return table;
    };

    window.addEventListener('resize', (e) => {
        const target = e.target;
        const width = target.innerWidth;

        if( width < 576) {
            const newTable = createNewTable(theadTableCells, tbodyTableCells);
            table.replaceWith(newTable);
        }
    });
};

export default faqTable;