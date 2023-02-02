<section>
    <div class="gallery-layout --outline">
        <div class="logo-block">
            <?php foreach ($part->images()->sortBy('sort') as $image): ?>
                <figure class="logo-wrapper">
                    <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>" style="height: <?= $image->imageheight() ?>px;">
                    <?php if ($image->caption()): ?>
                        <figcaption class="--txt-caption"><?= $image->caption()->kt() ?></figcaption>
                    <?php endif ?>
                </figure>
            <?php endforeach ?>
        </div>
    </div>
</section>