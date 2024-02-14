<div class="--outline grid-square card media-card" data-category="<?= $mediacontent->filter()->slug() ?>" data-name="<?= $mediacontent->title()->slug() ?>">
    <div class="card-front">
        <?php if ($mediacontent->fronttext()->isNotEmpty()) : ?>
            <div class="--txt-medium">
                <?= $mediacontent->fronttext()->kt() ?>
            </div>
        <?php endif ?>
        <div class="media-content-category">
            <?php snippet('mediacategory', ['mediacontent' => $mediacontent]); ?>
        </div>
    </div>
    <div class="card-back">
        <?php if ($mediacontent->backtext()->isNotEmpty()) : ?>
            <div class="--txt-small">
                <?= $mediacontent->backtext()->kt() ?>
            </div>
        <?php endif ?>
        <div class="media-content-category-wrapper">
            <?php foreach ($mediacontent->tags()->toStructure() as $tag): ?>
                <?php if ($tag->isNotEmpty()) : ?>
                    <div class="media-content-category">
                        <div class="svg-tag">
                            <?= asset('assets/icons/tag.svg')->read() ?>
                        </div>
                        <p class="media-content-tag --txt-caption"><?= $tag->tag()->inline() ?></p>
                    </div>
                <?php endif ?>
            <?php endforeach ?>
        </div>
    </div>
</div>