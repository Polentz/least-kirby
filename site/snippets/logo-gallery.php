<section>
    <div class="gallery-layout --outline">
        <div class="logo-block">
            <?php foreach ($part->images() as $image): ?>
                <figure class="logo-wrapper">
                    <img 
                        src="<?= $image->url() ?>" 
                        alt="<?= $image->alt() ?>"
                    >
                    <?php if ($image->caption()): ?>
                        <figcaption class="--txt-caption"><?= $image->caption() ?></figcaption>
                    <?php endif ?>
                </figure>
            <?php endforeach ?>
        </div>
    </div>
</section>