<section id="newsletter">
    <div class="grid-layout two-columns">
        <div class="grid-block --outline">
            <div class="grid-text">
                <h2 class="--title-large"><?= $site->newslettername() ?></h2>
            </div>
        </div>
        <div class="grid-block --outline">
            <div class="grid-text --txt-medium">
                <?= $site->newslettercta()->kirbytext() ?>
            </div>
            <div class="button-wrapper">
                <a class="button-label --txt-medium" href="<?= $site->newsletterlink() ?>"
                    target="_blank"><?= $site->newsletterclick() ?></a>
                <div class="button-ui">
                    <svg width="33" height="22" viewBox="0 0 33 22" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 21L32 11L17 0.999999" fill="none" />
                        <path d="M32 11L-2.38419e-07 11" fill="none" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>