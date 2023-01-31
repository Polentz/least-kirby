<section id="projects">
    <div class="grid-layout four-columns">
        <?php foreach ($part->children()->listed() as $card): ?>
            <div class="grid-square --outline card">
                <div class="card-front" 
                    <?php if ($cover = $card->background()->toFile()): ?>style="background-image: url('<?= $cover->url() ?>');"
                    <?php endif ?>>
                    <div class="card-front-wrapper --txt-medium">
                        <?php if ($card->fronttext()->isNotEmpty()): ?>
                            <?= $card->fronttext()->kt() ?>
                        <?php endif ?>
                    </div>
                    <?php if ($card->frontfooter()->isNotEmpty()): ?>
                        <p class="--txt-caption"><?= $card->frontfooter()->kt()->inline() ?></p>
                    <?php endif ?>
                </div>
                <div class="card-back --txt-small">
                    <?php if ($card->pagestatus()->isTrue()): ?>
                        <a href="<?= $card->url() ?>" class="card-back-wrapper">
                            <?php if ($card->backtext()->isNotEmpty()): ?>
                                <?= $card->backtext()->kt() ?>
                            <?php endif ?>
                            <?php if ($card->backfooter()->isNotEmpty()): ?>
                                <p class="--txt-caption"><?= $card->backfooter()->kt()->inline() ?></p>
                            <?php endif ?>
                        </a>
                    <?php else : ?>
                        <div class="card-back-wrapper">
                            <?php if ($card->backtext()->isNotEmpty()): ?>
                                <?= $card->backtext()->kt() ?>
                            <?php endif ?>
                            <?php if ($card->backfooter()->isNotEmpty()): ?>
                                <p class="--txt-caption"><?= $card->backfooter()->kt()->inline() ?></p>
                            <?php endif ?>
                        </div>
                    <?php endif ?>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</section>

