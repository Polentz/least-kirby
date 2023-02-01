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