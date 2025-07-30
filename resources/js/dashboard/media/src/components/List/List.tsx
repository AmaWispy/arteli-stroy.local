import { Item } from "../Item/Item";

export function List({
    list,
    changePath,
    selected,
    select,
}: {
    list: Item[];
    changePath: React.Dispatch<React.SetStateAction<string>>;
    selected: string;
    select: React.Dispatch<React.SetStateAction<string>>;
}) {
    const handleDoubleClick = (type: string, path?: string) => {
        if (type === "image") {
            console.log("image");
        }

        if (type === "folder" && path) {
            changePath(path);
        }
    };

    return !list.length ? (
        <div className="p-5">В этой папке пока ничего нет</div>
    ) : (
        <ul className="list-none flex gap-4 flex-wrap p-5 select-none">
            {list.map(({ type, name, size, path }) => {
                return (
                    <li key={name}>
                        <Item
                            type={type}
                            name={name}
                            size={size}
                            path={path}
                            selected={selected === name}
                            onClick={select}
                            onDoubleClick={handleDoubleClick}
                        />
                    </li>
                );
            })}
        </ul>
    );
}
