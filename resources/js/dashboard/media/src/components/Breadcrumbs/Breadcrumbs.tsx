export function Breadcrumbs({
    path,
    changePath,
}: {
    path: string;
    changePath: React.Dispatch<React.SetStateAction<string>>;
}) {
    const segments = path.split("/").filter(segment => segment !== "");
    segments.unshift('/');

    const getPathList = (segments: string[]) => {
        const list: string[] = [];

        if (path === "/") {
            list.push(path);
            return list;
        }

        segments.forEach((segment, index) => {
            if (index === 0) {
                list.push(segment);
            } else {
                list.push(`${list[index - 1]}${segment}/`)
            }
        });

        return list;
    };

    return (
        <ul className="list-none flex gap-5 text-sm px-5 py-2 bg-gray-200">
            {getPathList(segments).map((item, index) => {
                let title = segments[index];

                if (item === "/") {
                    title = "Главная";
                }

                return (
                    <li
                        key={item}
                        onClick={() => changePath(item)}
                        className="first:font-medium text-blue-600 hover:text-black only:text-black cursor-pointer relative after:content-['>'] after:absolute after:text-xs after:top-1/2 after:-right-2.5 after:-translate-y-1/2 after:translate-x-1/2 last:after:hidden last:text-black"
                    >
                        {title}
                    </li>
                );
            })}
        </ul>
    );
}
