<div class="video-wrapper">
    <?php if ($videoelement->videotitle()->isNotEmpty()): ?>
        <div class="video-title --title-small">
            <?= $videoelement->videotitle()->kt() ?>
        </div>
    <?php endif ?> 
    <?php if ($video = $videoelement->video()->toFile()) : ?>
        <video>
            <source src="<?= $video->url() ?>" type="<?= $video->mime() ?>">
        </video>
    <?php endif ?>
    <div class="--txt-caption">
        <?= $videoelement->caption()->kt() ?>
    </div>
</div>