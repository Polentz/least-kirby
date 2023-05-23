<div class="--outline grid-square card" data-category="<?= $mediacontent->filter()->slug() ?>" data-name="<?= $mediacontent->title()->slug() ?>" 
data-tag="<?php foreach ($mediacontent->tags()->toStructure() as $tag): ?><?= $tag->tag()->slug() ?> <?php endforeach ?>">
    
    <div class="card-front">
        <?php if ($mediacontent->medialink()->isNotEmpty()) : ?>
            <a href="<?= $mediacontent->medialink()->url() ?>" target="_blank" class="card-wrapper">
        <?php elseif ($document = $mediacontent->mediadocument()->toFile()) : ?> 
            <a href="<?= $document->url() ?>" target="_blank" class="card-wrapper">
        <?php endif ?>
                <div class="--txt-medium">
                    <?= $mediacontent->fronttext()->kt() ?>
                </div>
                <div class="media-content-category">
                    <?php snippet('mediacategory', ['mediacontent' => $mediacontent]); ?>
                </div>
            </a>
    </div>

    <div class="card-back">
        <?php if ($mediacontent->medialink()->isNotEmpty()) : ?>
            <a href="<?= $mediacontent->medialink()->url() ?>" target="_blank" class="card-wrapper">
        <?php elseif ($document = $mediacontent->mediadocument()->toFile()) : ?> 
            <a href="<?= $document->url() ?>" target="_blank" class="card-wrapper">
        <?php endif ?>
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
            </a>
    </div>
</div>