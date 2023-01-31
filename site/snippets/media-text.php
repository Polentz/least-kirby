<div class="content-text-component">
    <?php if ($part->text()->isNotEmpty()): ?>
        <div class="content-text-wrapper">
            <?= $part->text()->kt() ?>
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

