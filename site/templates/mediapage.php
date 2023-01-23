<?= snippet('header') ?>
<?= snippet('sidebar') ?>

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
    <?php snippet('mediacontents'); ?>
</section>

<section class="content-section">
    <?php snippet('content'); ?>
</section>

<?= snippet('footer') ?> 