<section>
    <div class="gallery-layout --outline">
        <div class="gallery-btn">
            <a id="btn-left">
                <svg viewBox="0 0 33 22" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 1L1 11L16 21" fill="none" />
                    <path d="M1 11L33 11" fill="none" />
                </svg>
            </a>
            <a id="btn-right">
                <svg viewBox="0 0 33 22" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17 21L32 11L17 0.999999" fill="none" />
                    <path d="M32 11L-2.38419e-07 11" fill="none" />
                </svg>
            </a>
        </div>
        <div class="gallery-block">
            <?php foreach ($part->images()->sortBy('sort') as $image): ?>
                <figure class="image-wrapper">
                    <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
                    <?php if ($image->caption()->isNotEmpty()): ?>
                        <figcaption class="--txt-caption"><?= $image->caption() ?></figcaption>
                    <?php endif ?>
                </figure>
            <?php endforeach ?>
        </div>
    </div>
</section>