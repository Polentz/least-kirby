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

<section class="filters-section">
    <div class="grid-layout two-columns">
        <div class="grid-block --outline">
            <div class="grid-text">
                <h2 class="--title-large">médias</h2>
            </div>
        </div>
        <div class="--outline">
            <div class="grid-title">
                <li class="--txt-medium">médias filtrants par</li>
            </div>
            <ul class="grid-list">
                <?php foreach ($filters as $filter): ?>
                    <li id="<?= $filter->slug() ?>" class="filter-btn --title-small" data-filter="<?= $filter->slug() ?>">
                        <?= $filter->kt() ?>
                    </li>
                <?php endforeach ?>
                <li id="all-media" class="filter-btn --title-small" data-filter="all">Tous les médias</li>
            </ul>
        </div>
    </div>
</section>

<section class="cards-section">
    <div class="grid-layout four-columns">
        <?php foreach ($mediacards->children()->listed() as $mediacontent): ?>
            <?php snippet('mediacontent', ['mediacontent' => $mediacontent]); ?>
        <?php endforeach ?>
    </div>
</section>

<section class="content-section">
    <?php foreach ($mediacards->children()->listed() as $mediacontent): ?>
            <?php snippet('mediaheader', ['mediacontent' => $mediacontent]); ?>
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