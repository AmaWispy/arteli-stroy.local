const getPageTwoConfig = (editor, quantity) => ({
    title: "Видео контейнер",
    body: {
        type: "panel",
        items: [
            {
                type: "htmlpanel",
                html: '<div style="display: flex; justify-content: space-between"><b>Youtube id</b><b>Rutube id</b></div>',
            },
            ...Array.from({ length: quantity }, (_, i) => ({
                type: "bar",
                items: Array.from({ length: 2 }, (_, j) => ({
                    type: "input",
                    name: `row${i + 1}col${j + 1}`,
                    label: `${i + 1}:${j + 1}`,
                    placeholder: "id видео",
                })),
            })),
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

        let content = "";
        for (let i = 0; i < quantity; i++) {
            const id = data[`row${i + 1}col1`].trim();
            const reserveId = data[`row${i + 1}col2`].trim();

            if (id && reserveId) {
                content += `
                    <div class="video-container__item" data-id="${id}" data-reserve-id="${reserveId}" >
                        <img loading="lazy" src="https://img.youtube.com/vi/${id}/0.jpg">
                        <div class="video-container__btn">
                            <svg height="100%" version="1.1" viewBox="0 0 68 48" width="100%"><path class="ytp-large-play-button-bg" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z" fill="#f00"></path><path d="M 45,24 27,14 27,34" fill="#fff"></path></svg>
                        </div>
                    </div>
                `;
            }

            if (!id && reserveId) {
                content += `
                    <div class="video-container__item" data-id="${reserveId}">
                        <img loading="lazy" src="https://rutube.ru/api/video/${reserveId}/thumbnail/?redirect=1">
                        <div class="video-container__btn">
                            <svg height="100%" version="1.1" viewBox="0 0 68 48" width="100%"><path class="ytp-large-play-button-bg" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z" fill="#f00"></path><path d="M 45,24 27,14 27,34" fill="#fff"></path></svg>
                        </div>
                    </div>
                `;
            }
        }

        const html = `
        <div class="video-container">
          ${content}
        </div>
      `;

        editor.insertContent(html);

        api.close();
    },
});

export const getVideoConfig = (editor) => ({
    title: "Введите кол-во видео",
    body: {
        type: "panel",
        items: [
            {
                type: "input",
                name: "quantity",
                label: "Кол-во",
                placeholder: "3",
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
        let { quantity } = api.getData();
        quantity = parseInt(quantity);

        if (isNaN(quantity)) {
            quantity = 0;
        }

        api.redial(getPageTwoConfig(editor, quantity));
    },
});
