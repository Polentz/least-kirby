<div class="menu">
    <ul class="menu-wrapper">
        <?php foreach($pages->listed() as $item) : ?>
            <li class="menu-link"><a <?= e($item->isOpen(), ' class="current"') ?> href="<?= $item->url() ?>"><?= $item->title() ?></a></li>
        <?php endforeach ?>
    </ul>
</div>
<div class="close-btn">
    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <line x1="18.8388" y1="0.868263" x2="1.86828" y2="17.8388" />
        <line x1="18.1317" y1="17.8388" x2="1.16118" y2="0.86828" />
    </svg>
</div>


