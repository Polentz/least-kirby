<div class="content-audio-component">
    <?php foreach ($part->children()->listed() as $audioelement): ?>
        <?php snippet('audio', ['audioelement' => $audioelement]); ?>
    <?php endforeach ?>
</div>