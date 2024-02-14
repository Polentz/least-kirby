<?= snippet('header') ?>
<?= snippet('sidebar') ?>

<main class="main">
<?= snippet('topbar') ?>

<section class="filters-section">
    <div class="grid-layout two-columns">
        <div class="grid-block --outline">
            <div class="grid-text">
                <h2 class="--title-large"><?= $page->title()->kt()->inline() ?></h2>
            </div>
        </div>
        <div class="--outline">
            <div class="grid-title">
                <li class="--txt-medium"><?= $page->filterintro()->kt() ?></li>
            </div>
            <ul class="grid-list">
                <?php foreach ($page->filters()->toStructure() as $filter): ?>
                    <li id="<?= $filter->filter()->slug() ?>" class="filter-btn --title-small" data-target-section="<?= $filter->filter()->slug() ?>" data-filter="<?= $filter->filter()->slug() ?>">
                        <?= $filter->filter()->kt() ?>
                    </li>
                <?php endforeach ?>
                <li id="to-press" class="to-press-btn --title-small"><a class="js-scroll" data-target-section="<?= $page->sectiontitle()->slug() ?>"><?= $page->sectiontitle() ?></a></li>
                <li id="all-media" class="all-media-btn --title-small" data-filter="all"><?= $resetFilters ?></li>
            </ul>
        </div>
    </div>
</section>

<section class="cards-section">
    <div class="grid-layout four-columns">
        <?php foreach ($mediapage->template(['mediacontent', 'mediaimagecard']) as $mediacontent): ?>
            <?php snippet($mediacontent->intendedTemplate(), compact('mediacontent')) ?>
        <?php endforeach ?>
    </div>
</section>

<section class="content-section">
    <?php foreach ($mediapage as $mediacontent): ?>
        <?php snippet('mediaarticle', ['mediacontent' => $mediacontent]) ?>
    <?php endforeach ?>
</section>

<section id="<?= $page->sectiontitle()->slug() ?>">
    <div class="grid-layout two-columns">
        <div class="grid-block --outline">
            <div class="grid-text">
                <h2 class="--title-large"><?= $page->sectiontitle()->kt()->inline() ?></h2>
            </div>
        </div>
        <div class="grid-block --outline">
            <?php if ($page->text()->isNotEmpty()): ?>
                <div class="grid-text">
                    <?= $page->text()->kt() ?>
                </div>
            <?php endif ?>
        </div>
    </div>
</section>

<section>
    <div class="grid-layout two-columns">
        <?= $page->blocks()->toBlocks() ?>
    </div>
</section>

<?= snippet('newsletter') ?>
<?= snippet('footer') ?> 

