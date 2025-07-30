export const getTableConfig = (editor) => ({
    text: "Price table",
    tooltip: "Вставить таблицу с ценами",
    onAction: () => {
        const getTable = (rows) =>
            Array.from({ length: rows }, (_, i) => ({
                type: "bar",
                items: Array.from({ length: 3 }, (_, j) => ({
                    type: "input",
                    name: `row${i + 1}col${j + 1}`,
                    label: `${i + 1}:${j + 1}`,
                })),
            }));

        const getPageTwoConfig = (title, rows) => {
            if (!rows) {
                return {
                    title: "Количество должно быть числом!",
                    body: {
                        type: "panel",
                        items: [
                            {
                                type: "htmlpanel",
                                html: `<p>Кол-во строк должно быть числом. Попробуйте еще раз</p>`,
                            },
                        ],
                    },
                    buttons: [
                        {
                            type: "cancel",
                            text: "Выход",
                        },
                    ],
                };
            }

            return {
                title: "Вставить таблицу",
                body: {
                    type: "panel",
                    items: [
                        {
                            type: "htmlpanel",
                            html: '<div style="display: flex; justify-content: space-between"><b>Наименование работ</b><b>Ед. изм.</b><b>Цена от, руб.</b></div>',
                        },
                        ...getTable(rows),
                    ],
                },
                buttons: [
                    {
                        type: "cancel",
                        text: "Отмена",
                    },
                    {
                        type: "submit",
                        text: "Вставить таблицу",
                        primary: true,
                    },
                ],
                onSubmit: (api) => {
                    const data = api.getData();

                    let midTable = "";
                    for (let i = 0; i < rows; i++) {
                        const name = data[`row${i + 1}col1`];
                        const measure = data[`row${i + 1}col2`];
                        const price = data[`row${i + 1}col3`];

                        if (name && measure && price) {
                            midTable += `
                              <tr class="calc_row">
                                <td>${name}</td>
                                <td>${measure}</td>
                                <td class="calc_count">
                                  <div class="actionButton">
                                    <div class="minus_count">-</div>
                                    <input name="input_count" type="text" class="input_count" placeholder="0">
                                    <div class="plus_count">+</div>
                                  </div>
                                </td>
                                <td class="calc_price">${price}</td>
                                <td class="calc_sum">0</td>
                              </tr>
                          `;
                        }
                    }

                    const html = `
                    <div class="estimatesContent">
                      <div class="estimates">
                        <div class="estimates_close"></div>
                        <div class="estimates__menu"></div>
                        <div class="estimates__content">

                          <div class="estimates__items active">
                            <div class="estimates__title">${title}</div>
                            <div class="estimates__typeWork">${title}</div>
                            <table class="table table-tr_td table_td" class="estimates__tableHead">
                              <tbody>
                                <tr class="bold">
                                  <td>Наименование работ</td>
                                  <td>Ед. изм.</td>
                                  <td>Количество</td>
                                  <td>Цена от, руб.</td>
                                  <td>Сумма</td>
                                </tr>
                                ${midTable}

                              </tbody>
                            </table>
                          </div>

                        </div>
                      </div>

                    </div>
                  `;

                    editor.insertContent(html);

                    api.close();
                },
            };
        };

        const pageOneConfig = {
            title: "Введите кол-во строк в таблице",
            body: {
                type: "panel",
                items: [
                    {
                        type: "input",
                        name: "title",
                        label: "Заголовок",
                        placeholder: "Кровельные работы",
                    },
                    {
                        type: "input",
                        name: "rowsCount",
                        label: "Кол-во строк",
                        placeholder: "5",
                    },
                ],
            },
            buttons: [
                {
                    type: "cancel",
                    text: "Отмена",
                },
                {
                    type: "submit",
                    text: "Продолжить",
                    primary: true,
                },
            ],
            onSubmit: (api) => {
                let { title, rowsCount } = api.getData();
                rowsCount = parseInt(rowsCount);

                api.redial(
                    getPageTwoConfig(title, isNaN(rowsCount) ? 0 : rowsCount)
                );
            },
        };

        editor.windowManager.open(pageOneConfig);
    },
});
