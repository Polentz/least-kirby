<div class="content-video-component">
    <?php foreach ($part->children()->listed() as $videoelement): ?>
        <?php snippet('video', ['videoelement' => $videoelement]); ?>
    <?php endforeach ?>
</div>