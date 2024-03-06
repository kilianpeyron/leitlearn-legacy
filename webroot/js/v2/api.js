export const api = async (url, value) => {
    try {
        const response = await fetch(`${url}/${value}`);
        const data = await response.json();
        return data;
    } catch (error) {
        console.error(`Erreur lors de la récupération des détails du paquet pour l'URL ${url} et l'ID ${packetId} :`, error);
        throw error;
    }
};