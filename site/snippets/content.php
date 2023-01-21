<div class="--outline media-article" data-category="lecture" data-name="socks-on-fire">
    <h2>HEY THERE!</h2>
    <div class="media-title">
        <div class="--txt-medium">
            <?= $content->fronttext()->kt() ?>
        </div>
    </div>
    <div class="media-content">

        <div class="media-content-header">
            <div class="media-content-category">
                <!-- <img src="assets/media/ui/reading.svg"> -->
                <p class="--txt-caption"><?= $content->filter()->inline() ?></p>
                <?= asset('assets/icons/tag.svg')->read() ?>
                <p class="--txt-caption"><?= $content->tag()->inline() ?></p>
            </div>
            <div class="media-content-close">
                <?= asset('assets/icons/close.svg')->read() ?>
            </div>
        </div>

        <div class="media-content-wrapper">

            <!-- <div class="content-text-component">
                <div class="--txt-medium">
                    <?= $content->largetext()->kt() ?>
                </div>
                <div class="--txt-small">
                    <?= $content->copytext()->kt() ?>
                </div>
            </div> -->

            <!-- <div class="content-audio-component">
                <div id="wallace-1-component" class="audio-wrapper">
                    <div class="audio-title --title-small">
                        <?= $content->audiotitle()->kt() ?>
                    </div>
                    <div class="audio-player">
                        <div id="wallace-1" class="play-btn">
                            <svg class="play-icon" viewBox="0 0 27 26" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 25L25 13.3077L1 1V25Z" />
                            </svg>
                            <svg class="pause-icon" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 0V24M8 0V24" />
                            </svg>
                        </div>
                        <div class="stop-btn">
                            <svg class="stop-icon" viewBox="0 0 26 26" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L1 25L25 25L25 1L1 1Z" />
                            </svg>
                        </div>
                        <div class="audio-time --txt-ui">
                            <span class="audio-progress">0:00</span> / <span class="audio-duration"></span>
                        </div>
                        <input type="range" class="seek-slider" max="100" value="0">
                        <div class="audio-volume">
                            <svg class="volume-icon" viewBox="0 0 29 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M25 10V18M28 8V20M8 19H1V9H8L17 2V26L8 19Z" />
                            </svg>
                            <svg class="mute-icon" viewBox="0 0 29 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M28 11L22 17M28 17L22 11M8 19H1V9H8L17 2V26L8 19Z" />
                            </svg>

                        </div>
                    </div>
                    <audio src="<?= $content->audio()->url() ?>" preload="metadata"></audio>
                </div>
            </div> -->

            <!-- <div class="content-video-component">
                <div class="video-wrapper">
                    <video controls src="<?= $content->video()->url() ?>"></video>
                    <div class="--txt-caption">
                        <?= $content->videocaption()->kt() ?>
                    </div>
                </div>
            </div> -->
            
        </div>
    </div>
</div>