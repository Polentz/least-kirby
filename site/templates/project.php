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

<?= snippet('footer') ?>