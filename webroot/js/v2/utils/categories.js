export const fetchCategoryIcon = (query) => {
    const categoryData = {
        'Mathématiques': {
            icon: 'function',
            primaryColor: '#3498DB', // Bleu
            secondaryColor: '#AED6F1' // Bleu clair
        },
        'Langues étrangères': {
            icon: '',
            primaryColor: '#17A589', // Vert émeraude
            secondaryColor: '#82E0AA' // Vert clair
        },
        'Histoire': {
            icon: '',
            primaryColor: '#884EA0', // Violet
            secondaryColor: '#D2B4DE' // Violet clair
        },
        'Géographie': {
            icon: '',
            primaryColor: '#F39C12', // Orange
            secondaryColor: '#FAD02E' // Jaune clair
        },
        'Littérature': {
            icon: '',
            primaryColor: '#E74C3C', // Rouge
            secondaryColor: '#F5B7B1' // Rouge clair
        },
        'Arts visuels': {
            icon: '',
            primaryColor: '#E67E22', // Orange
            secondaryColor: '#FAD02E' // Jaune clair
        },
        'Musique': {
            icon: '',
            primaryColor: '#D35400', // Rouge orangé
            secondaryColor: '#F5B7B1' // Rouge clair
        },
        'Sciences sociales': {
            icon: '',
            primaryColor: '#9B59B6', // Violet
            secondaryColor: '#D2B4DE' // Violet clair
        },
        'Programmation informatique': {
            icon: '',
            primaryColor: '#27AE60', // Vert émeraude
            secondaryColor: '#82E0AA' // Vert clair
        },
        'Psychologie': {
            icon: '',
            primaryColor: '#1F618D', // Bleu foncé
            secondaryColor: '#3498DB' // Bleu clair
        },
        'Philosophie': {
            icon: '',
            primaryColor: '#9B59B6', // Violet
            secondaryColor: '#D2B4DE' // Violet clair
        },
        'Économie': {
            icon: '',
            primaryColor: '#F39C12', // Orange
            secondaryColor: '#FAD02E' // Jaune clair
        },
        'Biologie': {
            icon: '',
            primaryColor: '#27AE60', // Vert émeraude
            secondaryColor: '#82E0AA' // Vert clair
        },
        'Chimie': {
            icon: '',
            primaryColor: '#E67E22', // Orange
            secondaryColor: '#FAD02E' // Jaune clair
        },
        'Cuisine': {
            icon: '',
            primaryColor: '#D35400', // Rouge orangé
            secondaryColor: '#F5B7B1' // Rouge clair
        },
        'Santé et bien-être': {
            icon: '',
            primaryColor: '#27AE60', // Vert émeraude
            secondaryColor: '#82E0AA' // Vert clair
        },
        'Sport': {
            icon: '',
            primaryColor: '#1F618D', // Bleu foncé
            secondaryColor: '#3498DB' // Bleu clair
        },
        'Technologie': {
            icon: '',
            primaryColor: '#34495E', // Gris bleu
            secondaryColor: '#BDC3C7' // Gris clair
        },
        'Cinéma et télévision': {
            icon: '',
            primaryColor: '#E74C3C', // Rouge
            secondaryColor: '#F5B7B1' // Rouge clair
        },
        'Science': {
            icon: 'genetics',
            primaryColor: '#8E44AD', // Pourpre
            secondaryColor: '#D2B4DE' // Violet clair
        },
    };


    return categoryData[query] || null; // Return null for unknown categories
}