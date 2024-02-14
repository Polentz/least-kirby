<!-- <?php
    if ($kirby->language()->code() == 'fr') {
        $href = 'en';
        $languageString = 'English';
    } else if ($kirby->language()->code() == 'en') {
        $href = 'fr';
        $languageString = 'Français';
    }
?> -->

<nav class="side-nav">
    <span class="menu-btn"></span>
    <div class="lang-btn --txt-small">
        <a href="<?= $page->url($href) ?>" hreflang="<?php echo $href ?>"><?= $languageString ?></a>
    </div>
    <?= snippet('menu') ?>
</nav>