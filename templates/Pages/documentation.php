<main class="dashboard-container">
    <div class="open-sidebar">
        <span class="material-symbols-rounded">
            menu_open
        </span>
    </div>
    <div class="container dashboard">
        <section class="docs">
            <section class="doc">
                <h1 class="title">Leitlearn</h1>
                <p class="content">Bienvenue sur Leitlean!</p>
                <ul>
                    <li>
                        <?= $this->Html->link('Pourquoi Leitlearn', ['action' => 'index', '#' => 'why-leitlearn']) ?>
                    </li>
                    <li>
                        <?= $this->Html->link('Fonctionnalités', ['action' => 'index', '#' => 'features']) ?>
                    </li>
                    <li>
                        <?= $this->Html->link('Communauté', ['action' => 'index', '#' => 'community']) ?>
                    </li>
                    <li>
                        <?= $this->Html->link('FAQ', ['action' => 'index', '#' => 'faq']) ?>
                    </li>
                    <li>
                        <?= $this->Html->link('Notes de mise à jour', ['action' => 'index', '#' => 'patch_notes']) ?>
                    </li>
                </ul>
            </section>

            <section class="doc" id="why-leitlearn">
                <h2>Pourquoi Leitlean</h2>
                <p class="content">
                    Leitlearn est bien plus qu'une simple plateforme d'apprentissage en ligne. Voici quelques raisons pour lesquelles vous devriez envisager d'utiliser Leitlearn :
                </p>
                <ol>
                    <li>
                        <strong>Méthode de Leitner :</strong>
                        En utilisant la méthode de Leitner, Leitlearn a développé une méthode d'apprentissage unique qui vous permet d'apprendre à votre propre rythme et de manière plus efficace.
                    </li>
                    <li>
                        <strong>Communauté engagée :</strong>
                        Rejoignez une communauté d'apprenants passionnés et profitez du partage de paquets entre membres afin de rendre votre apprentissage plus facile.
                    </li>
                    <li>
                        <strong>Flexibilité :</strong>
                        Accédez à votre contenu d'apprentissage depuis n'importe quel appareil, à tout moment et n'importe où.
                    </li>
                    <li>
                        <strong>Intelligence artificielle</strong>
                        Grâce à Leitlearn AI, développé par Leitlearn, vous pouvez générer et créer vos paquets automatiquement en fonction de vos révisions.
                    </li>
                </ol>
            </section>

            <section class="doc" id="features">
                <h2>Fonctionnalités</h2>
                <p class="content">
                    Leitlearn propose de nombreuses fonctionnalités à la fois innovante mais aussi ludique qui vous permettront d'apprendre de la meilleure des façons et de voir votre avancement global.
                </p>
                <ol>
                    <li>
                        <strong>Créer un paquet avec un fichier .leitl :</strong>
                        Un fichier .leitl qu'est-ce que c'est .leilt est notre extension de fichier permettant de stocker localement vos paquets crées sur le site, vous pourrez aussi créer des paquets sur la base de vos anciens .leitl.
                        <div class="code">
                            <div class="QA">
                                <div class="question"> Votre question ?<strong>;</strong></div>
                                <div class="answer"> La réponse à votre question.</div>
                            </div>
                            <div class="QA">
                                <div class="question"> Qu'est ce que LeitLearn ?<strong>;</strong></div>
                                <div class="answer"> Leitlearn est une plateform d'apprentissage.</div>
                            </div>
                            <div class="QA">
                                <div class="question"> Combien font 2+2 ?<strong>;</strong></div>
                                <div class="answer"> 4.</div>
                            </div>
                            <div class="QA">
                                <div class="question"> Quel OS utilise apple pour ses téléphones?<strong>;</strong></div>
                                <div class="answer"> iOs.</div>
                            </div>
                        </div>
                        <small>Pour délimiter chaque question/réponse, il est nécessaire d'utiliser le séparateur « ; » afin que notre système puisse créer correctement votre paquet.</small>
                    </li>
                    <li>
                        <strong>Importer un paquet avec un fichier .leitl :</strong>
                        Entrez un nom à votre paquet ainsi que des mots-clés (par exemple: histoire, Révolution française.....), cliquez sur la zone « Parcourir les fichiers » pour sélectionner vos paquets déjà crées puis valider la création des paquets <strong>(Actuellement il est seulement possible d'importer un seul fichier .leitl)</strong>
                        <div class="doc-image-preview">
                            <?= $this->Html->image('https://static.leitlearn.com/img/docs/docs_upload_paquet.png', ['alt' => 'Importer un paquet']) ?>
                        </div>
                    </li>
                    <li>
                        <strong>Créer des paquets à l'aide de l'IA:</strong>
                        Leitlearn vous propose de tester sa toute nouvelle fonctionnalité, la création de paquets via l'IA, en effet l'intelligence artificielle vous aideras à créer les paquets les plus adéquats quant au sujet demandé.
                    </li>
                    <li>
                        <strong>Importation grâce au marché :</strong>
                        La page « marché » est là pour vous faciliter la vie, vous cherchez un sujet d'apprentissage vous intéressant mais vous ne savez pas quelle question vous poser . Passer par le marché afin de trouver des paquets enrichissants et réussis adorés par les autres utilisateurs.
                    </li>
                    <li>
                        <strong>Fonction de recherche :</strong>
                        Utilisez la fonction de recherche, vous pourrez chercher des paquets directement grâce à leurs noms mais aussi grâce aux keywords qui leur sont associés.
                    </li>
                </ol>
            </section>

            <section class="doc" id="community">
                <h2>Communauté</h2>
                <p class="content">
                    Bienvenue dans la communauté Leitlearn ! Connectez-vous avec des utilisateurs de la France entière, partagez vos paquets, collaborez sur des paquets d'apprentissage et participez à l'apprentissage en général. Explorez des projets collaboratifs et découvrez une expérience d'apprentissage unique. Chez Leitlearn, la communauté dynamique est au cœur de notre approche éducative. Rejoignez-nous pour une aventure d'apprentissage collective et enrichissante !
                </p>
            </section>

            <section class="doc" id="faq">
                <h2>FAQ</h2>
                <p class="content">
                    Voici la partie foire au question, ou vous pourrez retrouver toutes les questions qui nous sont fréquemments posées.
                </p>
                <ol>
                    <li>
                        <strong>Q :</strong> Est-ce que je dois payer pour avoir toutes les fonctionnalités ?
                    </li>
                    <strong>A :</strong> Non ! Leitlearn est un site totalement gratuit où toutes nos fonctionnalités sont gratuites, même pas besoin de donner 1 centime pour pouvoir apprendre efficacement.
                    <li>
                        <strong>Q :</strong> Pourquoi utiliser la méthode de Leitner ?
                    </li>
                    <strong>A :</strong> La méthode de Leitner c'est montré efficace chez de nombreuses personnes, elle favorise alors l'apprentissage sur le long terme, elle requiert cependant une ponctualité dans son apprentissage.
                    <li>
                        <strong>Q :</strong> Pourquoi utiliser LeitLearn ?
                    </li>
                    <strong>A :</strong> Leitlearn est le seul site internet utilisant la méthode de leitner pour l'apprentissage, vous trouverez de nombreuses applications utilisant des flashcards pour la révision mais aucune n'utilisera la méthode de Leitner, de plus nous proposons une interface à la fois conviviale et facile d'accès.
                </ol>
            </section>

            <section class="doc" id="patch_notes">
                <h2>Notes de mise à jour</h2>
                <?php // foreach ($data['update_notes'] as $update) : 
                ?>
                <div class="update">
                    <span class="version"><?= $update['Version'] ?></span>
                    <h3>Nouveautés</h3>
                    <ul>
                        <?php
                        //$content = explode(";", $update['Content']);
                        //foreach ($content as $line) : 
                        ?>
                        <li><?php //$line 
                            ?></li>
                        <?php //endforeach; 
                        ?>
                    </ul>
                    <h3>Corrections</h3>
                    <ul>
                        <?php
                        //$content = explode(";", $update['Fixes']);
                        //foreach ($content as $line) : 
                        ?>
                        <li><?php //$line 
                            ?></li>
                        <?php // endforeach; 
                        ?>
                    </ul>
                </div>
                <?php //endforeach; 
                ?>
            </section>
        </section>
    </div>
</main>