<div class="--outline grid-square card media-card" data-category="<?= $mediacontent->filter()->slug() ?>" data-name="<?= $mediacontent->shortname()->slug() ?>">
    <div class="card-front" <?php if ($cover = $mediacontent->background()->toFile()): ?>style="background-image: url('<?= $cover->url() ?>');"
        <?php endif ?>>
        <div class="--txt-medium">
            <?= $mediacontent->fronttext()->kt() ?>
        </div>
        <div class="media-content-category">
            <!-- <svg class="svg-lecture" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.00003 24C0.998047 23.6056 1.08981 23.2147 1.27002 22.85C1.45024 22.4853 1.71533 22.1539 2.05002 21.875C2.38471 21.5961 2.78236 21.3752 3.22002 21.225C3.65769 21.0748 4.12671 20.9984 4.60003 21H25V1.00003H4.60003C4.12671 0.998372 3.65769 1.07484 3.22002 1.22502C2.78236 1.3752 2.38471 1.59611 2.05002 1.87502C1.71533 2.15392 1.45024 2.4853 1.27002 2.85002C1.08981 3.21474 0.998047 3.6056 1.00003 4.00002V24ZM1.00003 24L1.00002 25H22.6" stroke="#fff" stroke-width="1.5px"/>
            </svg>
            <svg class="svg-podcast" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13.1834 21.3077V25M25.1834 13.9231C24.8356 15.946 23.4217 17.8107 21.21 19.1638C18.9982 20.5169 16.1422 21.2643 13.1834 21.2643C10.2246 21.2643 7.36861 20.5169 5.15684 19.1638C2.94508 17.8107 1.53126 15.946 1.18341 13.9231M13.1834 1C16.8859 1 19.8873 3.06638 19.8873 5.61538V13C19.8873 15.549 16.8859 17.6154 13.1834 17.6154C9.48095 17.6154 6.4795 15.549 6.4795 13V5.61538C6.4795 3.06638 9.48095 1 13.1834 1Z" stroke="#fff" stroke-width="1.5px"/>
            </svg>
            <svg class="svg-video" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 1L1 25L25 25L25 1L1 1Z" stroke="#fff" stroke-width="1.5px"/>
            <path d="M18 13.3333L9 8V18L18 13.3333Z" stroke="#fff" stroke-width="1.5px"/>
            </svg> -->
            <p class="--txt-caption"><?= $mediacontent->filter()->inline() ?></p>
        </div>
    </div>
    <div class="card-back">
        <div class="--txt-small">
            <?= $mediacontent->backtext()->kt() ?>
        </div>
        <div class="media-content-category">
            <?= asset('assets/icons/tag.svg')->read() ?>
            <p class="--txt-caption"><?= $mediacontent->tag()->inline() ?></p>
        </div>
    </div>
</div>
