<?= snippet('header') ?>
<?= snippet('sidebar') ?>

<section class="cover">
    <div class="cover-bg" 
        <?php foreach ($page->files()->shuffle() as $cover): ?>style="background-image: url('<?= $cover->url() ?>');"
        <?php endforeach ?>>
    </div>
    <div class="logo">
        <h1 class="logo-name --blur"><a class="js-scroll" data-target-section="about">least</a></h1>
        <h2 class="logo-wording">laboratoire écologie et art pour une société en transition</h2>
    </div>
</section>

<main class="main" id="about">

<?= snippet('topbar') ?>

<?php foreach ($page->children()->listed() as $part) : ?>
    <?php snippet($part->intendedTemplate(), compact('part')) ?>
<?php endforeach ?>

<?php snippet('projects', [
    'projects' => collection('projects')
]) ?>

<?= snippet('newsletter') ?>
<section>
    <div class="grid-layout two-columns">
        <div class="grid-block --outline">
            <div class="grid-text">
                <h2 class="--title-large">contact</h2>
            </div>
        </div>
        <div class="contact-block --outline">
            <p class="site-title">least</p>
            <?= $site->address()->kt() ?>
            <a href="mailto:<?= $site->email() ?>"><?= $site->email() ?></a>
        </div>
    </div>
</section>
<?= snippet('footer') ?>