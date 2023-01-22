<div class="video-wrapper">
    <?php if ($videoelement->videotitle()->isNotEmpty()): ?>
        <div class="video-title --title-small">
            <?= $videoelement->videotitle()->kt() ?>
        </div>
    <?php endif ?> 
    <?php if ($file = $videoelement->file()): ?>
        <video controls src="<?= $file->url() ?>"></video>
    <?php endif ?>
    <div class="--txt-caption">
        <?= $videoelement->caption()->kt() ?>
    </div>
</div>