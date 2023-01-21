<div class="grid-square --outline card">
    <div class="card-front --txt-medium" 
        <?php if ($cover = $project->background()->image()): ?>style="background-image: url('<?= $cover->url() ?>');"
        <?php endif ?>>
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