<div class="--outline grid-square card media-card" data-category="<?= $mediacontent->filter()->slug() ?>" data-name="<?= $mediacontent->title()->slug() ?>" 
data-tag="<?php foreach ($mediacontent->tags()->toStructure() as $tag): ?><?= $tag->tag()->slug() ?> <?php endforeach ?>">
    <div class="card-front">
        <div class="--txt-medium">
            <?= $mediacontent->fronttext()->kt() ?>
        </div>
        <div class="media-content-category">
            <?php snippet('mediacategory', ['mediacontent' => $mediacontent]); ?>
        </div>
    </div>
    <div class="card-back">
        <div class="--txt-small">
            <?= $mediacontent->backtext()->kt() ?>
        </div>
        <div class="media-content-category-wrapper">
            <?php foreach ($mediacontent->tags()->toStructure() as $tag): ?>
                <div class="media-content-category">
                    <div class="svg-tag">
                        <?= asset('assets/icons/tag.svg')->read() ?>
                    </div>
                    <p class="media-content-tag --txt-caption"><?= $tag->tag()->inline() ?></p>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>