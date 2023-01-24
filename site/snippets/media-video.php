<div class="content-video-component">        
    <div class="video-wrapper">
        <?php if ($part->videotitle()->isNotEmpty()): ?>
            <div class="video-title --title-small">
                <?= $part->videotitle()->kt() ?>
            </div>
        <?php endif ?> 
        <?php if ($file = $part->file()): ?>
            <video controls src="<?= $file->url() ?>"></video>
        <?php endif ?>
        <?php if ($part->caption()->isNotEmpty()): ?>
            <div class="--txt-caption">
                <?= $part->caption()->kt() ?>
            </div>  
        <?php endif ?> 
    </div>
</div>