        <section id="contact">
            <div class="grid-layout two-columns">
                <div class="grid-block --outline">
                    <div class="grid-text">
                        <h2 class="--title-large">Contact</h2>
                    </div>
                </div>
                <div class="contact-block --outline">
                    <p class="site-title">least</p>
                    <?= $site->address()->kt() ?>
                    <a href="mailto:<?= $site->email() ?>"><?= $site->email() ?></a>
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