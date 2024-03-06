<?php foreach ($keywords as $category) : ?>
    <div class="explore-category">
        <div class="icon">
            <span class="material-symbols-rounded"></span>
        </div>
        <span class="name"><?= $category->word ?></span>
    </div>
<?php endforeach; ?>