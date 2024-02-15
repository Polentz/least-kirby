<div class="content-video-component">        
    <div class="video-wrapper">
        <?php if ($part->videotitle()->isNotEmpty()): ?>
            <div class="video-title --title-small">
                <?= $part->videotitle()->kt() ?>
            </div>
        <?php endif ?>
        
            <video 
                controls controlslist="noplaybackrate nodownload" disablePictureInPicture preload="metadata" 
                <?php foreach ($part->videoItems()->toFiles() as $item) : ?>
                <?php if ($item->type() == 'image') : ?>
                    poster="<?= $item->resize(1200, null)->url() ?>"
                <?php endif ?>
                <?php if ($item->type() == 'video') : ?>
                    src="<?= $item->url() ?>"
                <?php endif ?>
                <?php endforeach ?>>
            </video>

        <div class="video-player">
            <div class="play-btn">
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
            <div class="fullscreen">
                <svg class= "fullscreen-icon" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19 1H25V7M7 25H1V19M25 19V25H19M1 7V1H7"/>
                </svg>
                <svg class="reducescreen-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24 6L18 6V0M5.24537e-07 18H6L6 24M18 24V18H24M6 5.24537e-07L6 6L0 6"/>
                </svg>
            </div>
        </div> 
        <?php if ($part->caption()->isNotEmpty()): ?>
            <div class="--txt-caption">
                <?= $part->caption()->kt() ?>
            </div>  
        <?php endif ?> 
    </div>
</div>
