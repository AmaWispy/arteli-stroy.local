import {useEffect, useState, MouseEvent} from "react";

export function Sidebar({
    path,
    selected,
}: {
    path: string;
    selected: string;
}) {
    const [copied, setCopied] = useState(false);
    const [inserted, setInserted] = useState(false);

    useEffect(() => {
        setCopied(false);
        setInserted(false);
    }, [selected]);

    const handleClick = async (e: MouseEvent<HTMLElement>) => {
        e.preventDefault();
        try {
            await navigator.clipboard.writeText(`img${path}${selected}`);
            setCopied(true);
            console.log(copied);
        } catch (err) {
            console.log("err", err);
        }
    };

    const handleInsert = async (e: MouseEvent<HTMLElement>) => {
        e.preventDefault();
        // @ts-ignore
        if (window['mediaInsertFocusField']) {
            // @ts-ignore
            const focusField = window.mediaInsertFocusField;

            if (focusField) {
                try{
                    if (focusField['value']) {
                        // focusField.focus();
                        // focusField.select();
                        focusField.value = `img${path}${selected}`
                    }
                }catch (err) {
                    console.error(err)
                }

                if ("createEvent" in document) {
                    const evt = document.createEvent("HTMLEvents");
                    evt.initEvent("change", false, true);
                    focusField.dispatchEvent(evt);
                }
                else {
                    focusField.fireEvent("onchange");
                }
            }

            // @ts-ignore
            window.mediaInsertFocusField = undefined;
        }
    }

    return (
        <div className="w-1/4 p-5 rounded border-2 border-gray-200 flex gap-4 flex-col justify-start items-center">
            <p className="bg-black/5">
                img{path}
                {selected}
            </p>
            <button
                className="bg-blue-700 text-white hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 disabled:bg-gray-300 disabled:hover:bg-gray-300"
                disabled={inserted}
                onClick={handleInsert}
                title={'Вставить изображение в поле (должно быть в фокусе)'}
            >
                Вставить
            </button>
            <button
                className="bg-blue-700 text-white hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 disabled:bg-gray-300 disabled:hover:bg-gray-300"
                disabled={copied}
                onClick={handleClick}
            >
                Копировать путь
            </button>
        </div>
    );
}
