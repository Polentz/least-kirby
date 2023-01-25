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
                            target="_blank">s'inscrire ici</a>
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

        <section id="contact">
            <div class="grid-layout two-columns">
                <div class="grid-block --outline">
                    <div class="grid-text">
                        <h2 class="--title-large">Contact</h2>
                    </div>
                </div>
                <div class="grid-block --outline">
                    <div class="contact--block">
                        <p class="site-title">least</p>
                        <p class="site-subtitle">laboratoire écologie et art pour une société en transition</p>
                    </div>
                    <div class="contact--block --txt-small">
                        <?= $site->address()->markdown() ?>
                    </div>
                    <div class="contact--block --txt-small">
                        <a href="mailto:<?= $site->email() ?>"><?= $site->email() ?></a>
                    </div>
                    <div class="contact--block --txt-small">
                        <a href=""><?= $site->partnerlink() ?></a>
                    </div>
                </div>
            </div>
        </section>
            
        <footer class="footer --outline">
            <p class="--txt-footer">2022 © least</p>    
        </footer>
    </main>

    <?= js([
        'assets/js/script.js',
        'assets/js/cursor.js',
        'assets/js/scroll.js',
        'assets/js/slide.js',
        '@auto',
    ]) ?>
</body>