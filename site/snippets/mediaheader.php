<div class="--outline media-article" data-category="<?= $mediacontent->filter()->slug() ?>" data-name="<?= $mediacontent->shortname()->slug() ?>">
    <div class="media-title">
        <div class="--txt-medium">
            <?= $mediacontent->fronttext()->kt() ?>
        </div>
    </div>
    <div class="media-content">
        <div class="media-content-header">
            <div class="media-content-category">
                <!-- <img src="assets/media/ui/reading.svg"> -->
                <p class="--txt-caption"><?= $mediacontent->filter()->inline() ?></p>
                <?= asset('assets/icons/tag.svg')->read() ?>
                <p class="--txt-caption"><?= $mediacontent->tag()->inline() ?></p>
            </div>
            <div class="media-content-close">
                <?= asset('assets/icons/close.svg')->read() ?>
            </div>
        </div>