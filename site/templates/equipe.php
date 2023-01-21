<?= snippet('header') ?>
<nav class="side-nav">
    <span class="menu-btn"></span>
    <div class="lang-btn --txt-small">
        <a href="en/index.html">english</a>
    </div>
    <?= snippet('menu') ?>
</nav>

<main class="main">

<?= snippet('topbar') ?>

<?php foreach ($page->children()->listed() as $part) : ?>
    <?php snippet($part->intendedTemplate(), compact('part')) ?>
<?php endforeach ?>

<?= snippet('footer') ?>