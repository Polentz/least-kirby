<section>
    <div class="grid-layout four-columns">
        <?php foreach ($part->children()->listed() as $card): ?>
            <div class="grid-square --outline card">
                <div class="card-front --txt-medium" 
                    <?php if ($cover = $card->background()->toFile()): ?>style="background-image: url('<?= $cover->url() ?>');"
                    <?php endif ?>>
                    <?php if ($card->fronttext()->isNotEmpty()): ?>
                        <?= $card->fronttext()->kt() ?>
                    <?php endif ?>
                </div>
                <div class="card-back --txt-small">
                    <?php if ($card->backtext()->isNotEmpty()): ?>
                        <?= $card->backtext()->kt() ?>
                    <?php endif ?>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</section>


