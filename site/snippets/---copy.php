<?php if ($copyelement->largetext()->isNotEmpty()): ?>
    <div class="content-text-wrapper --txt-medium">
        <?= $copyelement->largetext()->kt() ?>
    </div>
<?php endif ?>  
<?php if ($copyelement->copytext()->isNotEmpty()): ?>
    <div class="content-text-wrapper --txt-small">
        <?= $copyelement->copytext()->kt() ?>
    </div>
<?php endif ?>  
<?php if ($image = $copyelement->image()): ?>
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