<?php
// include_once __DIR__ . '../../../templates/modals/update-userdata-modal.php';
?>
<main>
    <div class="open-sidebar">
        <span class="material-symbols-rounded">
            menu_open
        </span>
    </div>
    <div class="container dashboard admin-container">
        <section class="config">
            <h2>Configuration de Leitlearn</h2>
            <form action="/leitlean-maintenance-status" method="post">
                <input type="submit" name="config-maintenance" value="Mettre à jour le status de maintenance">
            </form>
            <form action="/leitlean-version-status" method="post">
                <input type="text" name="config-version" value="" placeholder="Numéro de version :">
                <input type="submit" value="Mettre à jour">
            </form>
        </section>
        <div class="section-flex">
            <section>
                <div class="search">
                    <h2>Recherche d'utilisateurs</h2>
                    <div class="searchUser">
                        <input class="form-control" type="text" name="searchUser" id="searchUser" placeholder="Utilisateur">
                    </div>
                </div>
                <div class="user-list">
                    <div id="user-list-data">
                        <?php foreach ($users as $user) : ?>
                            <div class="user">
                                <form action="admin-update-userdata" method="post">
                                    <div class="user-id"><?= $user->idUser ?></div>
                                    <div class="user-last-name"><?= $user->last_name ?></div>
                                    <div class="user-name"><?= $user->name ?></div>
                                    <div class="user-email"><?= $user->mail ?></div>
                                    <div class="actions">
                                        <button type="button" class="action edit-user-btn" data-user-id="<?= $user->idUser ?>">
                                            <span class="material-symbols-rounded edit">
                                                edit
                                            </span>
                                        </button>
                                        <input type="hidden" value="<?= $user->idUser ?>" name="userId">
                                        <input type="hidden" value="<?= $user->last_name ?>" name="userLastName">
                                        <input type="hidden" value="<?= $user->name ?>" name="userName">
                                        <input type="hidden" value="<?= $user->mail ?>" name="userMail">
                                        <input type="hidden" value="<?= $user->dateBirth ?>" name="userBirth">
                                        <input type="hidden" value="<?= $user->gender ?>" name="userGender">
                                    </div>
                                </form>
                                <form action="delete-user" method="POST">
                                    <input type="hidden" value="<?= $user->idUser ?>" name="userId">
                                    <input type="hidden" value="<?= $user->last_name ?>" name="userLastName">
                                    <input type="hidden" value="<?= $user->name ?>" name="userName">
                                    <input type="hidden" value="<?= $user->mail ?>" name="userMail">
                                    <input type="hidden" value="<?= $user->dateBirth ?>" name="userBirth">
                                    <input type="hidden" value="<?= $user->gender ?>" name="userGender">
                                    <button class="action delete" type="submit" name="delete-submit">
                                        <span class="material-symbols-rounded delete">
                                            delete
                                        </span>
                                    </button>
                                </form>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>

            <section>
                <div class="search">
                    <h2>Recherche de paquets</h2>
                    <div class="searchPaquet">
                        <input class="form-control" type="text" name="searchUser" id="searchPaquet" placeholder="Paquet">
                    </div>
                </div>
                <div class="paquet-list">
                    <div class="paquet-list-data">
                        <?php foreach ($paquets as $paquet) : ?>
                            <div class="paquet" data-paquet-id="<?= $paquet->idPacket ?>">
                                <form action="admin-update-paquet" method="post">
                                    <div class="paquet-id"><?= $paquet->idPacket ?></div>
                                    <div class="paquet-name"><?= $paquet->name ?></div>
                                    <div class="paquet-description"><?= $paquet->description ?></div>
                                    <div class="paquet-creator-id"><?= $paquet->creatorId ?></div>
                                    <div class="paquet-public"><?= $paquet->public ?></div>
                                    <div class="actions">
                                        <button type="button" class="action edit-paquet-btn" data-paquet-id="<?= $paquet->idPacket ?>">
                                            <span class="material-symbols-rounded edit">
                                                edit
                                            </span>
                                        </button>
                                        <input type="hidden" value="<?= $paquet->idPacket ?>" name="paquetId">
                                        <input type="hidden" value="<?= $paquet->name ?>" name="newPaquetName">
                                        <input type="hidden" value="<?= $paquet->description ?>" name="newPaquetDescription">
                                        <input type="hidden" value="<?= $paquet->creatorId ?>" name="newPaquetCreatorId">
                                        <input type="hidden" value="<?= $paquet->public ?>" name="newPaquetPublic">
                                    </div>
                                </form>
                                <form action="delete-paquet" method="POST">
                                    <input type="hidden" value="<?= $paquet->idPacket ?>" name="paquetId">
                                    <input type="hidden" value="<?= $paquet->name ?>" name="paquetName">
                                    <input type="hidden" value="<?= $paquet->description ?>" name="paquetDescription">
                                    <input type="hidden" value="<?= $paquet->creatorId ?>" name="paquetCreatorId">
                                    <input type="hidden" value="<?= $paquet->public ?>" name="paquetPublic">
                                    <button class="action delete" type="submit" name="delete-submit">
                                        <span class="material-symbols-rounded delete">
                                            delete
                                        </span>
                                    </button>
                                </form>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>