<section>
    <div class="grid-layout two-columns">
        <div class="grid-block --outline">
            <?php if ($part->maintext()->isNotEmpty()): ?>
                <div class="grid-text --txt-medium">
                    <?= $part->maintext()->kt() ?>
                </div>
            <?php endif ?>
            <?php if ($part->plaintext()->isNotEmpty()): ?>
                <div class="grid-text --txt-small">
                    <?= $part->plaintext()->kt() ?>
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
        <div class="grid-block --outline">  
        </div>
    </div>
</section>
