<?php 
    $cover = $part->background()->toFile();
?>

<section>
    <div class="grid-layout four-columns">
        <div class="grid-span --outline">
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
        <div class="grid-square --outline" 
            <?php if ($part->firstslot()->isTrue()): ?>style="background-image: url('<?= $cover->url() ?>');"
            <?php endif ?>>  
        </div>
        <div class="grid-square --outline" 
            <?php if ($part->secondslot()->isTrue()): ?>style="background-image: url('<?= $cover->url() ?>');"
            <?php endif ?>>  
        </div>
    </div>
</section>
