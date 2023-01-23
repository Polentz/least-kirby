<?php foreach ($mediacontents->children()->listed() as $mediacontent): ?>
            <?php snippet('mediaheader', ['mediacontent' => $mediacontent]); ?>
            <div class="media-content-wrapper">
                <?php foreach ($mediacontent->children()->listed() as $part) : ?>
                    <?php snippet($part->intendedTemplate(), compact('part')) ?>
                <?php endforeach ?>
            </div>
        </div>
    </div>
<?php endforeach ?>