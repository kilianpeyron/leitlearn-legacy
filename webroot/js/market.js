/*
    * Leitlearn - market.js - 24.1
    * Gestion des paquets du marché
*/

import { updateModalContent } from './game/paquetsFunctions.js';

$(document).ready(function () {
    $('.paquet-item').click(function () {
        var paquet = $(this);
        var paquetId = paquet.data('paquet-id');

        $.ajax({
            url: '/market/get/' + paquetId,
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                updateModalContent(data);
                $('#detail-modal').addClass('show');
            },
            error: function (error) {
                console.error('Erreur lors de la récupération des détails du paquet :', error);
            }
        });
    });
});
