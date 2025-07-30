import clsx from "clsx";
import {MouseEvent} from "react";

export interface Item {
    type: string;
    name: string;
    size?: string;
    path?: string;
    selected: boolean;
    onDoubleClick: (type: string, path?: string) => void;
    onClick: React.Dispatch<React.SetStateAction<string>>;
}

export function Item({
    type,
    name,
    size,
    path,
    selected,
    onClick,
    onDoubleClick,
}: Item) {
    const formatSize = (size: string) => {
        const kb = 1024;
        const mb = kb ** 2;

        if (+size >= mb) {
            return `${Math.round(+size / mb)} MB`;
        }

        if (+size >= kb) {
            return `${Math.round(+size / kb)} KB`;
        }

        return `${size} B`;
    };

    return (
        <div
            title={name}
            className={clsx(
                selected ? "bg-sky-500" : "bg-sky-100",
                "w-64 h-24 flex items-center gap-2 p-2.5 rounded group hover:bg-sky-500 cursor-pointer"
            )}
            onDoubleClick={(e: MouseEvent<HTMLElement>) => {
                e.preventDefault();
                onDoubleClick(type, path);
            }}
            onClick={(e: MouseEvent<HTMLElement>) => {
                e.preventDefault();
                onClick(name);
            }}
        >
            {type === "folder" ? (
                <>
                    <svg
                        className={clsx(
                            selected ? "fill-white" : "fill-gray-600",
                            "w-16 h-16  group-hover:fill-white"
                        )}
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                    >
                        <path d="M4.616 19q-.691 0-1.153-.462T3 17.384V6.616q0-.691.463-1.153T4.615 5h4.31q.323 0 .628.13q.305.132.522.349L11.596 7h7.789q.69 0 1.153.463T21 8.616v8.769q0 .69-.462 1.153T19.385 19z" />
                    </svg>
                    <div
                        className={clsx(
                            selected ? "text-white" : "text-gray-600",
                            "group-hover:text-white"
                        )}
                    >
                        {name}
                    </div>
                </>
            ) : null}
            {type === "file" ? (
                <>
                    <svg
                        className={clsx(
                            selected ? "fill-white" : "fill-gray-600",
                            "w-16 h-16 group-hover:fill-white"
                        )}
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                    >
                        <path d="M4.616 22q-.691 0-1.153-.462T3 20.385V8h1v12.385q0 .23.192.423t.423.192H14v1zm4-4q-.691 0-1.153-.462T7 16.384V3.616q0-.691.463-1.153T8.616 2H15.5L20 6.5v9.885q0 .69-.462 1.153T18.384 18zM15 7h4l-4-4z" />
                    </svg>
                    <div
                        className={clsx(
                            selected ? "text-white" : "text-gray-600",
                            "group-hover:text-white"
                        )}
                    >
                        <div className="overflow-hidden">{name}</div>
                        <small>{formatSize(size!)}</small>
                    </div>
                </>
            ) : null}
            {type === "image" ? (
                <>
                    <div className="min-w-16 max-w-16 h-16 flex items-center">
                        <img className="w-full" src={`/img${path}`} alt="img" />
                    </div>
                    <div
                        className={clsx(
                            selected ? "text-white" : "text-gray-600",
                            "group-hover:text-white"
                        )}
                    >
                        <div className="overflow-hidden">{name}</div>
                        <small>{formatSize(size!)}</small>
                    </div>
                </>
            ) : null}
        </div>
    );
}
