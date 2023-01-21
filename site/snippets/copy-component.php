<div class="content-text-component">
    <?php foreach ($part->children()->listed() as $copyelement): ?>
        <?php snippet('copy', ['copyelement' => $copyelement]); ?>
    <?php endforeach ?>
</div>