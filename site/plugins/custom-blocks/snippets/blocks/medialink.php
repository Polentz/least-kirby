<div class="--outline card press-card" data-category="<?= $block->filter()->slug() ?>">
    <div class="card-front">
        <div class="card-wrapper">
                <?php if ($block->fronttext()->isNotEmpty()) : ?>
                    <div class="--txt-small">
                        <?= $block->fronttext()->kt() ?>
                    </div>
                <?php endif ?>
                <?php if ($block->fronttextsubtitle()->isNotEmpty()) : ?>
                    <div class="--txt-caption">
                        <?= $block->fronttextsubtitle()->kt() ?>
                    </div>
                <?php endif ?>
        </div>
    </div>
    <div class="card-back">
        <?php if ($block->medialink()->isNotEmpty()) : ?>
            <a href="<?= $block->medialink()->url() ?>" target="_blank" class="card-wrapper">
        <?php elseif ($document = $block->mediadocument()->toFile()) : ?> 
            <a href="<?= $document->url() ?>" target="_blank" class="card-wrapper">
        <?php endif ?>
                <div class="--txt-small">
                    <p><?= $readMore ?></p>
                </div>
                <div class="media-content-category-wrapper">
                    <?php foreach ($block->tags()->toStructure() as $tag): ?>
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