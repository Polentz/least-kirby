<section>
    <div class="grid-layout four-columns">
        <?php foreach ($part->children()->listed() as $card): ?>
            <div class="grid-square --outline card">
                <div class="card-front" 
                    <?php if ($cover = $card->background()->toFile()): ?>style="background-image: url('<?= $cover->url() ?>');"
                    <?php endif ?>>
                    <div class="card-wrapper --txt-medium">
                        <?php if ($card->fronttext()->isNotEmpty()): ?>
                            <?= $card->fronttext()->kt() ?>
                        <?php endif ?>
                    </div>
                </div>
                <div class="card-back">
                    <div class="card-wrapper --txt-small">
                        <?php if ($card->backtext()->isNotEmpty()): ?>
                            <?= $card->backtext()->kt() ?>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</section>


