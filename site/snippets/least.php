<?= snippet('header') ?>
<nav class="side-nav">
    <span class="menu-btn"></span>
    <div class="lang-btn --txt-small">
        <a href="en/index.html">english</a>
    </div>
    <?= snippet('menu') ?>
</nav>

<section class="cover">
    <div class="cover-bg" 
        <?php if ($cover = $leastPage->background()->toFile()): ?>style="background-image: url('<?= $cover->url() ?>');"
        <?php endif ?>>
    </div>
    <div class="logo">
        <h1 class="logo-name --blur"><a class="js-scroll" data-target-section="a-propos">least</a></h1>
        <h2 class="logo-wording">laboratoire écologie et art pour une société en transition</h2>
    </div>
</section>

<main class="main" id="a-propos">

<?= snippet('topbar') ?>

<?php foreach ($leastPage->children()->listed() as $part) : ?>
    <?php snippet($part->intendedTemplate(), compact('part')) ?>
<?php endforeach ?>

<?= snippet('footer') ?>