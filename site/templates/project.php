<?= snippet('header') ?>
<?= snippet('sidebar') ?>

<main class="main" id="a-propos">

<?= snippet('topbar') ?>

<?php foreach ($page->children()->listed() as $part) : ?>
    <?php snippet($part->intendedTemplate(), compact('part')) ?>
<?php endforeach ?>

<section class="cards-section">
    <div class="grid-layout four-columns">
        <?php foreach ($site->page('mediapage')->children()->listed() as $mediacontent): ?>
            <?php snippet('mediacontent', ['mediacontent' => $mediacontent]); ?>
        <?php endforeach ?>
    </div>
</section>

<section class="content-section">
    <?php foreach ($site->page('mediapage')->children()->listed() as $mediacontent): ?>
        <div class="--outline media-article" data-category="<?= $mediacontent->filter()->slug() ?>" data-name="<?= $mediacontent->title()->slug() ?>">
            <div class="media-title">
                <div class="--txt-medium">
                    <?= $mediacontent->fronttext()->kt() ?>
                </div>
            </div>
            <div class="media-content">
                <div class="media-content-header">
                    <div class="media-content-category">
                        <?php snippet('mediacategory', ['mediacontent' => $mediacontent]); ?>
                        <div class="svg-tag">
                            <?= asset('assets/icons/tag.svg')->read() ?>
                        </div>
                        <p class="media-content-tag --txt-caption"><?= $mediacontent->tag()->inline() ?></p>
                    </div>
                    <div class="media-content-close">
                        <?= asset('assets/icons/close.svg')->read() ?>
                    </div>
                </div>
                <div class="media-content-wrapper">
                    <?php foreach ($mediacontent->children()->listed() as $part) : ?>
                        <?php snippet($part->intendedTemplate(), compact('part')) ?>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</section>


<?= snippet('footer') ?>