<section id="projects">
    <div class="grid-layout">
        <div class="grid-block --outline">
            <div class="grid-text">
                <h2 class="--title-large"><?= $site->projects()->inline() ?></h2>
            </div>         
        </div>
    </div>
</section>

<section>
    <div class="grid-layout four-columns">
        <?php foreach ($part->children()->listed() as $card): ?>
            <div class="grid-square --outline card">
                <div class="card-front" 
                    <?php if ($cover = $card->background()->toFile()): ?>style="background-image: url('<?= $cover->url() ?>');"
                    <?php endif ?>>
                    <?php if ($card->pagestatus()->isTrue()): ?>
                        <a href="<?= $card->url() ?>" class="card-wrapper --txt-medium">
                            <?php if ($card->fronttext()->isNotEmpty()): ?>
                                <?= $card->fronttext()->kt() ?>
                            <?php endif ?>
                            <?php if ($card->frontfooter()->isNotEmpty()): ?>
                                <p class="--txt-caption"><?= $card->frontfooter()->kt()->inline() ?></p>
                            <?php endif ?>
                        </a>
                    <?php else : ?>
                        <div class="card-wrapper --txt-medium">
                            <?php if ($card->fronttext()->isNotEmpty()): ?>
                                <?= $card->fronttext()->kt() ?>
                            <?php endif ?>
                            <?php if ($card->frontfooter()->isNotEmpty()): ?>
                                <p class="--txt-caption"><?= $card->frontfooter()->kt()->inline() ?></p>
                            <?php endif ?>
                        </div>
                    <?php endif ?>
                </div>
                <div class="card-back --txt-small">
                    <?php if ($card->pagestatus()->isTrue()): ?>
                        <a href="<?= $card->url() ?>" class="card-wrapper">
                            <?php if ($card->backtext()->isNotEmpty()): ?>
                                <?= $card->backtext()->kt() ?>
                            <?php endif ?>
                            <?php if ($card->backfooter()->isNotEmpty()): ?>
                                <p class="--txt-caption"><?= $card->backfooter()->kt()->inline() ?></p>
                            <?php endif ?>
                        </a>
                    <?php else : ?>
                        <div class="card-wrapper">
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

