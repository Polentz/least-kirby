<?php
    $items = $site->children()->listed()->not('partners', $page);
?>

<div class="menu">
    <ul class="menu-wrapper">
        <?php if ($site->temporarymenu()->isNotEmpty()): ?>
            <li class="menu-link"><?= $site->temporarymenu()->kt() ?></li>   
        <?php else: ?>
            <?php if ($page->isHomePage()): ?>      
                <?php foreach($items as $item) : ?>
                    <li class="menu-link"><a href="<?= $item->url() ?>"><?= $item->title() ?></a></li>
                <?php endforeach ?>
                <?php if ($site->projects()->isNotEmpty()): ?>
                    <li class="menu-link"><a class="js-scroll" data-target-section="projects"><?= $site->projects()->inline() ?></a></li>
                <?php endif ?>
                <li class="menu-link"><a class="js-scroll" data-target-section="newsletter">Newsletter</a></li>
                <li class="menu-link"><a class="js-scroll" data-target-section="contact">Contact</a></li>
            <?php else: ?>
                <?php foreach($items as $item) : ?>
                <li class="menu-link"><a href="<?= $item->url() ?>"><?= $item->title() ?></a></li>
                <?php endforeach ?>
                <li class="menu-link"><a class="js-scroll" data-target-section="newsletter">Newsletter</a></li>
                <li class="menu-link"><a class="js-scroll" data-target-section="contact">Contact</a></li>
            <?php endif ?>
        <?php endif ?>
    </ul>
</div>
<div class="close-btn">
    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <line x1="18.8388" y1="0.868263" x2="1.86828" y2="17.8388" />
        <line x1="18.1317" y1="17.8388" x2="1.16118" y2="0.86828" />
    </svg>
</div>


