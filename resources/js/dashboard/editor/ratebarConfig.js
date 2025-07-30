export const getRatebarConfig = (editor) => ({
    text: "Rate bar",
    tooltip: "Вставить rate bar",
    onAction: () => {
        //Возвращает массив объектов критериев
        const createCriteriaItems = (quantity) =>
            Array.from({ length: quantity }, (_, index) => ({
                type: "bar",
                items: [
                    {
                        type: "input",
                        name: `crit${index + 1}`,
                        label: `Критерий${index + 1}`,
                    },
                    {
                        type: "input",
                        name: `rate${index + 1}`,
                        label: `Оценка${index + 1}`,
                    },
                ],
            }));

        //Возвращает массив объектов плюсов/минусов
        const createConsAndProsItems = (quantity, prosOrCons) =>
            Array.from({ length: quantity }, (_, index) => {
                const item = {
                    type: "input",
                    name: `${prosOrCons}Item${index + 1}`,
                };

                if (prosOrCons === "pros") {
                    item.label = `Плюс${index + 1}`;
                } else {
                    item.label = `Минус${index + 1}`;
                }

                return item;
            });

        const config = {
            title: "Вставить Rate bar",
            body: {
                type: "tabpanel",
                tabs: [
                    {
                        name: "general",
                        title: "Основные",
                        items: [
                            {
                                type: "input",
                                name: "title",
                                label: "Заголовок",
                            },
                            {
                                type: "textarea",
                                name: "description",
                                label: "Описание",
                            },
                        ],
                    },
                    {
                        name: "criteries",
                        title: "Критерии",
                        items: createCriteriaItems(5),
                    },
                    {
                        name: "pros",
                        title: "Плюсы",
                        items: createConsAndProsItems(5, "pros"),
                    },
                    {
                        name: "cons",
                        title: "Минусы",
                        items: createConsAndProsItems(5, "cons"),
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
                    text: "Вставить",
                    primary: true,
                },
            ],
            onSubmit: (api) => {
                const data = api.getData();

                const criteries = [];
                const cons = [];
                const pros = [];

                for (let key in data) {
                    if (key.includes("crit")) {
                        const criteria = data[key].trim();

                        if (!criteria) {
                            continue;
                        }

                        const index = key.charAt(key.length - 1);

                        criteries.push([
                            data[key].trim(),
                            isNaN(parseInt(data[`rate${index}`]))
                                ? 0
                                : parseInt(data[`rate${index}`]),
                        ]);

                        continue;
                    }

                    if (key.includes("pros")) {
                        const item = data[key].trim();

                        if (!item) {
                            continue;
                        }

                        pros.push(item);

                        continue;
                    }

                    if (key.includes("cons")) {
                        const item = data[key].trim();

                        if (!item) {
                            continue;
                        }

                        cons.push(item);

                        continue;
                    }
                }

                const totalScore =
                    criteries
                        .map((item) => item[1])
                        .reduce((acc, curr) => acc + curr, 0) /
                    criteries.length;

                const html = `
                <div class='rate_bar_wrap'>
                  <div class='review-top'>
                    <div class='overall-score'>
                      <span class='overall r_score_7'>${totalScore.toFixed(
                          1
                      )}</span>
                      <span class='overall-text'>Total Score</span>
                    </div>
                    <div class='review-text'>
                      <span class='review-header'>${data.title}</span>
                      <p>${data.description}</p>
                    </div>
                  </div>

                  <div class='review-criteria'>

                    ${criteries
                        .map((item) => {
                            if (item[0]) {
                                return `<div class='rate-bar clearfix progress-bar'>
                                  <div class='rate-bar-title'><span>${item[0]}</span></div>
                                  <div class='rate-bar-bar  progress r_score_7' style='width: ${item[1]}0%;--time: 2.2s;'></div>
                                  <div class='rate-bar-percent'>${item[1]}</div>
                                </div>`;
                            }
                        })
                        .join("\n")}
                    

                  </div>

                  <!-- PROS CONS BLOCK-->
                  <div class='pros_cons_values_in_rev'>

                    <div class='wpsm-one-half wpsm-column-first'>
                      <div class='wpsm_pros padd20'>
                        <div class='title_pros'>Плюсы</div>
                        <ul>
                          ${pros
                              .map((item) => {
                                  return `<li>${item}</li>`;
                              })
                              .join("\n")}
                        </ul>
                      </div>
                    </div>

                    <div class='wpsm-one-half wpsm-column-last'>
                      <div class='wpsm_cons padd20'>
                        <div class='title_cons'>Минусы</div>
                        <ul>
                        ${cons
                            .map((item) => {
                                return `<li>${item}</li>`;
                            })
                            .join("\n")}
                        </ul>
                      </div>
                    </div>

                  </div>

                </div>
              `;

                editor.insertContent(html);

                api.close();
            },
        };

        editor.windowManager.open(config);
    },
});
