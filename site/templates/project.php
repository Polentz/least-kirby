<?= snippet('header') ?>
<?= snippet('sidebar') ?>

<main class="main">

<?= snippet('topbar') ?>

<?php foreach ($page->children()->listed() as $part) : ?>
    <?php snippet($part->intendedTemplate(), compact('part')) ?>
<?php endforeach ?>

<?php if ($mediapage->template('mediacontent')->filterBy('relatedProject', '*=', $page->title())->isNotEmpty()) : ?>
    <section class="cards-section">
        <div class="grid-layout four-columns">
            <?php foreach ($mediapage->template('mediacontent')->filterBy('relatedProject', '*=', $page->title()) as $mediacontent) : ?>
                <?php snippet('mediacontent', ['mediacontent' => $mediacontent]) ?>
            <?php endforeach ?> 
        </div>
    </section>

    <section class="content-section">
        <?php foreach ($mediapage->template('mediacontent')->filterBy('relatedProject', '*=', $page->title()) as $mediacontent): ?>
            <?php snippet('mediaarticle', ['mediacontent' => $mediacontent]) ?>
        <?php endforeach ?>
    </section>
<?php endif ?>

<?php foreach ($site->index()->filterBy('template', 'mediapage') as $mediapage) : ?>
    <?php if ($mediapage->blocks()->toBlocks()->filterBy('relatedProject', '*=', $page->title())->isNotEmpty()) : ?>
        <section>
            <div class="grid-layout">
                <div class="grid-block --outline">
                    <div class="grid-text">
                        <h2 class="--title-large"><?= $mediapage->sectiontitle()->kt()->inline() ?></h2>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="grid-layout two-columns">
                <?= $mediapage->blocks()->toBlocks()->filterBy('relatedProject', '*=', $page->title()) ?>
            </div>
        </section>
    <?php endif ?>
<?php endforeach ?>

<?= snippet('footer') ?>