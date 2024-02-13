<div class="grid-square --outline card">
    <?php if ($cover = $project->background()->image()): ?>
        <div class="card-front --txt-medium --white" style="background-image: url('<?= $cover->url() ?>');">
    <?php else : ?>
        <div class="card-front --txt-medium">
    <?php endif ?>
        <?php if ($project->fronttext()->isNotEmpty()): ?>
            <?= $project->fronttext()->kt() ?>
        <?php endif ?>
    </div>
    <div class="card-back --txt-small">
        <?php if ($project->backtext()->isNotEmpty()): ?>
            <?= $project->backtext()->kt() ?>
        <?php endif ?>
        <?php if ($project->pagestatus()->isTrue()): ?>
            <?= $project->fronttext()->toLink() ?>
        <?php else : ?>
            <?= $project->placeholder()->kt() ?>
        <?php endif ?>
    </div>
</div>