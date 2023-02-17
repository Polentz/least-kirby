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
                    <li id="<?= $filter->filter()->slug() ?>" class="filter-btn --title-small" data-filter="<?= $filter->filter()->slug() ?>">
                        <?= $filter->filter()->kt() ?>
                    </li>
                <?php endforeach ?>
                <li id="all-media" class="all-media-btn --title-small" data-filter="all">Tous les médias</li>
            </ul>
        </div>
    </div>
</section>

<?= snippet('mediapage') ?>
<?= snippet('newsletter') ?> 
<?= snippet('footer') ?> 

