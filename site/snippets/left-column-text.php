<section>
    <div class="grid-layout two-columns">
        <div class="grid-block --outline">
            <?php if ($part->maintext()->isNotEmpty()): ?>
                <div class="grid-text --txt-medium">
                    <?= $part->maintext()->kt() ?>
                </div>
            <?php endif ?>
            <?php if ($part->plaintext()->isNotEmpty()): ?>
                <div class="grid-text --txt-small">
                    <?= $part->plaintext()->kt() ?>
                </div>
            <?php endif ?>
        </div>
        <div class="grid-block --outline">  
        </div>
    </div>
</section>
