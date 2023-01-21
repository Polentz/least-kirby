<?= snippet('header') ?>
<?= snippet('sidebar') ?>

<main class="main" id="a-propos">

<?= snippet('topbar') ?>

<?php foreach ($page->children()->listed() as $part) : ?>
    <section>
        <?php snippet($part->intendedTemplate(), compact('part')) ?>
    </section>
<?php endforeach ?>

<?= snippet('footer') ?>