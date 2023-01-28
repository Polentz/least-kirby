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
                        <?= $site->address()->kt() ?>
                    </div>
                    <div class="contact--block --txt-small">
                        <a href="mailto:<?= $site->email() ?>"><?= $site->email() ?></a>
                    </div>
                    <?php if ($site->partnerlink()->isNotEmpty()): ?>
                        <div class="contact--block --txt-small">
                            <a href="<?= $site->partnerlink()->url() ?>"><?= $site->partnerlink() ?></a>
                        </div>
                    <?php endif ?>
                </div>
            </div>
        </section>
            
        <footer class="footer --outline">
            <p class="--txt-footer"><?= $site->year()->kt()->inline() ?> © least</p>    
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