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