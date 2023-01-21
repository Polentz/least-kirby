<?= snippet('header') ?>
<nav class="side-nav">
    <span class="menu-btn"></span>
    <div class="lang-btn --txt-small">
        <a href="en/index.html">english</a>
    </div>
    <?= snippet('menu') ?>
</nav>

<section class="cover">
    <div class="cover-bg"></div>
    <div class="logo">
        <h1 class="logo-name --blur"><a class="js-scroll" data-target-section="a-propos">least</a></h1>
        <h2 class="logo-wording">laboratoire écologie et art pour une société en transition</h2>
    </div>
</section>

<main class="main" id="a-propos">

<?= snippet('topbar') ?>

<?php foreach ($page->children()->listed() as $section): ?>

<?php endforeach ?>

<!-- <?php foreach ($page->children()->first()->children()->listed() as $section): ?>
    <section>
        <div class="grid-layout">
            <div class="--outline">
                <?php if ($section->sectiontitle()->isNotEmpty()): ?>
                    <div class="grid-text">
                        <h2 class="--title-large"><?= $section->sectiontitle()->kt()->inline() ?></h2>
                    </div>
                <?php endif ?>
            </div>

            <div class="--outline">
                <?php if ($section->maintext()->isNotEmpty()): ?>
                    <div class="grid-text">
                        <p class="--txt-medium"><?= $section->maintext()->kt()->inline() ?></p>
                        <p class="--txt-small"><?= $section->plaintext()->kt()->inline() ?></p>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </section>
<?php endforeach ?> -->

<section>
    <?= snippet('images') ?>       
</section>

<!-- <section>
    <?= snippet('gallery') ?>
</section> -->

<?= snippet('footer') ?>
