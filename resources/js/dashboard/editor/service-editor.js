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

export const initServiceEditor = async () => {
    const tinymceInstance = await tinymce.init({
        selector: "#service-content",
        license_key: "gpl",
        menubar: false,
        content_css: "/css/editor/style.min.css",
        // plugins: "code preview fullscreen lists anchor link powerpaste artel_image_uploader",
        plugins:
            "code preview fullscreen lists anchor link powerpaste artel_image_uploader",
        toolbar:
            "undo redo image link anchor numlist bullist customLink insertSeeAlso customH2 customH3 | phonelink service-portal customList preview fullscreen code",
        verify_html: false,
        relative_urls: false,
        paste_remove_styles_if_webkit: true,
        paste_as_text: true,
        valid_children: "+button[p]",
        setup: (editor) => {
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

            //Добавить ссылку на номер телефона
            editor.ui.registry.addButton("phonelink", {
                text: "Ссылка на телефон",
                tooltip: "Вставить ссылку на телефон",
                onAction: () =>
                    editor.insertContent(
                        '<a class="link" rel="nofollow" href="tel:+74952589397">+7 (495) 258-93-97</a>'
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

            editor.ui.registry.addButton("customList", {
                text: "Список",
                tooltip: "Кастомный список",
                onAction: () => {
                    const getPageTwoConfig = (quantity) => ({
                        title: "Список",
                        body: {
                            type: "tabpanel",
                            tabs: Array.from(
                                { length: quantity },
                                (_, index) => ({
                                    title: `Элемент ${index + 1}`,
                                    name: `item${index + 1}`,
                                    items: [
                                        {
                                            type: "input",
                                            name: `title${index + 1}`,
                                            label: `Заголовок${index + 1}`,
                                        }
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
    
                            let content = "";
                            for (let i = 0; i < quantity; i++) {
                                const title = data[`title${i + 1}`].trim();
            
                                if (title) {
                                    content += `
                                        <li class="service-list__item">
                                            <div class="service-list__icon">
                                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.71 20.12L8 16.42L9.41 15L11.71 17.3L20 9L21.41 10.42L11.71 20.12Z" fill="#586282"/>
                                                    <rect x="1" y="1" width="28" height="28" stroke="#586282" stroke-width="2"/>
                                                </svg>
                                            </div>
                                            <div class="service-list__title">${title}</div>
                                        </li>`;
                                }
                            }
            
                            const html = `
                              <ul class="service-list">
                                ${content}
                              </ul>
                            `;
            
                            editor.insertContent(html);
            
                            api.close();
                        },
                    });
            
                    const pageOneConfig = {
                        title: "Введите кол-во",
                        body: {
                            type: "panel",
                            items: [
                                {
                                    type: "htmlpanel",
                                    html: "<p>Макс. кол-во - 12 элементов</p>",
                                },
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
            
                            if (quantity > 12) {
                                quantity = 12;
                            }
            
                            api.redial(getPageTwoConfig(quantity));
                        },
                    };
            
                    editor.windowManager.open(pageOneConfig);
                },
            });
        },
    });
};
