<section>
    <div class="grid-layout two-columns">
        <div class="grid-block --outline">
            <?php if ($part->leftmaintext()->isNotEmpty()): ?>
                <div class="grid-text --txt-medium">
                    <?= $part->leftmaintext()->kt() ?>
                </div>
            <?php endif ?>
            <?php if ($part->leftplaintext()->isNotEmpty()): ?>
                <div class="grid-text --txt-small">
                    <?= $part->leftplaintext()->kt() ?>
                </div>
            <?php endif ?> 
            <?php if ($part->leftbuttonText()->isNotEmpty()): ?>
                <div class="button-wrapper">
                    <a class="button-label --txt-medium" href="<?= $part->leftbuttonUrl() ?>"
                        target="_blank"><?= $part->leftbuttonText() ?></a>
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
            <?php if ($part->rightmaintext()->isNotEmpty()): ?>
                <div class="grid-text --txt-medium">
                    <?= $part->rightmaintext()->kt() ?>
                </div>
            <?php endif ?>
            <?php if ($part->rightplaintext()->isNotEmpty()): ?>
                <div class="grid-text --txt-small">
                    <?= $part->rightplaintext()->kt() ?>
                </div>
            <?php endif ?> 
            <?php if ($part->rightbuttonText()->isNotEmpty()): ?>
                <div class="button-wrapper">
                    <a class="button-label --txt-medium" href="<?= $part->rightbuttonUrl() ?>"
                        target="_blank"><?= $part->rightbuttonText() ?></a>
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
