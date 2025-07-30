export function Toolbar({
    openModal,
    setAction,
}: {
    openModal: React.Dispatch<React.SetStateAction<boolean>>;
    setAction: React.Dispatch<React.SetStateAction<string>>;
}) {
    const handleLoading = () => {
        setAction("loadFile");
        openModal(true);
    };

    // const handleFileSelection = () => {
    //     const target = event.target;
    //     const files = target.files;
    //     if (!files?.length) {
    //         return;
    //     }
    //     const formData = new FormData();
    //     formData.append("path", path);
    //     formData.append(`file`, files[0]);
    //     fetch(`${process.env.API}/load`, {
    //         method: "POST",
    //         body: formData,
    //     })
    //         .then((response) => response.json())
    //         .then(() => updateDirectory(path))
    //         .catch((err) => console.log("ERR", err));
    // };

    const handleCreateFolderBtn = () => {
        setAction("createFolder");
        openModal(true);
    };

    const handleDeleteBtn = () => {
        setAction("delete");
        openModal(true);
    };

    return (
        <div className="p-5 bg-gray-300 flex gap-2">
            <div>
                <button
                    type="button"
                    className="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5  dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                    onClick={handleLoading}
                >
                    Загрузить файл
                </button>
                {/* <input
                    className="hidden"
                    type="file"
                    ref={ref}
                    accept="image/*, video/*, .pdf"
                    onChange={handleFileSelection}
                /> */}
            </div>
            <button
                type="button"
                className="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5  dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                onClick={handleCreateFolderBtn}
            >
                Создать папку
            </button>
            <button
                type="button"
                className="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                onClick={handleDeleteBtn}
            >
                Удалить
            </button>
        </div>
    );
}
