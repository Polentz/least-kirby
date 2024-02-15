<nav class="side-nav">
    <span class="menu-btn"></span>
    <div class="lang-btn --txt-small">
        <a href="<?= $page->url($href) ?>" hreflang="<?php echo $href ?>"><?= $languageString ?></a>
    </div>
    <?= snippet('menu') ?>
</nav>