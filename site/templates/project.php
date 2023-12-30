<?php snippet('header') ?>


<main>
    <article>
        <h1><?= $page->title() ?></h1>
            <div class="project-layout">
                <div class="project-info">
                    <?= $page->text() ?>

                </div>
                <div class="project-galley">
                    <ul>
                        <?php foreach ($page->images()as $image): ?>


                        <li><a href="<?= $image->url()?>"><?= $image?></a></li>
                        <?php endforeach  ?>
                    </ul>

                </div>
            </div>
    </article>
</main>


<?php snippet('footer') ?>