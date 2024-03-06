$(document).ready(function() {
    // Gestion des clics sur les boutons d'édition des utilisateurs
    $(document).on("click", ".edit-user-btn", function(event) {
        const userId = $(this).data("user-id");
        const userDiv = $('.user').filter(function() {
            return $(this).find('.user-id').text() == userId;
        });

        const form = userDiv.find('form[action="../modify-flashcard"]');
        const actionsDiv = userDiv.find('.actions');
        const lastName = userDiv.find('.user-last-name').text();
        const name = userDiv.find('.user-name').text();
        const email = userDiv.find('.user-email').text();

        const saveButton = $('<button>', { class: 'action done-user-btn', type:'submit' });
        const saveSpan = $('<span>', { class: 'material-symbols-rounded done-btn save', text: 'done' });
        const cancelButton = $('<button>', { class: 'action cancel-user-btn', type: 'button' });
        const cancelSpan = $('<span>', { class: 'material-symbols-rounded cancel-btn cancel', text: 'cancel' });

        const inputLastName = $('<input>', { type: 'text', class: 'user-last-name-input', value: lastName, name: 'newLastName' });
        const inputName = $('<input>', { type: 'text', class: 'user-name-input', value: name, name: 'newName' });
        const inputEmail = $('<input>', { type: 'text', class: 'user-email-input', value: email, name: 'newEmail' });

        $(this).hide();

        saveButton.append(saveSpan);
        saveButton.appendTo(actionsDiv);
        cancelButton.append(cancelSpan);
        cancelButton.appendTo(actionsDiv);

        userDiv.find('.user-last-name').replaceWith(inputLastName);
        userDiv.find('.user-name').replaceWith(inputName);
        userDiv.find('.user-email').replaceWith(inputEmail);

        cancelButton.click(function() {
            location.reload();
        });
    });

    // Gestion des clics sur les boutons d'édition des paquets
    $(document).on("click", ".edit-paquet-btn", function(event) {
        const paquetId = $(this).data("paquet-id");
        const paquetDiv = $('.paquet[data-paquet-id="' + paquetId + '"]');

        const form = paquetDiv.find('form');
        const actionsDiv = paquetDiv.find('.actions');
        const nameElement = paquetDiv.find('.paquet-name');
        const description = paquetDiv.find('.paquet-description').text();
        const creatorId = paquetDiv.find('.paquet-creator-id').text();
        const isPublic = paquetDiv.find('.paquet-public').text();

        const saveButton = $('<button>', { class: 'action done-paquet-btn', type: 'submit' });
        const saveSpan = $('<span>', { class: 'material-symbols-rounded done-btn save', text: 'done' });
        const cancelButton = $('<button>', { class: 'action cancel-paquet-btn', type: 'button' });
        const cancelSpan = $('<span>', { class: 'material-symbols-rounded cancel-btn cancel', text: 'cancel' });

        const inputName = $('<input>', { type: 'text', class: 'paquet-name-input', value: nameElement.text(), name: 'newName' });
        const inputDescription = $('<input>', { type: 'text', class: 'paquet-description-input', value: description, name: 'newDescription' });
        const inputCreatorId = $('<input>', { type: 'text', class: 'paquet-creator-id-input', value: creatorId, name: 'newCreatorId' });
        const inputPublic = $('<input>', { type: 'text', class: 'paquet-public-input', value: isPublic, name: 'newPublic' });

        $(this).hide();

        saveButton.append(saveSpan);
        saveButton.appendTo(actionsDiv);
        cancelButton.append(cancelSpan);
        cancelButton.appendTo(actionsDiv);

        nameElement.replaceWith(inputName);
        paquetDiv.find('.paquet-description').replaceWith(inputDescription);
        paquetDiv.find('.paquet-creator-id').replaceWith(inputCreatorId);
        paquetDiv.find('.paquet-public').replaceWith(inputPublic);

        cancelButton.click(function() {
            location.reload();
        });
    });

    // Gestion de la recherche d'utilisateurs
    var searchInputUser = $("#searchUser");
    searchInputUser.on('input', function () {
        var keyword = searchInputUser.val();
        
        $.ajax({
            url: '/public/ajax/adminSearch?keyword=' + encodeURIComponent(keyword),
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                createUser(data);
            },
            error: function (error) {
                console.error('Erreur lors de la recherche :', error);
            }
        });
    });

    // Gestion de la recherche de paquets
    var searchInputPaquet = $("#searchPaquet");
    searchInputPaquet.on('input', function () {
        var keyword = searchInputPaquet.val();
        
        $.ajax({
            url: '/public/ajax/adminSearch?keyword=' + encodeURIComponent(keyword),
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                console.log(data);
                createPaquet(data);
            },
            error: function (error) {
                console.error('Erreur lors de la recherche :', error);
            }
        });
    });
});

// Fonction pour créer la liste d'utilisateurs
function createUser(data) {
    var divUserListData = $("#user-list-data");
    divUserListData.empty();

    if (data && data.users && Array.isArray(data.users)) {
        var users = data.users;

        users.forEach(function (user) {
            var divUser = $("<div class='user'></div>");
            var form = $("<form action='admin-update-userdata' method='post'></form>");

            form.append("<div class='user-id'>" + user.idUser + "</div>");
            form.append("<div class='user-last-name'>" + user.last_name + "</div>");
            form.append("<div class='user-name'>" + user.name + "</div>");
            form.append("<div class='user-email'>" + user.mail + "</div>");

            var actionsDiv = $("<div class='actions'></div>");

            var editButton = $("<button type='button' class='action edit-user-btn' data-user-id='" + user.idUser + "'><span class='material-symbols-rounded edit'>edit</span></button>");

            form.append("<input type='hidden' value='" + user.idUser + "' name='userId'>");
            form.append("<input type='hidden' value='" + user.last_name + "' name='userLastName'>");
            form.append("<input type='hidden' value='" + user.name + "' name='userName'>");
            form.append("<input type='hidden' value='" + user.mail + "' name='userMail'>");

            var deleteForm = $("<form action='delete-user' method='POST'></form>");
            deleteForm.append("<input type='hidden' value='" + user.idUser + "' name='userId'>");
            deleteForm.append("<input type='hidden' value='" + user.last_name + "' name='userLastName'>");
            deleteForm.append("<input type='hidden' value='" + user.name + "' name='userName'>");
            deleteForm.append("<input type='hidden' value='" + user.mail + "' name='userMail'>");

            var deleteButton = $("<button class='action' type='submit' name='delete-submit'><span class='material-symbols-rounded delete'>delete</span></button>");

            deleteForm.append(deleteButton);

            actionsDiv.append(editButton);
            actionsDiv.append(deleteForm);

            form.append(actionsDiv);
            divUser.append(form);
            divUserListData.append(divUser);
        });
    } else {
        console.error("Les données ne sont pas au format attendu.");
    }
}

// Fonction pour créer la liste de paquets
function createPaquet(data) {
    var divPaquetListData = $(".paquet-list-data");
    divPaquetListData.empty();

    if (data && data.paquets && Array.isArray(data.paquets)) {
        var paquets = data.paquets;

        paquets.forEach(function (paquet) {
            var divPaquet = $("<div class='paquet' data-paquet-id='" + paquet.idPacket + "'></div>");
            var form = $("<form action='admin-update-paquet' method='post'></form>");

            form.append("<div class='paquet-id'>" + paquet.idPacket + "</div>");
            form.append("<div class='paquet-name'>" + paquet.name + "</div>");
            form.append("<div class='paquet-description'>" + paquet.description + "</div>");
            form.append("<div class='paquet-creator-id'>" + paquet.creatorId + "</div>");
            form.append("<div class='paquet-public'>" + paquet.public + "</div>");

            var actionsDiv = $("<div class'actions'></div>");

            var editButton = $("<button type='button' class='action edit-paquet-btn' data-paquet-id='" + paquet.idPacket + "'><span class='material-symbols-rounded edit'>edit</span></button>");

            form.append("<input type='hidden' value='" + paquet.idPacket + "' name='paquetId'>");
            form.append("<input type='hidden' value='" + paquet.name + "' name='newPaquetName'>");
            form.append("<input type='hidden' value='" + paquet.description + "' name='newPaquetDescription'>");
            form.append("<input type='hidden' value='" + paquet.creatorId + "' name='newPaquetCreatorId'>");
            form.append("<input type='hidden' value='" + paquet.public + "' name='newPaquetPublic'>");

            var deleteForm = $("<form action='delete-paquet' method='POST'></form>");
            deleteForm.append("<input type='hidden' value='" + paquet.idPacket + "' name='paquetId'>");
            deleteForm.append("<input type='hidden' value='" + paquet.name + "' name='paquetName'>");
            deleteForm.append("<input type='hidden' value='" + paquet.description + "' name='paquetDescription'>");
            deleteForm.append("<input type='hidden' value='" + paquet.creatorId + "' name='paquetCreatorId'>");
            deleteForm.append("<input type='hidden' value='" + paquet.public + "' name='paquetPublic'>");

            var deleteButton = $("<button class='action' type='submit' name='delete-submit'><span class='material-symbols-rounded delete'>delete</span></button>");

            deleteForm.append(deleteButton);

            actionsDiv.append(editButton);
            actionsDiv.append(deleteForm);

            form.append(actionsDiv);
            divPaquet.append(form);
            divPaquetListData.append(divPaquet);
        });
    } else {
        console.error("Les données ne sont pas au format attendu.");
    }
}