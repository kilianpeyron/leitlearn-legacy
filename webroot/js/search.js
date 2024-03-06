/*
    * Leitlearn - search.js - 24.1
    * Gestion de la recherche
*/

import { updateSearch } from './game/paquetsFunctions.js';

$(document).ready(function () {
    var searchInput = $("#search-input");
    var inputRecherche = $("#search-input");
    var divResultat = $("#tab-paquets");

    searchInput.on('input', function () {
        var query = searchInput.val();

        $.ajax({
            url: '/search/results/' + query,
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                console.log(data);
                updateSearch(data);
            },
            error: function (error) {
                console.error('Erreur lors de la recherche :', error);
            }
        });
    });

    inputRecherche.on('click', function () {
        inputRecherche.addClass('active');
        divResultat.show();
        var query = searchInput.val();

        $.ajax({
            url: '/search/results/' + query,
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                console.log(data);
                updateSearch(data);
            },
            error: function (error) {
                console.error('Erreur lors de la recherche :', error);
            }
        });
    });
});