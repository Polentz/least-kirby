<?= snippet('header') ?>
<?= snippet('sidebar') ?>

<main class="main">

<?= snippet('topbar') ?>

<?php foreach ($page->children()->listed() as $part) : ?>
    <?php snippet($part->intendedTemplate(), compact('part')) ?>
<?php endforeach ?>

<?= snippet('footer') ?>