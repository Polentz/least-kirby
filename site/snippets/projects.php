<section id="<?= $part->title()->slug() ?>">
    <div class="grid-layout four-columns">
        <?php foreach ($part->children()->listed()->paginate(4) as $card): ?>
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
                    <?php if ($card->pagestatus()->isTrue()): ?>
                        <?= $card->fronttext()->toLink() ?>
                    <?php else : ?>
                        <?= $card->placeholder()->kt() ?>
                    <?php endif ?>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</section>

<!-- ho inserito paginate(4): trovare il modo creare un'altra section quando si supera 4 e nel blueprint di limitare il numero massimo di card a 4 -->

