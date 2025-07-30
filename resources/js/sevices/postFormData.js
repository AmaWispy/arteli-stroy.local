export async function postFormData(url, data) {
    try {
        const response = await fetch(url, {
            method: "POST",
            body: data,
        });

        if (!response.ok) {
            throw new Error("Ошибка!");
        }

        return await response.json();
    } catch (err) {
        throw err;
    }
}
