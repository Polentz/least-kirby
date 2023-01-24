<div class="content-text-component">
    <?php if ($part->largetext()->isNotEmpty()): ?>
        <div class="content-text-wrapper --txt-medium">
            <?= $part->largetext()->kt() ?>
        </div>
    <?php endif ?>  
    <?php if ($part->copytext()->isNotEmpty()): ?>
        <div class="content-text-wrapper --txt-small">
            <?= $part->copytext()->kt() ?>
        </div>
    <?php endif ?>  
    <?php if ($image = $part->image()): ?>
        <figure class="content-text-image">
        <img 
            src="<?= $image->url() ?>" 
            alt="<?= $image->alt() ?>"
        >
        <?php if ($image->caption()): ?>
            <figcaption class="--txt-caption"><?= $image->caption() ?></figcaption>
        <?php endif ?>
        </figure>
    <?php endif ?>  
</div>

