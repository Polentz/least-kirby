<div class="grid-layout four-columns">
    <?php foreach ($mediacontents->children()->listed() as $mediacontent): ?>
        <?php snippet('mediacontent', ['mediacontent' => $mediacontent]); ?>
    <?php endforeach ?>
</div>