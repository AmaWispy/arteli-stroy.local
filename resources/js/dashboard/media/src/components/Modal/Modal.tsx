import {
    Checkbox,
    Dialog,
    DialogBackdrop,
    DialogPanel,
    DialogTitle,
    Field,
    Input,
    Label,
} from "@headlessui/react";
import clsx from "clsx";
import {ChangeEvent, FormEvent, MouseEvent, useRef, useState} from "react";

type NotValid = "less" | "more" | "nan" | "";

export function Modal({
    open,
    setOpen,
    path,
    updateDirectory,
    action,
    selected,
}: {
    open: boolean;
    setOpen: React.Dispatch<React.SetStateAction<boolean>>;
    path: string;
    updateDirectory: (path: string) => Promise<void>;
    action: string;
    selected: string;
}) {
    const [name, setName] = useState("");
    const [quality, setQuality] = useState("90");
    const [isQualityError, setIsQualityError] = useState<NotValid>();
    const [isImage, setIsImage] = useState(false);
    const [width, setWidth] = useState<string>();
    const [isWidthError, setIsWidthError] = useState<NotValid>();
    const [thumbnail, setThumbnail] = useState(false);
    const [file, setFile] = useState<File | null>(null);

    const ref = useRef<HTMLInputElement>(null);

    const handleCreateBtn = () => {
        const data = {
            path,
            name: name,
        };

        const api = process.env.API ??'api/media';
        fetch(`${window.location.origin}/${api}/create-folder`, {
            method: "POST",
            body: JSON.stringify(data),
            headers: { "Content-Type": "application/json" },
        })
            .then((response) => response.json())
            .then(() => updateDirectory(path))
            .catch((err) => console.log("ERR", err))
            .finally(() => {
                setOpen(false);
                setName("");
            });
    };

    const handleChangeInput = (event: ChangeEvent<HTMLInputElement>) => {
        setName(event.target.value.trim());
    };

    const handleDeleteBtn = (e: MouseEvent<HTMLElement>) => {
        e.preventDefault();

        const data = {
            path,
            name: selected,
        };

        const api = process.env.API ??'api/media';
        fetch(`${window.location.origin}/${api}/delete`, {
            method: "POST",
            body: JSON.stringify(data),
            headers: { "Content-Type": "application/json" },
        })
            .then((response) => response.json())
            .then(() => updateDirectory(path))
            .catch((err) => console.log("ERR", err))
            .finally(() => {
                setOpen(false);
                setName("");
            });
    };

    const handleQualityChange = (event: ChangeEvent<HTMLInputElement>) => {
        setIsQualityError("");
        setQuality(event.target.value.trim());
    };

    const handleFileChange = (event: ChangeEvent<HTMLInputElement>) => {
        const files = event.target.files;
        if (!files?.length) {
            return;
        }

        const loadedFile = files[0];

        setFile(loadedFile);

        const convertables = ["image/jpeg", "image/webp"];
        setIsImage(convertables.some((type) => loadedFile.type === type));
    };

    const handleWidthChange = (event: ChangeEvent<HTMLInputElement>) => {
        setIsWidthError("");
        setWidth(event.target.value.trim());
    };

    const handleLoadFile = () => {
        const input = ref.current;
        input?.click();
    };

    const handleLoadSubmit = (event: FormEvent<HTMLFormElement>) => {
        event.preventDefault();

        const qualityValue = parseInt(quality);
        if (isNaN(qualityValue)) {
            setIsQualityError("nan");
            return;
        }

        if (qualityValue < 50) {
            setIsQualityError("less");
            return;
        }

        if (qualityValue > 100) {
            setIsQualityError("more");
            return;
        }

        if (width) {
            const widthValue = parseInt(width);
            if (isNaN(widthValue)) {
                setIsWidthError("nan");
                return;
            }

            if (widthValue < 300) {
                setIsWidthError("less");
                return;
            }

            if (widthValue > 3840) {
                setIsWidthError("more");
                return;
            }
        }

        const form = event.target as HTMLFormElement;

        if (!form) {
            return;
        }

        const formData = new FormData(form);
        formData.append("path", path);

        const api = process.env.API ??'api/media';
        fetch(`${window.location.origin}/${api}/load`, {
            method: "POST",
            body: formData,
        })
            .then((response) => response.json())
            .then(() => updateDirectory(path))
            .catch((err) => console.log("ERR", err))
            .finally(() => {
                setOpen(false);
                setFile(null);
                setIsImage(false);
                setIsQualityError("");
                setIsWidthError("");
                setQuality("90");
                setThumbnail(false);
                setWidth("");
            });
    };

    let view;
    switch (action) {
        case "createFolder":
            view = (
                <>
                    <div className="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                        <div className="sm:flex sm:items-start">
                            <div className="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                <DialogTitle
                                    as="h3"
                                    className="text-base font-semibold leading-6 text-gray-900"
                                >
                                    Создать новую папку
                                </DialogTitle>
                                <div className="mt-4">
                                    <Field>
                                        <Label className="text-sm/6 font-medium text-black">
                                            Название
                                        </Label>
                                        <Input
                                            className={clsx(
                                                "mt-3 block w-full rounded-lg border-none bg-black/5 py-1.5 px-3 text-sm/6 text-black",
                                                "focus:outline-none data-[focus]:outline-2 data-[focus]:-outline-offset-2 data-[focus]:outline-white/25"
                                            )}
                                            value={name}
                                            onChange={handleChangeInput}
                                        />
                                    </Field>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <button
                            type="button"
                            onClick={handleCreateBtn}
                            className="inline-flex w-full justify-center rounded-md bg-blue-700 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 sm:ml-3 sm:w-auto"
                        >
                            Создать
                        </button>
                        <button
                            type="button"
                            data-autofocus
                            onClick={() => setOpen(false)}
                            className="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto"
                        >
                            Отмена
                        </button>
                    </div>
                </>
            );
            break;
        case "loadFile":
            view = (
                <form method="post" onSubmit={handleLoadSubmit}>
                    <div className="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                        <div className="sm:flex sm:items-start">
                            <div className="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                <DialogTitle
                                    as="h3"
                                    className="text-base font-semibold leading-6 text-gray-900"
                                >
                                    Загрузить файл
                                </DialogTitle>
                                <div className="mt-4">
                                    <Field>
                                        <Label className="text-sm/6 font-medium text-black">
                                            Выбрать файл
                                        </Label>
                                        <div className="flex items-center gap-2">
                                            <Input
                                                className={clsx(
                                                    "mt-3 block w-full rounded-lg border-none bg-black/5 py-1.5 px-3 text-sm/6 text-black",
                                                    "focus:outline-none data-[focus]:outline-2 data-[focus]:-outline-offset-2 data-[focus]:outline-white/25"
                                                )}
                                                value={file ? file.name : ""}
                                                readOnly
                                            />
                                            <button
                                                type="button"
                                                className="p-1"
                                                onClick={handleLoadFile}
                                            >
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="32"
                                                    height="32"
                                                    viewBox="0 0 24 24"
                                                >
                                                    <path
                                                        fill="currentColor"
                                                        d="M18 15.75q0 2.6-1.825 4.425T11.75 22t-4.425-1.825T5.5 15.75V6.5q0-1.875 1.313-3.187T10 2t3.188 1.313T14.5 6.5v8.75q0 1.15-.8 1.95t-1.95.8t-1.95-.8t-.8-1.95V6h2v9.25q0 .325.213.538t.537.212t.538-.213t.212-.537V6.5q-.025-1.05-.737-1.775T10 4t-1.775.725T7.5 6.5v9.25q-.025 1.775 1.225 3.013T11.75 20q1.75 0 2.975-1.237T16 15.75V6h2z"
                                                    />
                                                </svg>
                                            </button>
                                        </div>
                                        <input
                                            className="hidden"
                                            type="file"
                                            name="file"
                                            ref={ref}
                                            accept="image/*, video/*, .pdf"
                                            onChange={handleFileChange}
                                        />
                                    </Field>
                                    {isImage ? (
                                        <>
                                            <Field className="mt-4">
                                                <Label className="text-sm/6 font-medium text-black">
                                                    Качество
                                                </Label>
                                                <Input
                                                    className={clsx(
                                                        "mt-3 block w-full rounded-lg bg-black/5 py-1.5 px-3 text-sm/6 text-black",
                                                        "focus:outline-none data-[focus]:outline-2 data-[focus]:-outline-offset-2 data-[focus]:outline-white/25",
                                                        isQualityError
                                                            ? "border-2 border-rose-400 border-solid"
                                                            : "border-none"
                                                    )}
                                                    type="number"
                                                    value={quality}
                                                    name="quality"
                                                    onChange={
                                                        handleQualityChange
                                                    }
                                                />
                                                {isQualityError &&
                                                    isQualityError ===
                                                        "less" && (
                                                        <p className="text-rose-600">
                                                            Качество должно быть
                                                            больше или равно 50
                                                        </p>
                                                    )}
                                                {isQualityError &&
                                                    isQualityError ===
                                                        "more" && (
                                                        <p className="text-rose-600">
                                                            Качество должно быть
                                                            меньше или равно 100
                                                        </p>
                                                    )}
                                                {isQualityError &&
                                                    isQualityError ===
                                                        "nan" && (
                                                        <p className="text-rose-600">
                                                            Качество должно быть
                                                            числом
                                                        </p>
                                                    )}
                                            </Field>
                                            <Field className="mt-4">
                                                <Label className="text-sm/6 font-medium text-black">
                                                    Ширина
                                                </Label>
                                                <Input
                                                    className={clsx(
                                                        "mt-3 block w-full rounded-lg bg-black/5 py-1.5 px-3 text-sm/6 text-black",
                                                        "focus:outline-none data-[focus]:outline-2 data-[focus]:-outline-offset-2 data-[focus]:outline-white/25",
                                                        isWidthError
                                                            ? "border-2 border-rose-400 border-solid"
                                                            : "border-none"
                                                    )}
                                                    type="number"
                                                    value={width}
                                                    name="width"
                                                    onChange={handleWidthChange}
                                                />
                                                {isWidthError &&
                                                    isWidthError === "less" && (
                                                        <p className="text-rose-600">
                                                            Ширина должна быть
                                                            больше или равна 300
                                                        </p>
                                                    )}
                                                {isWidthError &&
                                                    isWidthError === "more" && (
                                                        <p className="text-rose-600">
                                                            Ширина должна быть
                                                            меньше или равна
                                                            3840
                                                        </p>
                                                    )}
                                                {isWidthError &&
                                                    isWidthError === "nan" && (
                                                        <p className="text-rose-600">
                                                            Ширина должна быть
                                                            числом
                                                        </p>
                                                    )}
                                            </Field>
                                            <Field className="mt-4 flex items-center gap-2">
                                                <Checkbox
                                                    checked={thumbnail}
                                                    onChange={setThumbnail}
                                                    name="thumbnail"
                                                    className="group block size-4 rounded border bg-slate-300 data-[checked]:bg-blue-500"
                                                >
                                                    <svg
                                                        className="stroke-white opacity-0 group-data-[checked]:opacity-100"
                                                        viewBox="0 0 14 14"
                                                        fill="none"
                                                    >
                                                        <path
                                                            d="M3 8L6 11L11 3.5"
                                                            strokeWidth={2}
                                                            strokeLinecap="round"
                                                            strokeLinejoin="round"
                                                        />
                                                    </svg>
                                                </Checkbox>
                                                <Label className="text-sm/6 font-medium text-black">
                                                    Добавить миниатюру
                                                </Label>
                                            </Field>
                                        </>
                                    ) : null}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <button
                            type="submit"
                            className="inline-flex w-full justify-center rounded-md bg-blue-700 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 sm:ml-3 sm:w-auto"
                        >
                            Загрузить
                        </button>
                        <button
                            type="button"
                            data-autofocus
                            onClick={() => setOpen(false)}
                            className="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto"
                        >
                            Отмена
                        </button>
                    </div>
                </form>
            );
            break;
        case "delete":
            view = (
                <>
                    <div className="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                        <div className="sm:flex sm:items-start">
                            <div className="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                <DialogTitle
                                    as="h3"
                                    className="text-base font-semibold leading-6 text-gray-900"
                                >
                                    Вы уверены, что хотите удалить эти файлы?
                                </DialogTitle>
                                <div className="mt-4">
                                    <p className="mt-2 text-sm/6 text-black/50">
                                        Удаление папки приведет к удалению всего
                                        ее содержимого.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <button
                            type="button"
                            onClick={handleDeleteBtn}
                            className="inline-flex w-full justify-center rounded-md bg-red-700 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-800 sm:ml-3 sm:w-auto disabled:bg-red-700/5"
                            disabled={selected === ""}
                        >
                            Удалить
                        </button>
                        <button
                            type="button"
                            data-autofocus
                            onClick={() => setOpen(false)}
                            className="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto"
                        >
                            Отмена
                        </button>
                    </div>
                </>
            );
            break;
        default:
            view = <></>;
    }

    return (
        <Dialog open={open} onClose={setOpen} className="relative z-50">
            <DialogBackdrop
                transition
                className="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity data-[closed]:opacity-0 data-[enter]:duration-300 data-[leave]:duration-200 data-[enter]:ease-out data-[leave]:ease-in"
            />

            <div className="fixed inset-0 z-50 w-screen overflow-y-auto">
                <div className="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                    <DialogPanel
                        transition
                        className="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all data-[closed]:translate-y-4 data-[closed]:opacity-0 data-[enter]:duration-300 data-[leave]:duration-200 data-[enter]:ease-out data-[leave]:ease-in sm:my-8 sm:w-full sm:max-w-lg data-[closed]:sm:translate-y-0 data-[closed]:sm:scale-95"
                    >
                        {view}
                    </DialogPanel>
                </div>
            </div>
        </Dialog>
    );
}
