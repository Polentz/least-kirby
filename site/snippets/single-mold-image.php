<section>
    <div class="grid-layout four-columns">
        <div class="grid-square --outline">
            <?php if ($part->firstslot()->isTrue()): ?>
                <img src="<?= $part->image()->url() ?>" />
            <?php endif ?>
        </div>

        <div class="grid-square --outline">
            <?php if ($part->secondslot()->isTrue()): ?>
                <img src="<?= $part->image()->url() ?>" />
            <?php endif ?>
        </div>

        <div class="grid-square --outline">
            <?php if ($part->thirdslot()->isTrue()): ?>
                <img src="<?= $part->image()->url() ?>" />
            <?php endif ?>
        </div>

        <div class="grid-square --outline">
            <?php if ($part->fourthslot()->isTrue()): ?>
                <img src="<?= $part->image()->url() ?>" />
            <?php endif ?>
        </div>
    </div>
</section>