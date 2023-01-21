<?= snippet('header') ?>
<nav class="side-nav">
    <span class="menu-btn"></span>
    <div class="lang-btn --txt-small">
        <a href="en/index.html">english</a>
    </div>
    <?= snippet('menu') ?>
</nav>

<main class="main" id="a-propos">

<?= snippet('topbar') ?>

<?php foreach ($page->children()->listed() as $part) : ?>
    <section>
        <?php snippet($part->intendedTemplate(), compact('part')) ?>
    </section>
<?php endforeach ?>

<?= snippet('footer') ?>