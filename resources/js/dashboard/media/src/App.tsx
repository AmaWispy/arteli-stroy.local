import { useEffect, useState } from "react";
import { Breadcrumbs } from "./components/Breadcrumbs/Breadcrumbs";
import { List } from "./components/List/List";
import { Toolbar } from "./components/Toolbar/Toolbar";
import { openFolder } from "./services/postData";
import { Modal } from "./components/Modal/Modal";
import { Sidebar } from "./components/Sidebar/Sidebar";

function App() {
    const [path, setPath] = useState("/");
    const [list, setList] = useState([]);
    const [isModalOpen, setModalOpen] = useState(false);
    const [selectedFile, setSelectedFile] = useState("");
    const [action, setAction] = useState("");

    const updateDirectory = async (path: string) => {
        const list = await openFolder(path) as any;
        setList(list);

        if (list.length) {
            setSelectedFile(list[0].name);
        } else {
            setSelectedFile("");
        }
    };

    const watchPathHandler = () => {
        // @ts-ignore
        if (window['mediaInsertFocusPath'] && (window.mediaInsertFocusPath !== '' || window.mediaInsertFocusPath !== null || window.mediaInsertFocusPath !== undefined)) {
            // @ts-ignore
            setPath(window.mediaInsertFocusPath + "");
            // @ts-ignore
            window.mediaInsertFocusPath = undefined;
        }
    }

    useEffect(() => {
        watchPathHandler();
        const intervalId = setInterval(watchPathHandler, 500);

        updateDirectory(path);

        return () => clearInterval(intervalId);
    }, [path]);

    console.log(selectedFile);

    return (
        <>
            <h2 className="text-3xl mb-4">Media</h2>
            <div className="rounded border-2 border-gray-200">
                <Toolbar openModal={setModalOpen} setAction={setAction} />
                <Breadcrumbs path={path} changePath={setPath} />
                <div className="flex justify-between">
                    <List
                        list={list}
                        changePath={setPath}
                        selected={selectedFile}
                        select={setSelectedFile}
                    />
                    <Sidebar path={path} selected={selectedFile} />
                </div>
            </div>
            <Modal
                open={isModalOpen}
                setOpen={setModalOpen}
                path={path}
                updateDirectory={updateDirectory}
                action={action}
                selected={selectedFile}
            />
        </>
    );
}

export default App;
