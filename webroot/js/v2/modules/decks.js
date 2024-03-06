import {api} from "../api.js";
import {updateExploreResults} from "./explore.js";

export const initDecks = () => {
    fetchDecksFromExplore();
};

const fetchDecksFromExplore = () => {
    $('.explore_input').on('input', async function () {
        var query = $(this).val();
        try {
            const data = await api('/api/explore/get/', query);
            updateExploreResults(data);
        } catch (error) {
            console.error('Une erreur est survenue lors de la récupération des paquets :', error);
        }
    });
}