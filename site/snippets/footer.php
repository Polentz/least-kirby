        <footer class="footer --outline">
            <p class="--txt-footer"><?= $site->year()->kt()->inline() ?> © least</p>    
        </footer>
    </main>

    <?= js([
        'assets/js/media.js',
        'assets/js/script.js',
        '@auto',
    ]) ?>
</body>