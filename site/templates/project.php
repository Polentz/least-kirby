<?= snippet('header') ?>
<?= snippet('sidebar') ?>

<main class="main" data-name="<?= $page->title()->slug() ?>">

<?= snippet('topbar') ?>

<?php foreach ($page->children()->listed() as $part) : ?>
    <?php snippet($part->intendedTemplate(), compact('part')) ?>
<?php endforeach ?>

<?php snippet('mediapage', [
    'mediapage' => collection('mediapage')->template('mediacontent')
]); ?>

<?php foreach ($site->index()->filterBy('template', 'mediapage') as $mediapage) : ?>
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
            <?= $mediapage->blocks()->toBlocks() ?>
        </div>
    </section>
<?php endforeach ?>

<?= snippet('footer') ?>