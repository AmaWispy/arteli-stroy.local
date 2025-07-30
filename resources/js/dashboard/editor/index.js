import tinymce from "tinymce";
/* Default icons are required. After that, import custom icons if applicable */
import "tinymce/icons/default/";

/* Required TinyMCE components */
import "tinymce/themes/silver/";
import "tinymce/models/dom/";

/* Import a skin (can be a custom skin instead of the default) */
import "tinymce/skins/ui/oxide/skin.js";

// Plugins
import "tinymce/plugins/code";
import "tinymce/plugins/preview";
import "tinymce/plugins/fullscreen";
import "tinymce/plugins/lists";
import "tinymce/plugins/anchor";
import "tinymce/plugins/link";
import "./plugins/powerpaste/plugin.min.js";

//custom js
import "../../modules/tabs";

// Configs
import { getRatebarConfig } from "./ratebarConfig";
import { getTableConfig } from "./tableConfig";
import { getVideoConfig } from "./video-config.js";

tinymce.PluginManager.add("artel_image_uploader", (editor) => {
    const STATUS_SUCCESS = "success";
    const STATUS_ERROR = "error";
    let dropzoneInputEnd = null;

    const sleep = (ms) => {
        return new Promise((resolve) => setTimeout(resolve, ms));
    };

    const uploadFiles = async function (url, files) {
        try {
            const formData = new FormData();

            for (const file of files) {
                formData.append("images[]", file);
            }
            formData.append("images[]", files);

            const response = await fetch(url, {
                method: "POST",
                body: formData,
            });

            if (response.ok) {
                const result = await response.json();
                console.log("Файлы успешно отправлены:", result);

                return result;
            } else {
                console.error(
                    "Ошибка при отправке файлов:",
                    response.statusText
                );
            }
        } catch (error) {
            console.error("Произошла ошибка:", error);
        }

        return false;
    };

    const showLoader = () => {
        const loaderEl = document.querySelector(".dropzone-loader");

        if (!loaderEl) return;

        if (!loaderEl.classList.contains("show")) {
            loaderEl.classList.add("show");
        }
    };

    const hideLoader = () => {
        const loaderEl = document.querySelector(".dropzone-loader");

        if (!loaderEl) return;

        loaderEl.classList.remove("show");
    };

    const showStatus = (status) => {
        const statusEl = document.querySelector(".dropzone-status");

        if (!statusEl) return;

        statusEl.innerHTML = "";

        if (status === STATUS_SUCCESS) {
            statusEl.insertAdjacentHTML(
                "beforeend",
                `<p style="color: green">Изображения успешно загружены</p>`
            );
        }
        if (status === STATUS_ERROR) {
            statusEl.insertAdjacentHTML(
                "beforeend",
                `<p style="color: red">Не удалось загрузить изображения</p>`
            );
        }
    };

    const previews = (files) => {
        const dialog = document.querySelector(".tox-dialog");

        if (!dialog) return;

        const form = dialog.querySelector(".tox-form");

        if (!form) return;

        const preview = form.querySelector(".previews");

        if (preview) {
            preview.remove();
        }

        let htmlPreview =
            '<div class="tox-form__group previews" aria-disabled="true" style="display:flex;flex-wrap: wrap;gap: 10px;"><label class="tox-label" style="width: 100%">Preview</label>';

        const filesArr = Object.values(files);

        for (let i = 0; i < filesArr.length; i++) {
            const file = filesArr[i];
            const src = window.location.origin + file;

            const srcId = "img_src_" + i;
            const altId = "img_alt_" + i;
            const titleId = "img_title_" + i;

            htmlPreview += `
                <div class="preview-img-group" style="margin-bottom: 20px">
                    <img class="shadow rounded" src="${src}" style="object-fit: contain; width: 102px;height: 102px;display: flex;border: 1px dashed #006ce7;">
                    <input type="hidden" tabindex="-1" id="${srcId}" name="${srcId}" class="tox-textfield" value="${file}">
                    <label for="">Тайтл</label>
                    <input type="text" tabindex="-1" id="${titleId}" name="${titleId}" class="tox-textfield">
                    <label for="">Альт</label>
                    <input type="text" tabindex="-1" id="${altId}" name="${altId}" class="tox-textfield">
                </div>
            `;
        }

        htmlPreview += "</div>";

        form.insertAdjacentHTML("beforeend", htmlPreview);
    };

    const previewChangeHandler = (e) => {
        if (e) {
            e.preventDefault();
        }

        const previewGroups = document.querySelectorAll(".preview-img-group");
        let i = 0;
        const data = [];

        for (const previewGroup of previewGroups) {
            const srcId = "img_src_" + i;
            const altId = "img_alt_" + i;
            const titleId = "img_title_" + i;

            const srcField = previewGroup.querySelector(`[name=${srcId}]`);
            const altField = previewGroup.querySelector(`[name=${altId}]`);
            const titleField = previewGroup.querySelector(`[name=${titleId}]`);

            data.push({
                src: srcField.value,
                alt: altField.value,
                title: titleField.value,
            });
            i++;
        }

        if (dropzoneInputEnd) {
            dropzoneInputEnd.value = JSON.stringify(data);
        }

        return data;
    };

    const onAppendFiles = async (files) => {
        showStatus("");
        previews([]);

        showLoader();
        const result = await uploadFiles("/api/media/upload", files);

        if (
            result === false ||
            (result instanceof Object &&
                result.hasOwnProperty("status") &&
                result.status === false)
        ) {
            showStatus(STATUS_ERROR);
            previews([]);
        } else {
            previews(result.images);

            const previewGroups =
                document.querySelectorAll(".preview-img-group");

            for (const previewGroup of previewGroups) {
                const previewFields = previewGroup.querySelectorAll("input");

                for (const previewField of previewFields) {
                    previewField.addEventListener(
                        "change",
                        previewChangeHandler
                    );
                }
            }

            previewChangeHandler(null);

            showStatus(STATUS_SUCCESS);
        }

        hideLoader();

        return result;
    };

    const initUploader = () => {
        dropzoneInputEnd = document.querySelector(
            'input[data-mce-name="dropzoneInput"]'
        );
        const dropZoneContainer = document.querySelector(".dropzone");

        if (!dropZoneContainer) return;

        const dropZone = dropZoneContainer.querySelector(".tox-dropzone");

        if (!dropZone) return;

        const inputFile = dropZone.querySelector('input[type="file"]');
        const actionBtn = dropZone.querySelector("button.tox-button");

        if (!inputFile || !actionBtn) return;

        let hoverClassName = "hover";

        dropZone.addEventListener("dragenter", function (e) {
            e.preventDefault();
            dropZone.classList.add(hoverClassName);
        });

        dropZone.addEventListener("dragover", function (e) {
            e.preventDefault();
            dropZone.classList.add(hoverClassName);
        });

        dropZone.addEventListener("dragleave", function (e) {
            e.preventDefault();
            dropZone.classList.remove(hoverClassName);
        });

        actionBtn.addEventListener("click", function (e) {
            e.preventDefault();
            inputFile.click();
        });

        // Это самое важное событие, событие, которое дает доступ к файлам
        dropZone.addEventListener("drop", function (e) {
            e.preventDefault();
            dropZone.classList.remove(hoverClassName);
            onAppendFiles(Array.from(e.dataTransfer.files));
        });

        inputFile.onchange = function () {
            onAppendFiles(this.files);
        };
    };

    const openDialog = async () => {
        const dialog = await editor.windowManager.open({
            title: "Вставить изображение",
            body: {
                type: "panel",
                items: [
                    {
                        type: "htmlpanel",
                        html: `
                            <div class="dropzone-loader"></div>
                            <div class="tox-form__group tox-form__group--stretched dropzone">
                                <p>Изображения конвентируются в webp не изменя размера. За исключением превью (-300x.webp) </p>
                                <div class="dropzone-status"></div>
                                <div class="tox-dropzone-container" aria-disabled="false" id="form-field_dropzone_upload">
                                    <div class="tox-dropzone"><p>Прикрепите изображение сюда</p>
                                        <input type="file" accept="image/*" style="display: none;" multiple>
                                        <button type="button" tabindex="-1" class="tox-button tox-button--secondary" style="position: relative;">
                                            Добавить изображения
                                        </button>
                                    </div>
                                </div>
                            </div>`,
                        name: "artel_uploader",
                    },
                    {
                        type: "input",
                        name: "dropzoneInput",
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
                const { dropzoneInput } = api.getData();

                const data = JSON.parse(dropzoneInput);

                let html = "";
                const isPortfolioPage = window.location.pathname.includes(
                    "dashboard/portfolio/"
                );

                for (const dataImg of data) {
                    const { title, alt, src } = dataImg;

                    if (isPortfolioPage) {
                        html += `<img class="sib article__img item" loading="lazy" width="280" height="120" src="${src}" title="${title}" alt="${alt}">\n`;
                    } else {
                        html += `<img class="sib article__img m-auto" loading="lazy" width="900" height="500" src="${src}" title="${title}" alt="${alt}">\n`;
                    }
                }

                editor.insertContent(html);
                api.close();
            },
        });

        initUploader();

        return dialog;
    };

    const openEditDialog = async (selectedNode) => {
        const imgSrc =
            selectedNode.src.replace(window.location.origin, "") || "";
        const imgAlt = selectedNode.alt || "";
        const imgTitle = selectedNode.title || "";

        const dialog = await editor.windowManager.open({
            title: "Изменить изображение",
            body: {
                type: "panel",
                items: [
                    {
                        type: "input",
                        name: "src",
                        label: "Source",
                    },
                    {
                        type: "input",
                        name: "title",
                        label: "Тайтл",
                    },
                    {
                        type: "input",
                        name: "alt",
                        label: "Альт",
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
            initialData: {
                src: imgSrc,
                alt: imgAlt,
                title: imgTitle,
            },
            onSubmit: (api) => {
                const data = api.getData();
                editor.dom.setAttribs(selectedNode, {
                    src: data.src,
                    alt: data.alt,
                    title: data.title,
                });
                api.close();
            },
        });
    };

    editor.ui.registry.addButton("image", {
        text: "Изображения",
        icon: "image",
        onAction: () => {
            /* Open window */
            openDialog();
        },
    });

    editor.ui.registry.addMenuItem("image", {
        icon: "image",
        text: "Image",
        onAction: () => {
            openEditDialog(editor.selection.getNode());
        },
    });

    editor.ui.registry.addContextMenu("image", {
        update: (element) => (!element.src ? "" : "image"),
    });

    return {
        getMetadata: () => ({
            name: "Artel Image Uploader",
            url: "https://example.com/docs/customplugin",
        }),
    };
});

export const initEditor = async () => {
    const tinymceInstance = await tinymce.init({
        selector: "#content",
        license_key: "gpl",
        menubar: false,
        content_css: "/css/editor/tinyMCE.min.css",
        // plugins: "code preview fullscreen lists anchor link powerpaste artel_image_uploader",
        plugins:
            "code preview fullscreen lists anchor link powerpaste artel_image_uploader",
        toolbar:
            "undo redo image link anchor numlist bullist customLink insertSeeAlso customH2 customH3 pricetable totalprice tabs quadtabs faq | tableConverter ratebar commercial advantages how-work warranty phonelink content content2 service-portal video-container preview fullscreen code",
        verify_html: false,
        relative_urls: false,
        paste_remove_styles_if_webkit: true,
        paste_as_text: true,
        valid_children: "+button[p]",
        setup: (editor) => {
            //Image
            // editor.ui.registry.addButton("image", {
            //     text: "Изображение",
            //     tooltip: "Вставить изображение",
            //     onAction: () => {
            //         editor.windowManager.open({
            //             title: "Вставить изображение",
            //             body: {
            //                 type: "panel",
            //                 items: [
            //                     {
            //                       type: "htmlpanel",
            //                         html: `
            //                         <div class="tox-form__group tox-form__group--stretched dropzone">
            //                             <label class="tox-label" for="form-field_dropzone_upload">Изображения</label>
            //                             <div class="tox-dropzone-container" aria-disabled="false" id="form-field_dropzone_upload">
            //                                 <div class="tox-dropzone"><p>Прикрепите изображение сюда</p>
            //                                     <button type="button" tabindex="-1" data-alloy-tabstop="true" class="tox-button tox-button--secondary" style="position: relative;">Добавить изображения
            //                                         <input type="file" accept="image/*" style="display: none;">
            //                                     </button>
            //                                 </div>
            //                             </div>
            //                         </div>`,
            //                         name: 'uploader'
            //                     },
            //                     {
            //                         type: "input",
            //                         name: "alt",
            //                         label: "Alt",
            //                         placeholder: "альтернативный текст",
            //                     },
            //                     {
            //                         type: "input",
            //                         name: "title",
            //                         label: "Title",
            //                         placeholder: "заголовок изображения",
            //                     },
            //                 ],
            //             },
            //             buttons: [
            //                 {
            //                     type: "cancel",
            //                     text: "Отмена",
            //                 },
            //                 {
            //                     type: "submit",
            //                     text: "Вставить",
            //                     primary: true,
            //                 },
            //             ],
            //             onTabChange: (api, details) => {
            //                 initDropzone();
            //             },
            //             onAction: (api, details) => {
            //                 initDropzone();
            //             },
            //             onSubmit: (api) => {
            //                 const { path, alt, title } = api.getData();
            //
            //                 const html = `<img class="sib article__img m-auto" loading="lazy" width="900" height="500" src="/${path}" title="${title}" alt="${alt}">`;
            //
            //                 editor.insertContent(html);
            //
            //                 api.close();
            //             },
            //         });
            //     },
            // });

            editor.ui.registry.addButton("insertSeeAlso", {
                text: "Смотрите также",
                tooltip: "Вставить 'Смотрите также'",
                onAction: function () {
                    editor.windowManager.open({
                        title: "Вставить 'Смотрите также'",
                        body: {
                            type: "panel",
                            items: [
                                {
                                    type: "input",
                                    name: "postTitle",
                                    label: "Заголовок поста",
                                },
                                {
                                    type: "input",
                                    name: "postLink",
                                    label: "Ссылка на пост",
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
                                primary: !0,
                            },
                        ],
                        onSubmit: function (api) {
                            const { postTitle, postLink } = api.getData();
                            const html = `<div class="see"><a href="${postLink}" target="_blank" class="see-also" rel="nofollow"><div class="see-also__text"><span class="ctaText">Смотрите также:</span>&nbsp;<span class="postTitle">${postTitle}</span></div></a></div>`;

                            editor.insertContent(html);

                            api.close();
                        },
                    });
                },
            });

            editor.ui.registry.addButton("tableConverter", {
                text: "Конвертер таблицы",
                tooltip: "Конвертирует таблицу из Word в калькулятор",
                onAction: function () {
                    editor.windowManager.open({
                        title: "Вставьте таблицу из Word",
                        width: 800,
                        height: 600,
                        body: {
                            type: "panel",
                            items: [
                                {
                                    type: "textarea",
                                    name: "tableContent",
                                    label: "Содержимое таблицы",
                                    multiline: true,
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
                                text: "Конвертировать",
                                primary: true,
                            },
                        ],
                        onSubmit: function (api) {
                            const content = api.getData().tableContent;
                            const lines = content.split("\n");
                            const title = lines[0];
                            const rows = lines.slice(2);

                            let result = `
                            <div class="estimatesContent">
                                <div class="estimates">
                                    <div class="estimates_close"></div>
                                    <div class="estimates__menu"></div>
                                    <div class="estimates__content">
                                        <div class="estimates__items active">
                                            <div class="estimates__title">${title}</div>
                                            <div class="estimates__typeWork">${title}</div>
                                            <table class="table table-tr_td table_td">
                                                <tbody>
                                                    <tr class="bold">
                                                        <td>Наименование работ</td>
                                                        <td>Ед. изм.</td>
                                                        <td>Количество</td>
                                                        <td>Цена от, руб.</td>
                                                        <td>Сумма</td>
                                                    </tr>`;

                            rows.forEach((row) => {
                                if (row.trim()) {
                                    const cells = row.split("\t");
                                    if (cells.length >= 3) {
                                        result += `
                                        <tr class="calc_row">
                                            <td>${cells[0]}</td>
                                            <td>${cells[1]}</td>
                                            <td class="calc_count">
                                                <div class="actionButton">
                                                    <div class="minus_count">-</div>
                                                    <input name="input_count" type="text" class="input_count" placeholder="0">
                                                    <div class="plus_count">+</div>
                                                </div>
                                            </td>
                                            <td class="calc_price">${cells[2]}</td>
                                            <td class="calc_sum">0</td>
                                        </tr>`;
                                    }
                                }
                            });

                            result += `
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>`;

                            editor.insertContent(result);
                            api.close();
                        },
                    });
                },
            });

            // editor.ui.registry.addButton("tabs", {
            //     text: "желт. табы",
            //     onAction: function () {
            //         const windowConfig = {
            //             title: "Введите кол-во табов",
            //             body: {
            //                 type: "panel",
            //                 items: [
            //                     {
            //                         type: "htmlpanel",
            //                         html: "<p>Макс. кол-во - 20 табов</p>",
            //                     },
            //                     {
            //                         type: "input",
            //                         name: "quantity",
            //                         label: "Кол-во",
            //                         placeholder: "5",
            //                     },
            //                 ],
            //             },
            //             buttons: [
            //                 {
            //                     type: "cancel",
            //                     text: "Отмена",
            //                 },
            //                 {
            //                     type: "submit",
            //                     text: "Продолжить",
            //                     primary: !0,
            //                 },
            //             ],
            //             onSubmit: function (t) {
            //                 var o = t.getData().quantity;
            //                 (o = parseInt(o)),
            //                     isNaN(o) && (o = 0),
            //                     o > 20 && (o = 20),
            //                     t.redial(
            //                         (function (t) {
            //                             return {
            //                                 title: "Табы",
            //                                 body: {
            //                                     type: "tabpanel",
            //                                     tabs: Array.from(
            //                                         {
            //                                             length: t,
            //                                         },
            //                                         function (e, t) {
            //                                             return {
            //                                                 title: "Таб ".concat(
            //                                                     t + 1
            //                                                 ),
            //                                                 name: "tab".concat(
            //                                                     t + 1
            //                                                 ),
            //                                                 items: [
            //                                                     {
            //                                                         type: "input",
            //                                                         name: "title".concat(
            //                                                             t + 1
            //                                                         ),
            //                                                         label: "Заголовок".concat(
            //                                                             t + 1
            //                                                         ),
            //                                                     },
            //                                                     {
            //                                                         type: "textarea",
            //                                                         name: "description".concat(
            //                                                             t + 1
            //                                                         ),
            //                                                         label: "Описание".concat(
            //                                                             t + 1
            //                                                         ),
            //                                                     },
            //                                                 ],
            //                                             };
            //                                         }
            //                                     ),
            //                                 },
            //                                 buttons: [
            //                                     {
            //                                         type: "cancel",
            //                                         text: "Отмена",
            //                                     },
            //                                     {
            //                                         type: "submit",
            //                                         text: "Вставить",
            //                                         primary: !0,
            //                                     },
            //                                 ],
            //                                 onSubmit: function (o) {
            //                                     for (
            //                                         var n = o.getData(),
            //                                             r = "",
            //                                             s = "",
            //                                             a = 0;
            //                                         a < t;
            //                                         a++
            //                                     ) {
            //                                         var i =
            //                                                 n[
            //                                                     "title".concat(
            //                                                         a + 1
            //                                                     )
            //                                                 ].trim(),
            //                                             l =
            //                                                 n[
            //                                                     "description".concat(
            //                                                         a + 1
            //                                                     )
            //                                                 ].trim();
            //                                         i &&
            //                                             l &&
            //                                             ((r +=
            //                                                 '<button class="tab__btn '
            //                                                     .concat(
            //                                                         0 === a
            //                                                             ? "tab__btn_active"
            //                                                             : "",
            //                                                         ' ">'
            //                                                     )
            //                                                     .concat(
            //                                                         i,
            //                                                         "</button>"
            //                                                     )),
            //                                             (s +=
            //                                                 '<div class="tab__content '
            //                                                     .concat(
            //                                                         0 === a
            //                                                             ? "tab__content_active"
            //                                                             : "",
            //                                                         ' "><p>'
            //                                                     )
            //                                                     .concat(
            //                                                         l,
            //                                                         "</p></div>"
            //                                                     )));
            //                                     }
            //                                     var c =
            //                                         '\n                              <div class="tab">\n\n                                <div class="tab__header">\n                                  '
            //                                             .concat(
            //                                                 r,
            //                                                 "\n                                </div>\n\n                                "
            //                                             )
            //                                             .concat(
            //                                                 s,
            //                                                 "\n\n                              </div>\n                            "
            //                                             );
            //                                     editor.insertContent(c),
            //                                         o.close();
            //                                 },
            //                             };
            //                         })(o)
            //                     );
            //             },
            //         };

            //         editor.windowManager.open(windowConfig);
            //     },
            // });

            //Добавить ссылку на номер телефона
            editor.ui.registry.addButton("phonelink", {
                text: "Ссылка на телефон",
                tooltip: "Вставить ссылку на телефон",
                onAction: () =>
                    editor.insertContent(
                        '<a class="link" rel="nofollow" href="tel:+74952589397">+7 (495) 258-93-97</a>'
                    ),
            });

            //Добавить элемент rate bar
            editor.ui.registry.addButton("ratebar", getRatebarConfig(editor));

            //Добавить таблицу с ценами
            editor.ui.registry.addButton("pricetable", getTableConfig(editor));

            //Добавить итоговую стоимость
            editor.ui.registry.addButton("totalprice", {
                text: "Итого",
                tooltip: "Блок с итоговой ценой для таблицы",
                onAction: () =>
                    editor.insertContent(
                        `
                          <div class="estimates__sum fixed">Итого: <span id="calc_sum">0</span> руб. <span class="extimates-text">Сделать заказ или получить консультацию:</span>
                            <a class="mobile-number link" href="tel:+74952589397">+7 (495) 258-93-97</a>
                          </div>
                        `
                    ),
            });

            // Tabs > 4
            editor.ui.registry.addButton("tabs", {
                text: "Табы",
                tooltip: "Табы для случая > 4",
                onAction: () => {
                    const getPageTwoConfig = (quantity) => ({
                        title: "Табы",
                        body: {
                            type: "tabpanel",
                            tabs: Array.from(
                                { length: quantity },
                                (_, index) => ({
                                    title: `Таб ${index + 1}`,
                                    name: `tab${index + 1}`,
                                    items: [
                                        {
                                            type: "input",
                                            name: `title${index + 1}`,
                                            label: `Заголовок${index + 1}`,
                                        },
                                        {
                                            type: "textarea",
                                            name: `description${index + 1}`,
                                            label: `Описание${index + 1}`,
                                        },
                                    ],
                                })
                            ),
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

                            let header = "";
                            let content = "";
                            for (let i = 0; i < quantity; i++) {
                                const title = data[`title${i + 1}`].trim();
                                const description =
                                    data[`description${i + 1}`].trim();

                                if (title && description) {
                                    header += `<button class="tab__btn ${
                                        i === 0 ? "tab__btn_active" : ""
                                    } ">${title}</button>`;

                                    content += `<div class="tab__content ${
                                        i === 0 ? "tab__content_active" : ""
                                    } "><p>${description}</p></div>`;
                                }
                            }

                            const html = `
                              <div class="tab">
            
                                <div class="tab__header">
                                  ${header}
                                </div>
            
                                ${content}
            
                              </div>
                            `;

                            editor.insertContent(html);

                            api.close();
                        },
                    });

                    const pageOneConfig = {
                        title: "Введите кол-во табов",
                        body: {
                            type: "panel",
                            items: [
                                {
                                    type: "htmlpanel",
                                    html: "<p>Макс. кол-во - 20 табов</p>",
                                },
                                {
                                    type: "input",
                                    name: "quantity",
                                    label: "Кол-во",
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
                            let { quantity } = api.getData();
                            quantity = parseInt(quantity);

                            if (isNaN(quantity)) {
                                quantity = 0;
                            }

                            if (quantity > 20) {
                                quantity = 20;
                            }

                            api.redial(getPageTwoConfig(quantity));
                        },
                    };

                    editor.windowManager.open(pageOneConfig);
                },
            });

            //Tabs <= 4
            editor.ui.registry.addButton("quadtabs", {
                text: "Табы 4x",
                tooltip: "Табы для случая <= 4",
                onAction: () => {
                    const config = {
                        title: "Табы",
                        body: {
                            type: "tabpanel",
                            tabs: Array.from({ length: 4 }, (_, index) => ({
                                title: `Таб ${index + 1}`,
                                name: `tab${index + 1}`,
                                items: [
                                    {
                                        type: "input",
                                        name: `title${index + 1}`,
                                        label: `Заголовок${index + 1}`,
                                    },
                                    {
                                        type: "textarea",
                                        name: `description${index + 1}`,
                                        label: `Описание${index + 1}`,
                                    },
                                ],
                            })),
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

                            let header = "";
                            let content = "";
                            for (let i = 0; i < 4; i++) {
                                const title = data[`title${i + 1}`].trim();
                                const description =
                                    data[`description${i + 1}`].trim();

                                if (title && description) {
                                    header += `
                                      <button class="four-tabs__btn ${
                                          i === 0 ? "four-tabs__btn_active" : ""
                                      }">
                                        <p>${title}</p>
                                      </button>
                                    `;

                                    content += `
                                      <div class="four-tabs__content ${
                                          i === 0
                                              ? "four-tabs__content_active"
                                              : ""
                                      }">
                                        <p>${description}</p>
                                      </div>
                                    `;
                                }
                            }

                            const html = `
                              <div class="four-tabs">

                                <div class="four-tabs__header">
                                  ${header}
                                </div>

                                <div class="four-tabs__wrapper">
                                  ${content}
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

            // editor.ui.registry.addButton("faq", {
            //     text: "FAQ",
            //     tooltip: "ВОПРОСЫ И ОТВЕТЫ",
            //     onAction: () => {
            //         const getPageTwoConfig = (quantity) => ({
            //             title: "FAQ",
            //             body: {
            //                 type: "tabpanel",
            //                 tabs: Array.from(
            //                     { length: quantity },
            //                     (_, index) => ({
            //                         title: `Вопрос ${index + 1}`,
            //                         name: `tab${index + 1}`,
            //                         items: [
            //                             {
            //                                 type: "input",
            //                                 name: `question${index + 1}`,
            //                                 label: `Вопрос${index + 1}`,
            //                             },
            //                             {
            //                                 type: "textarea",
            //                                 name: `answer${index + 1}`,
            //                                 label: `Ответ${index + 1}`,
            //                             },
            //                         ],
            //                     })
            //                 ),
            //             },
            //             buttons: [
            //                 {
            //                     type: "cancel",
            //                     text: "Отмена",
            //                 },
            //                 {
            //                     type: "submit",
            //                     text: "Вставить",
            //                     primary: true,
            //                 },
            //             ],
            //             onSubmit: (api) => {
            //                 const data = api.getData();
            //
            //                 let content = "";
            //                 for (let i = 0; i < quantity; i++) {
            //                     const question =
            //                         data[`question${i + 1}`].trim();
            //                     const answer = data[`answer${i + 1}`].trim();
            //
            //                     if (question && answer) {
            //                         content += `
            //                           <section class='faq-section'>
            //                             <div itemscope itemprop='mainEntity' itemtype='https://schema.org/Question'>
            //                               <input type='checkbox' id='q${i + 1}'>
            //                               <label for='q${
            //                                   i + 1
            //                               }'><span itemprop='name'>${question}</span></label>
            //                               <p itemscope itemprop='acceptedAnswer' itemtype='https://schema.org/Answer'>
            //                                 <span itemprop='text'>${answer}</span>
            //                               </p>
            //                             </div>
            //                           </section>
            //                         `;
            //                     }
            //                 }
            //
            //                 const html = `
            //                   <div itemscope itemtype='https://schema.org/FAQPage'>
            //                     ${content}
            //                   </div>
            //                 `;
            //
            //                 editor.insertContent(html);
            //
            //                 api.close();
            //             },
            //         });
            //
            //         const pageOneConfig = {
            //             title: "Введите кол-во вопросов",
            //             body: {
            //                 type: "panel",
            //                 items: [
            //                     {
            //                         type: "htmlpanel",
            //                         html: "<p>Макс. кол-во - 20 вопросов</p>",
            //                     },
            //                     {
            //                         type: "input",
            //                         name: "quantity",
            //                         label: "Кол-во",
            //                         placeholder: "5",
            //                     },
            //                 ],
            //             },
            //             buttons: [
            //                 {
            //                     type: "cancel",
            //                     text: "Отмена",
            //                 },
            //                 {
            //                     type: "submit",
            //                     text: "Продолжить",
            //                     primary: true,
            //                 },
            //             ],
            //             onSubmit: (api) => {
            //                 let { quantity } = api.getData();
            //                 quantity = parseInt(quantity);
            //
            //                 if (isNaN(quantity)) {
            //                     quantity = 0;
            //                 }
            //
            //                 if (quantity > 20) {
            //                     quantity = 20;
            //                 }
            //
            //                 api.redial(getPageTwoConfig(quantity));
            //             },
            //         };
            //
            //         editor.windowManager.open(pageOneConfig);
            //     },
            // });

            editor.ui.registry.addButton("faq", {
                text: "FAQ",
                tooltip: "ВОПРОСЫ И ОТВЕТЫ",
                onAction: function () {
                    var t = {
                        title: "Введите кол-во вопросов",
                        body: {
                            type: "panel",
                            items: [
                                {
                                    type: "htmlpanel",
                                    html: "<p>Макс. кол-во - 20 вопросов</p>",
                                },
                                {
                                    type: "input",
                                    name: "quantity",
                                    label: "Кол-во",
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
                                primary: !0,
                            },
                        ],
                        onSubmit: function (t) {
                            var o = t.getData().quantity;
                            (o = parseInt(o)),
                                isNaN(o) && (o = 0),
                                o > 20 && (o = 20),
                                t.redial(
                                    (function (t) {
                                        return {
                                            title: "FAQ",
                                            body: {
                                                type: "tabpanel",
                                                tabs: Array.from(
                                                    {
                                                        length: t,
                                                    },
                                                    function (e, t) {
                                                        return {
                                                            title: "Вопрос ".concat(
                                                                t + 1
                                                            ),
                                                            name: "tab".concat(
                                                                t + 1
                                                            ),
                                                            items: [
                                                                {
                                                                    type: "input",
                                                                    name: "question".concat(
                                                                        t + 1
                                                                    ),
                                                                    label: "Вопрос".concat(
                                                                        t + 1
                                                                    ),
                                                                },
                                                                {
                                                                    type: "textarea",
                                                                    name: "answer".concat(
                                                                        t + 1
                                                                    ),
                                                                    label: "Ответ".concat(
                                                                        t + 1
                                                                    ),
                                                                },
                                                            ],
                                                        };
                                                    }
                                                ),
                                            },
                                            buttons: [
                                                {
                                                    type: "cancel",
                                                    text: "Отмена",
                                                },
                                                {
                                                    type: "submit",
                                                    text: "Вставить",
                                                    primary: !0,
                                                },
                                            ],
                                            onSubmit: function (o) {
                                                for (
                                                    var n = o.getData(),
                                                        r = "",
                                                        s = 0;
                                                    s < t;
                                                    s++
                                                ) {
                                                    var a =
                                                            n[
                                                                "question".concat(
                                                                    s + 1
                                                                )
                                                            ].trim(),
                                                        i =
                                                            n[
                                                                "answer".concat(
                                                                    s + 1
                                                                )
                                                            ].trim();
                                                    a &&
                                                        i &&
                                                        (r +=
                                                            "\n                                      <section class='faq-section'>\n                                        <div itemscope itemprop='mainEntity' itemtype='https://schema.org/Question'>\n                                          <input type='checkbox' id='q"
                                                                .concat(
                                                                    s + 1,
                                                                    "'>\n                                          <label for='q"
                                                                )
                                                                .concat(
                                                                    s + 1,
                                                                    "'><span itemprop='name'>"
                                                                )
                                                                .concat(
                                                                    a,
                                                                    "</span></label>\n                                          <p itemscope itemprop='acceptedAnswer' itemtype='https://schema.org/Answer'>\n                                            <span itemprop='text'>"
                                                                )
                                                                .concat(
                                                                    i,
                                                                    "</span>\n                                          </p>\n                                        </div>\n                                      </section>\n                                    "
                                                                ));
                                                }
                                                var l =
                                                    "\n                              <div itemscope itemtype='https://schema.org/FAQPage'>\n                                ".concat(
                                                        r,
                                                        "\n                              </div>\n                            "
                                                    );
                                                editor.insertContent(l),
                                                    o.close();
                                            },
                                        };
                                    })(o)
                                );
                        },
                    };
                    editor.windowManager.open(t);
                },
            });

            editor.ui.registry.addButton("commercial", {
                text: "Коммерческие блоки",
                onAction: () => {
                    editor.insertContent(
                        `
                            <div class="four-tabs">

                                <div class="four-tabs__header">
                                    <button class="four-tabs__btn four-tabs__btn_active">
                                        <p>Почему мы?</p>
                                    </button>
                                    <button class="four-tabs__btn">
                                        <p>Как мы работаем</p>
                                    </button>
                                    <button class="four-tabs__btn">
                                        <p>Гарантии</p>
                                    </button>
                                </div>

                                <div class="four-tabs__wrapper">
                                    <div class="four-tabs__content four-tabs__content_active">
                                        <div class="advantages">
                                        <h2 class="advantages-title t-center">Сотрудничая с нами вы получаете</h2>
                                        <div class="advantages-items">
                                        <div class="advantages-item">
                                            <img src="/img/interface/timer.webp" alt="timer" class="advantages-icon">
                                            <div class="advantages-body">
                                            <h3 class="advantages-item__title">Гарантию соблюдения сроков</h3>
                                            <div class="advantages-text">
                                                <ul>
                                                <li>Сдача объекта всегда точно в срок</li>
                                                <li>В случае задержки несем штрафные сакции в размере<span class="bold"> 3% за день</span></li>
                                                </ul>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="advantages-item">
                                            <img src="/img/interface/estimate.png" alt="estimate" class="advantages-icon">
                                            <div class="advantages-body">
                                            <h3 class="advantages-item__title">Прозрачную, фиксированную смету</h3>
                                            <div class="advantages-text">
                                                <ul>
                                                <li>Без скрытых дополнительных работ</li>
                                                <li>Вы платите только за то что вам нужно, а что вам нужно - выбираете сами!</li>
                                                </ul>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="advantages-item">
                                            <img src="/img/interface/whatsapp-2.png" alt="whatsApp" class="advantages-icon">
                                            <div class="advantages-body">
                                            <h3 class="advantages-item__title">Ежедневные фото-видео отчеты</h3>
                                            <div class="advantages-text">
                                                <ul>
                                                <li>Отчеты о ходе работ в whatsApp или email</li>
                                                <li>Вы будете в курсе, даже если не можете присутствовать на объекте.</li>
                                                </ul>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <img src="/img/interface/sale.webp" alt="sale">
                                    </div>
                                    </div>
                                    <div class="four-tabs__content">
                                        <div class="how-working">
                                        <h2 class="how-working__title w-100 t-center">Как мы работаем</h2>
                                        <div class="how-working__item how-working__after">
                                        <img src="/img/interface/requisition.webp" alt="смета" class="how-working__icon">
                                        <h3 class="how-working__subtitle">Оставляете заявку</h3>
                                        <div class="how-working__text">Мы с Вами связываемся и даем Вам бесплатную консультацию</div>
                                        <button class="button modal-application__open">Оставить заявку</button>
                                        </div>
                                        <div class="how-working__item">
                                        <img src="/img/interface/exit.png" alt="выезд специалиста" class="how-working__icon">
                                        <h3 class="how-working__subtitle">Согласовываем выезд</h3>
                                        <div class="how-working__text">Наш специалист выезжает к вам на объект, чтобы произвести необходимые расчеты и съем размеров</div>
                                        </div>
                                        <div class="how-working__item how-working__after">
                                        <img src="/img/interface/kommercheskoe_predlozhenie.png" alt="Коммерческое предложение" class="how-working__icon">
                                        <h3 class="how-working__subtitle">Коммерческое предложение</h3>
                                        <div class="how-working__text">По данным собранным специалистом составляем для вас смету и отправляем на ваше одобрение</div>
                                        </div>
                                        <div class="how-working__item">
                                        <img src="/img/interface/operational-efficiency.webp" alt="заключение договора" class="how-working__icon">
                                        <h3 class="how-working__subtitle">Заключаем договор</h3>
                                        <div class="how-working__text">Если Вас все устраивает заключаем договор и производим все необходимые работы</div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="four-tabs__content">
                                        <img class="sib article__img m-auto" loading="lazy" width="800" height="500" src="/img/interface/warranty-card.webp" title="Гарантийный сертификат компании «Артель и С» " alt="Гарантийный сертификат компании «Артель и С» фото">
                                    </div>
                                </div>
                            </div>
                        `
                    );
                },
            });

            editor.ui.registry.addButton("advantages", {
                text: "Преимущества",
                tooltip: "Наши преимущества",
                onAction: () =>
                    editor.insertContent(
                        `
                          <div class="advantages">
                            <h2 class="advantages-title t-center">Сотрудничая с нами вы получаете</h2>
                            <div class="advantages-items">
                              <div class="advantages-item">
                                <img src="/img/interface/timer.webp" alt="timer" class="advantages-icon">
                                <div class="advantages-body">
                                  <h3 class="advantages-item__title">Гарантию соблюдения сроков</h3>
                                  <div class="advantages-text">
                                    <ul>
                                      <li>Сдача объекта всегда точно в срок</li>
                                      <li>В случае задержки несем штрафные сакции в размере<span class="bold"> 3% за день</span></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="advantages-item">
                                <img src="/img/interface/estimate.png" alt="estimate" class="advantages-icon">
                                <div class="advantages-body">
                                  <h3 class="advantages-item__title">Прозрачную, фиксированную смету</h3>
                                  <div class="advantages-text">
                                    <ul>
                                      <li>Без скрытых дополнительных работ</li>
                                      <li>Вы платите только за то что вам нужно, а что вам нужно - выбираете сами!</li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="advantages-item">
                                <img src="/img/interface/whatsapp-2.png" alt="whatsApp" class="advantages-icon">
                                <div class="advantages-body">
                                  <h3 class="advantages-item__title">Ежедневные фото-видео отчеты</h3>
                                  <div class="advantages-text">
                                    <ul>
                                      <li>Отчеты о ходе работ в whatsApp или email</li>
                                      <li>Вы будете в курсе, даже если не можете присутствовать на объекте.</li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <img src="/img/interface/sale.webp" alt="sale">
                          </div>
                        `
                    ),
            });

            editor.ui.registry.addButton("how-work", {
                text: "Как мы работаем",
                onAction: () =>
                    editor.insertContent(
                        `
                          <div class="how-working">
                            <h2 class="how-working__title w-100 t-center">Как мы работаем</h2>
                            <div class="how-working__item how-working__after">
                              <img src="/img/interface/requisition.webp" alt="смета" class="how-working__icon">
                              <h3 class="how-working__subtitle">Оставляете заявку</h3>
                              <div class="how-working__text">Мы с Вами связываемся и даем Вам бесплатную консультацию</div>
                              <button class="button modal-application__open">Оставить заявку</button>
                            </div>
                            <div class="how-working__item">
                              <img src="/img/interface/exit.png" alt="выезд специалиста" class="how-working__icon">
                              <h3 class="how-working__subtitle">Согласовываем выезд</h3>
                              <div class="how-working__text">Наш специалист выезжает к вам на объект, чтобы произвести необходимые расчеты и съем размеров</div>
                            </div>
                            <div class="how-working__item how-working__after">
                              <img src="/img/interface/kommercheskoe_predlozhenie.png" alt="Коммерческое предложение" class="how-working__icon">
                              <h3 class="how-working__subtitle">Коммерческое предложение</h3>
                              <div class="how-working__text">По данным собранным специалистом составляем для вас смету и отправляем на ваше одобрение</div>
                            </div>
                            <div class="how-working__item">
                              <img src="/img/interface/operational-efficiency.webp" alt="заключение договора" class="how-working__icon">
                              <h3 class="how-working__subtitle">Заключаем договор</h3>
                              <div class="how-working__text">Если Вас все устраивает заключаем договор и производим все необходимые работы</div>
                            </div>
                          </div>
                        `
                    ),
            });

            editor.ui.registry.addButton("warranty", {
                text: "Гарантия",
                onAction: () =>
                    editor.insertContent(
                        `
                          <img class="sib article__img m-auto" loading="lazy" width="800" height="500" src="/img/interface/warranty-card.webp" title="Гарантийный сертификат компании «Артель и С» " alt="Гарантийный сертификат компании «Артель и С» фото">
                        `
                    ),
            });

            editor.ui.registry.addButton("customH2", {
                text: "H2",
                tooltip: "Заголовок второго уровня",
                onAction: () => {
                    editor.windowManager.open({
                        title: "Заголовок H2",
                        body: {
                            type: "panel",
                            items: [
                                {
                                    type: "input",
                                    name: "title",
                                    label: "Заголовок",
                                    placeholder: "Заголовок",
                                },
                                {
                                    type: "input",
                                    name: "anchor",
                                    label: "Якорь",
                                    placeholder: "Ссылка на заголовок",
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
                            const { title, anchor } = api.getData();

                            editor.insertContent(
                                `<h2 id="${anchor}">${title}</h2>`
                            );

                            api.close();
                        },
                    });
                },
            });

            editor.ui.registry.addButton("customH3", {
                text: "H3",
                tooltip: "Заголовок третьего уровня",
                onAction: () => {
                    editor.windowManager.open({
                        title: "Заголовок H3",
                        body: {
                            type: "panel",
                            items: [
                                {
                                    type: "input",
                                    name: "title",
                                    label: "Заголовок",
                                    placeholder: "Заголовок",
                                },
                                {
                                    type: "input",
                                    name: "anchor",
                                    label: "Якорь",
                                    placeholder: "Ссылка на заголовок",
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
                            const { title, anchor } = api.getData();

                            editor.insertContent(
                                `<h3 id="${anchor}">${title}</h3>`
                            );

                            api.close();
                        },
                    });
                },
            });

            editor.ui.registry.addButton("content", {
                text: "Содержание",
                onAction: () => {
                    const getPageTwoConfig = (quantity) => ({
                        title: "Содержание",
                        body: {
                            type: "panel",
                            items: [
                                {
                                    type: "htmlpanel",
                                    html: '<div style="display: flex; justify-content: space-between"><b>Заголовок</b><b>Якорь</b></div>',
                                },
                                ...Array.from({ length: quantity }, (_, i) => ({
                                    type: "bar",
                                    items: Array.from(
                                        { length: 2 },
                                        (_, j) => ({
                                            type: "input",
                                            name: `row${i + 1}col${j + 1}`,
                                            label: `${i + 1}:${j + 1}`,
                                        })
                                    ),
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
                                const title = data[`row${i + 1}col1`].trim();
                                const anchor = data[`row${i + 1}col2`].trim();

                                if (title && anchor) {
                                    content += `
                                        <li><a class='link' href='#${anchor}'>${title}</a></li>
                                    `;
                                }
                            }

                            const html = `
                              <h3>Содержание</h3>
                              <ol>
                                ${content}
                              </ol>
                            `;

                            editor.insertContent(html);

                            api.close();
                        },
                    });

                    const pageOneConfig = {
                        title: "Введите кол-во элементов списка",
                        body: {
                            type: "panel",
                            items: [
                                {
                                    type: "input",
                                    name: "quantity",
                                    label: "Кол-во",
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
                            let { quantity } = api.getData();
                            quantity = parseInt(quantity);

                            if (isNaN(quantity)) {
                                quantity = 0;
                            }

                            api.redial(getPageTwoConfig(quantity));
                        },
                    };

                    editor.windowManager.open(pageOneConfig);
                },
            });

            editor.ui.registry.addButton("content2", {
                text: "Содержание2",
                tooltip: "Содержание второго уровня",
                onAction: () => {
                    const getPageTwoConfig = (quantity) => ({
                        title: "Содержание второго уровня",
                        body: {
                            type: "panel",
                            items: [
                                {
                                    type: "htmlpanel",
                                    html: '<div style="display: flex; justify-content: space-between"><b>Заголовок</b><b>Якорь</b></div>',
                                },
                                ...Array.from({ length: quantity }, (_, i) => ({
                                    type: "bar",
                                    items: Array.from(
                                        { length: 2 },
                                        (_, j) => ({
                                            type: "input",
                                            name: `row${i + 1}col${j + 1}`,
                                            label: `${i + 1}:${j + 1}`,
                                        })
                                    ),
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
                                const title = data[`row${i + 1}col1`].trim();
                                const anchor = data[`row${i + 1}col2`].trim();

                                if (title && anchor) {
                                    content += `
                                      <li><a class='link' href='#${anchor}'>${title}</a></li>
                                  `;
                                }
                            }

                            const html = `
                            <ul>
                              ${content}
                            </ul>
                          `;

                            editor.insertContent(html);

                            api.close();
                        },
                    });

                    const pageOneConfig = {
                        title: "Введите кол-во элементов списка",
                        body: {
                            type: "panel",
                            items: [
                                {
                                    type: "input",
                                    name: "quantity",
                                    label: "Кол-во",
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
                            let { quantity } = api.getData();
                            quantity = parseInt(quantity);

                            if (isNaN(quantity)) {
                                quantity = 0;
                            }

                            api.redial(getPageTwoConfig(quantity));
                        },
                    };

                    editor.windowManager.open(pageOneConfig);
                },
            });

            editor.ui.registry.addButton("customLink", {
                text: "Ссылка",
                onAction: () => {
                    editor.windowManager.open({
                        title: "Ссылка",
                        body: {
                            type: "panel",
                            items: [
                                {
                                    type: "input",
                                    name: "url",
                                    label: "URL",
                                    placeholder: "path/to/",
                                },
                                {
                                    type: "input",
                                    name: "text",
                                    label: "Текст",
                                    placeholder: "Текст ссылки",
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
                            let { url, text } = api.getData();

                            url = url.trim();
                            text = text.trim();

                            if (url && text) {
                                editor.insertContent(
                                    `
                                      <a class='link' href="${url}">${text}</a>
                                    `
                                );
                            }

                            api.close();
                        },
                    });
                },
            });

            editor.ui.registry.addButton("service-portal", {
                text: "Ссылка на услуги",
                onAction: () => {
                    editor.windowManager.open({
                        title: "Ссылка на услуги",
                        body: {
                            type: "panel",
                            items: [
                                {
                                    type: "input",
                                    name: "url",
                                    label: "URL",
                                    placeholder: "path/to/",
                                },
                                {
                                    type: "input",
                                    name: "text",
                                    label: "Текст",
                                    placeholder: "Текст",
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
                            let { url, text } = api.getData();

                            url = url.trim();

                            if (url.includes(origin)) {
                                url = url.replace(origin, "");
                            } else if (url[0] !== "/") {
                                url = `/${url}`;
                            }

                            text = text.trim();

                            if (url && text) {
                                editor.insertContent(
                                    `
                                        <div class="service-banner">
                                            <div class="service-banner__title">${text}</div>
                                            <a class="service-banner__link" href="${url}">Узнать стоимость</a>
                                        </div>
                                    `
                                );
                            }

                            api.close();
                        },
                    });
                },
            });

            editor.ui.registry.addButton("video-container", {
                text: "Видео контейнер",
                onAction: () => {
                    const videoConfig = getVideoConfig(editor);
                    editor.windowManager.open(videoConfig);
                },
            });
        },
    });
};
