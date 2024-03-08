<div class="modal" id="import-packet">
    <div class="modal-container">
        <div class="modal-header">
            <h2 class="title">Importer un paquet CSV ou APKG(ANKI)</h2>
            <div class="modal-close">
                <span class="material-symbols-rounded">close</span>
            </div>
        </div>
        <div class="modal-body">
            <?= $this->Form->create(null, ['url' => ['controller' => 'Packets', 'action' => 'importViaFile'], 'enctype' => 'multipart/form-data']) ?>

            <!-- Champs pour le paquet -->
            <div class="input-group">
                <?= $this->Form->text('name', ['placeholder' => 'Nom du paquet', 'required' => true]) ?>
                <?= $this->Form->label('name', 'Nom du paquet') ?>
            </div>
            <div class="input-group">
                <?= $this->Form->text('description', ['placeholder' => 'Description du paquet', 'required' => true]) ?>
                <?= $this->Form->label('description', 'Description du paquet') ?>
            </div>
            <!-- Champs pour le fichier csv -->
            <div class="generate-flashcard input-flex">
                <div class="input-group">
                    <?= $this->Form->file('uploaded_file', ['label' => false, 'class' => 'form-control', 'id' => 'uploaded_file','name' => 'uploaded_file']) ?>
                </div>
            </div>

            <!-- Autres champs et bouton de soumission -->
            <?= $this->Form->hidden('ia', ['value' => 0]); ?>
            <div class="loader-button">
                <?= $this->Form->submit('Importer le paquet') ?>
                <span class="loader"></span>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>