<div class="--outline grid-square card media-card" data-category="<?= $mediacontent->filter()->slug() ?>" data-name="<?= $mediacontent->title()->slug() ?>" data-tag="<?= $mediacontent->tag()->slug() ?>">
    <div class="card-front" <?php if ($cover = $mediacontent->background()->toFile()): ?>style="background-image: url('<?= $cover->url() ?>');"
        <?php endif ?>>
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
        <div class="media-content-category">
            <div class="svg-tag">
                <?= asset('assets/icons/tag.svg')->read() ?>
            </div>
            <p class="media-content-tag --txt-caption"><?= $mediacontent->tag()->inline() ?></p>
        </div>
    </div>
</div>