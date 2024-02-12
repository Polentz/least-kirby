<div class="--outline media-article" data-category="<?= $mediacontent->filter()->slug() ?>" data-name="<?= $mediacontent->title()->slug() ?>" data-tag="<?php foreach ($mediacontent->tags()->toStructure() as $tag): ?><?= $tag->tag()->slug() ?> <?php endforeach ?>">
    <div class="media-title">
        <div class="--txt-medium">
            <?= $mediacontent->fronttext()->kt() ?>
        </div>
    </div>
    <div class="media-content">
        <div class="media-content-header">
            <div class="media-content-category">
                <?php snippet('mediacategory', ['mediacontent' => $mediacontent]); ?>
                <?php foreach ($mediacontent->tags()->toStructure() as $tag): ?>
                    <div class="svg-tag">
                        <?= asset('assets/icons/tag.svg')->read() ?>
                    </div>
                    <p class="media-content-tag --txt-caption"><?= $tag->tag()->inline() ?></p>
                <?php endforeach ?>
            </div>
            <div class="media-content-close">
                <a href="<?= $mediacontent->parent()->url() ?>"><?= asset('assets/icons/close.svg')->read() ?></a>
            </div>
        </div>
        <div class="media-content-wrapper">
            <?php foreach ($mediacontent->children()->listed() as $part) : ?>
                <?php snippet($part->intendedTemplate(), compact('part')) ?>
            <?php endforeach ?>
        </div>
    </div>
</div>