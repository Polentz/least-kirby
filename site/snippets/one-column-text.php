<section>
    <div class="grid-layout">
        <div class="grid-block --outline">
            <?php if ($part->sectiontitle()->isNotEmpty()): ?>
                <div class="grid-text">
                    <h2 class="--title-large"><?= $part->sectiontitle()->kt()->inline() ?></h2>
                </div>
            <?php endif ?>
            <?php if ($part->text()->isNotEmpty()): ?>
                <div class="grid-text">
                    <?= $part->text()->kt() ?>
                </div>
            <?php endif ?>
            <?php if ($part->buttonText()->isNotEmpty()): ?>
                <div class="button-wrapper">
                    <a class="button-label --txt-medium" href="<?= $part->buttonUrl() ?>"
                        target="_blank"><?= $part->buttonText() ?></a>
                    <div class="button-ui">
                        <svg width="33" height="22" viewBox="0 0 33 22" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 21L32 11L17 0.999999" fill="none" />
                            <path d="M32 11L-2.38419e-07 11" fill="none" />
                        </svg>
                    </div>
                </div>
            <?php endif ?>  
        </div>
    </div>
</section>