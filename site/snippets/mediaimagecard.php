<div class="grid-square --outline" data-category="<?= $mediacontent->filter()->slug() ?>" data-name="<?= $mediacontent->title()->slug() ?>" data-tag="<?= $mediacontent->tag()->slug() ?>">
    <img src="<?= $mediacontent->image()->url() ?>" />
</div>