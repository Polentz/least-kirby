<section>
    <div class="grid-layout four-columns">
        <?php foreach ($projects as $project): ?>
            <div class="grid-square --outline card">
                <?php if ($cover = $project->background()->toFile()): ?>
                    <div class="card-front --white" style="background-image: url('<?= $cover->url() ?>');">
                <?php else : ?>
                    <div class="card-front">
                <?php endif ?>
                    <div class="card-wrapper --txt-medium">
                        <?php if ($project->fronttext()->isNotEmpty()): ?>
                            <?= $project->fronttext()->kt() ?>
                        <?php endif ?>
                        <?php if ($project->frontfooter()->isNotEmpty()): ?>
                            <p class="--txt-caption"><?= $project->frontfooter()->kt()->inline() ?></p>
                        <?php endif ?>
                    </div>
                </div>
                <div class="card-back --txt-small">
                    <?php if ($project->pagestatus()->isTrue()): ?>
                        <a href="<?= $project->url() ?>" class="card-wrapper">
                            <?php if ($project->backtext()->isNotEmpty()): ?>
                                <?= $project->backtext()->kt() ?>
                            <?php endif ?>
                            <?php if ($project->backfooter()->isNotEmpty()): ?>
                                <p class="--txt-caption"><?= $project->backfooter()->kt()->inline() ?></p>
                            <?php endif ?>
                        </a>
                    <?php else : ?>
                        <div class="card-wrapper">
                            <?php if ($project->backtext()->isNotEmpty()): ?>
                                <?= $project->backtext()->kt() ?>
                            <?php endif ?>
                            <?php if ($project->backfooter()->isNotEmpty()): ?>
                                <p class="--txt-caption"><?= $project->backfooter()->kt()->inline() ?></p>
                            <?php endif ?>
                        </div>
                    <?php endif ?>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</section>


