<?= snippet('header') ?>
<?= snippet('sidebar') ?>

<main class="main" id="a-propos">

<?= snippet('topbar') ?>

<?php foreach ($page->children()->listed() as $part) : ?>
    <?php snippet($part->intendedTemplate(), compact('part')) ?>
<?php endforeach ?>

<?= snippet('footer') ?>