<section class="cards-section">
    <div class="grid-layout four-columns">
        <?php foreach ($mediapage as $mediacontent): ?>
            <?php snippet($mediacontent->intendedTemplate(), compact('mediacontent')) ?>
        <?php endforeach ?>
    </div>
</section>

<section class="content-section">
    <?php foreach ($mediapage as $mediacontent): ?>
        <?php snippet('mediaarticle', ['mediacontent' => $mediacontent]) ?>
    <?php endforeach ?>
</section>