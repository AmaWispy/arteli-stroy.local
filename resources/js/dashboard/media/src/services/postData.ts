type ItemType = "folder" | "image";

interface Item {
    type: ItemType;
    name: string;
    path: string;
}

const sortImages = (items: Item[]) => {
    const FOLDER_KEY = 'folder'

    return items.sort((a, b) => {
        // Сначала всегда сортируем по имени
        const nameComparison = a.name.localeCompare(b.name);

        // Если оба элемента одного типа (оба папки или оба файлы), сортируем по имени
        if (a.type === b.type) {
            return nameComparison;
        }

        // Если один из элементов папка, а другой файл, папки должны быть выше
        if (a.type === FOLDER_KEY && b.type !== FOLDER_KEY) {
            return -1; // Папка идет первой
        } else if (a.type !== FOLDER_KEY && b.type === FOLDER_KEY) {
            return 1; // Файл идет после папки
        }

        // Если типы разные, но они не папки, возвращаем результат сортировки по имени
        return nameComparison;
    });
};


export const openFolder = async (path: string) => {
    try {
        const api = process.env.API ??'api/media';
        const response = await fetch(`${window.location.origin}/${api}/open`, {
            method: "post",
            body: JSON.stringify({ path }),
            headers: { "Content-Type": "application/json" },
        });

       return sortImages(await response.json());
    } catch (err) {
        console.log("Err", err);
    }

    return [] as Item[]
};
