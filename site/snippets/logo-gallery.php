<section>
    <div class="gallery-layout --outline">
        <div class="logo-block">
            <?php foreach ($part->desktop()->toFiles() as $image): ?>
                <figure class="logo-wrapper --desktop">
                    <img src="<?= $image->url() ?>" style="height: <?= $image->imageheight() ?>px;">
                </figure>
            <?php endforeach ?>
            <?php foreach ($part->mobile()->toFiles() as $image): ?>
                <figure class="logo-wrapper --mobile <?php if ($image->applyBackground()->isTrue()) : ?> --logo-bg <?php endif ?>">
                    <img src="<?= $image->url() ?>" style="height: <?= $image->imageheightmobile() ?>px;">
                </figure>
            <?php endforeach ?>
        </div>
    </div>
</section>