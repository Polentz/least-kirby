<?= snippet('header') ?>
<?= snippet('sidebar') ?>

<main class="main">
<?= snippet('topbar') ?>

<section class="content-section">
    <?php snippet('mediaarticle', ['mediacontent' => $page]) ?>
</section>

<?= snippet('newsletter') ?>
<?= snippet('footer') ?> 