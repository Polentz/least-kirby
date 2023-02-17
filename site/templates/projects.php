<?= snippet('header') ?>
<?= snippet('sidebar') ?>
<main class="main">
<?= snippet('topbar') ?>

<?= snippet('title-text', ['part' => $page ]); ?>

<?= snippet('projects') ?>

<?php foreach ($page->children()->listed() as $part) : ?>
    <?php snippet($part->intendedTemplate(), compact('part')) ?>
<?php endforeach ?>

<?= snippet('footer') ?>


