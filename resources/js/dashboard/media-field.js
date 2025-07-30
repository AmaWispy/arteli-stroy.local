export const initMediaField = () => {
    const body = document.body;
    const mediaPopup = document.querySelector("#media-popup");
    const mediaPopupClose = document.querySelector("#media-modal-close");

    if (!mediaPopup || !mediaPopupClose) return;

    let mediaFields = document.querySelectorAll(".media-field");

    const pickInitClass = "pick-init";
    const fieldInitClass = "img-init";
    const pickPopupHidden = "hidden";
    const bodyClassHidden = "overflow-y-hidden";
    const focusFieldKey = "mediaInsertFocusField";
    const focusPathKey = "mediaInsertFocusPath";
    const tinymcePathKey = "mediaInsertTinymcePath";

    const removeFileNameFromUrl = (url) => {
        const regex = /\/[^/]+\.[^/]+$/;

        return url.replace(regex, "");
    };

    const openPopup = () => {
        mediaPopup.classList.remove(pickPopupHidden);
        body.classList.add(bodyClassHidden);
    };

    const closePopup = () => {
        mediaPopup.classList.add(pickPopupHidden);
        body.classList.remove(bodyClassHidden);

        window[focusPathKey] = undefined;
    };

    mediaPopupClose.addEventListener("click", (e) => {
        e.preventDefault();
        closePopup();
    });

    const onLickPic = (e, { pick, field, original, img, mediaField }) => {
        e.preventDefault();

        window[focusFieldKey] = field;
        window[focusPathKey] = field.value
            ? removeFileNameFromUrl((field.value + "").replace("img", "")) + "/"
            : "/";

        openPopup();
    };

    const onFieldChange = (e, { pick, field, original, img, mediaField }) => {
        const url = `${window.location.origin}/${field.value}`;

        console.log(url);

        img.src = url;

        if (original) {
            original.href = url;
        }

        window[tinymcePathKey] = field.value;

        closePopup();
    };

    const initMediaField = (mediaField) => {
        let pick = mediaField.querySelector(".btn-pick");
        let original = mediaField.querySelector(".btn-original");
        let field = mediaField.querySelector("input");
        let img = mediaField.querySelector("img");

        if (!field) return;

        if (pick && !pick.classList.contains(pickInitClass)) {
            pick.addEventListener("click", (e) =>
                onLickPic(e, { pick, field, original, img, mediaField })
            );
            pick.classList.add(pickInitClass);
        }

        if (!field.classList.contains(fieldInitClass)) {
            field.addEventListener("change", (e) =>
                onFieldChange(e, { pick, field, original, img, mediaField })
            );
            field.classList.add(fieldInitClass);
        }
    };

    const initMediaFields = (mediaField) => {
        setInterval(() => {
            mediaFields = document.querySelectorAll(".media-field");

            if (mediaFields && mediaFields.length > 0) {
                mediaFields.forEach((mediaField) => {
                    initMediaField(mediaField);
                });
            }
        }, 500);
    };

    window.initMediaFields = initMediaFields;
    initMediaFields();
};
