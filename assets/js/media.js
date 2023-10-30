const filterBtns = document.querySelectorAll(".filter-btn");
const filterClear = document.getElementById("all-media");
const cards = document.querySelectorAll(".card");
const mediaCards = document.querySelectorAll(".media-card");
const mediaContents = document.querySelectorAll(".media-article");
const categoryWrapper = document.querySelectorAll(".media-content-category");
const mediaContentClose = document.querySelectorAll(".media-content-close");
const audioComponent = document.querySelectorAll(".audio-wrapper");
const videoComponent = document.querySelectorAll(".video-wrapper");
const playBtns = document.querySelectorAll(".play-btn");

const handleCategories = () => {
    categoryWrapper.forEach(container => {
        const mediaContentCategories = container.querySelectorAll(".media-content-filter");
        const reading = [
            "Reading",
            "Lecture",
            "Texte"
        ];
        const podcast = ["Podcast"];
        const video = ["Video", "Vidéo"];
        const audio = ["Audio"];
        const press = ["Press", "Presse"];
        const svgLecture = container.querySelectorAll(".svg-lecture");
        const svgPodcast = container.querySelectorAll(".svg-podcast");
        const svgVideo = container.querySelectorAll(".svg-video");
        const svgAudio = container.querySelectorAll(".svg-audio");
        const svgPress = container.querySelectorAll(".svg-press");
        mediaContentCategories.forEach(category => {
            if (reading.includes(category.innerText)) {
                svgLecture.forEach(element => {
                    element.style.display = "block";
                });
            } else if (podcast.includes(category.innerText)) {
                svgPodcast.forEach(element => {
                    element.style.display = "block";
                });
            } else if (video.includes(category.innerText)) {
                svgVideo.forEach(element => {
                    element.style.display = "block";
                });
            } else if (audio.includes(category.innerText)) {
                svgAudio.forEach(element => {
                    element.style.display = "block";
                });
            } else if (press.includes(category.innerText)) {
                svgPress.forEach(element => {
                    element.style.display = "block";
                });
            };
        });
    });
};

const highlightItemPerFilter = (element) => {
    const filterName = element.currentTarget.dataset.filter;
    cards.forEach(media => {
        const mediaCategoryTag = media.dataset.category;
        if (mediaCategoryTag.includes(filterName)) {
            media.classList.add("highlight");
        } else {
            media.classList.remove("highlight");
        };
    });
};

const applyFilter = (element, btn) => {
    filterBtns.forEach(btn => {
        btn.classList.remove("filtered");
    });
    filterClear.style.display = "block";
    const filterName = element.currentTarget.dataset.filter;
    cards.forEach(media => {
        const mediaCategoryTag = media.dataset.category;
        if (mediaCategoryTag.includes(filterName)) {
            media.classList.remove("unfiltered");
            media.classList.add("filtered");
            btn.classList.add("filtered");
        } else {
            media.classList.add("unfiltered");
            media.classList.remove("filtered");
        };
    });
};

const removeFilters = () => {
    filterBtns.forEach(btn => {
        btn.classList.remove("filtered");
    });
    cards.forEach(media => {
        media.classList.remove("unfiltered");
        media.classList.remove("filtered");
    });
    mediaContents.forEach(content => {
        content.classList.remove("show-content");
    });
    filterClear.style.display = "none";
};

const customAudioPlayer = () => {
    audioComponent.forEach(component => {
        playBtns.forEach(btn => {
            if (btn.parentNode.parentNode === component) {
                const audioPlayerContainer = component.querySelector(".audio-player");
                const seekSlider = component.querySelector(".seek-slider");
                const audio = component.querySelector("audio");
                const stopBtn = component.querySelector(".stop-btn");
                const playIcon = component.querySelector(".play-icon");
                const pauseIcon = component.querySelector(".pause-icon");
                const stopIcon = component.querySelector(".stop-icon");
                const volumeIcon = component.querySelector(".volume-icon");
                const muteIcon = component.querySelector(".mute-icon");
                const durationContainer = component.querySelector(".audio-duration");
                const currentTimeContainer = component.querySelector(".audio-progress");
                const volumeContainer = component.querySelector(".audio-volume");

                let raf = null;

                audio.controls = false
                audioPlayerContainer.style.display = "flex"

                btn.addEventListener("click", () => {
                    if (audio.paused) {
                        audio.play();
                        requestAnimationFrame(whilePlaying);
                    } else {
                        audio.pause();
                        cancelAnimationFrame(raf);
                    };
                    playIcon.classList.toggle("toggle-play");
                    pauseIcon.classList.toggle("toggle-play");
                    stopIcon.classList.add("toggle-play");
                });

                stopBtn.addEventListener("click", () => {
                    stopAudio();
                });

                audio.addEventListener("timeupdate", () => {
                    if (audio.duration === audio.currentTime) {
                        stopAudio();
                    };
                });

                volumeContainer.addEventListener("click", () => {
                    controlVolume();
                });

                const controlVolume = () => {
                    if (audio.volume > 0) {
                        audio.volume = 0;
                        volumeIcon.classList.add("toggle-volume");
                        muteIcon.classList.add("toggle-volume");
                    } else {
                        audio.volume = 1;
                        volumeIcon.classList.remove("toggle-volume");
                        muteIcon.classList.remove("toggle-volume");
                    };
                };

                const stopAudio = () => {
                    audio.pause();
                    audio.currentTime = 0;
                    playIcon.classList.remove("toggle-play");
                    pauseIcon.classList.remove("toggle-play");
                    stopIcon.classList.remove("toggle-play");
                };

                const showRangeProgress = (rangeInput) => {
                    audioPlayerContainer.style.setProperty("--seek-before-width", rangeInput.value / rangeInput.max * 100 + "%");
                };

                seekSlider.addEventListener("input", (e) => {
                    showRangeProgress(e.target);
                });

                const calculateTime = (sec) => {
                    let minutes = Math.floor(sec / 60);
                    let seconds = Math.floor(sec - minutes * 60);
                    if (seconds < 10) {
                        seconds = `0${seconds}`;
                    }
                    return `${minutes}:${seconds}`;
                };

                const displayDuration = () => {
                    durationContainer.textContent = calculateTime(audio.duration);
                };

                const setSliderMax = () => {
                    seekSlider.max = Math.floor(audio.duration);
                };

                const whilePlaying = () => {
                    seekSlider.value = Math.floor(audio.currentTime);
                    currentTimeContainer.textContent = calculateTime(seekSlider.value);
                    audioPlayerContainer.style.setProperty("--seek-before-width", `${seekSlider.value / seekSlider.max * 100}%`);
                    raf = requestAnimationFrame(whilePlaying);
                };

                if (audio.readyState > 0) {
                    displayDuration();
                    setSliderMax();
                };

                audio.addEventListener("playing", () => {
                    displayDuration();
                    setSliderMax();
                });

                seekSlider.addEventListener("input", () => {
                    currentTimeContainer.textContent = calculateTime(seekSlider.value);
                    if (!audio.paused) {
                        cancelAnimationFrame(raf);
                    };
                });

                seekSlider.addEventListener("change", () => {
                    audio.currentTime = seekSlider.value;
                    if (!audio.paused) {
                        requestAnimationFrame(whilePlaying);
                    }
                });
            };
        });
    });

    document.addEventListener("play", (e) => {
        const audios = document.getElementsByTagName("audio");
        for (let i = 0; i < audios.length; i++) {
            if (audios[i] != e.target) {
                audios[i].pause();
            };
        };
    }, true);
};

const customVideoPlayer = () => {
    videoComponent.forEach(component => {
        playBtns.forEach(btn => {
            if (btn.parentNode.parentNode === component) {
                const videoPlayerContainer = component.querySelector(".video-player");
                const seekSlider = component.querySelector(".seek-slider");
                const video = component.querySelector("video");
                const stopBtn = component.querySelector(".stop-btn");
                const playIcon = component.querySelector(".play-icon");
                const pauseIcon = component.querySelector(".pause-icon");
                const stopIcon = component.querySelector(".stop-icon");
                const volumeContainer = component.querySelector(".audio-volume");
                const volumeIcon = component.querySelector(".volume-icon");
                const muteIcon = component.querySelector(".mute-icon");
                const fullscreenContainer = component.querySelector(".fullscreen");
                const fullscreenIcon = component.querySelector(".fullscreen-icon");
                const reducescreenIcon = component.querySelector(".reducescreen-icon");
                const durationContainer = component.querySelector(".audio-duration");
                const currentTimeContainer = component.querySelector(".audio-progress");

                let raf = null;

                video.controls = false;
                videoPlayerContainer.style.display = "flex";

                const playVideo = () => {
                    if (video.paused) {
                        video.play();
                        requestAnimationFrame(whilePlaying);
                    } else {
                        video.pause();
                        cancelAnimationFrame(raf);
                    };
                    playIcon.classList.toggle("toggle-play");
                    pauseIcon.classList.toggle("toggle-play");
                    stopIcon.classList.add("toggle-play");
                }

                const stopAudio = () => {
                    video.pause();
                    video.currentTime = 0;
                    playIcon.classList.remove("toggle-play");
                    pauseIcon.classList.remove("toggle-play");
                    stopIcon.classList.remove("toggle-play");
                };

                const controlVolume = () => {
                    if (video.volume > 0) {
                        video.volume = 0;
                        volumeIcon.classList.add("toggle-volume");
                        muteIcon.classList.add("toggle-volume");
                    } else {
                        video.volume = 1;
                        volumeIcon.classList.remove("toggle-volume");
                        muteIcon.classList.remove("toggle-volume");
                    };
                };

                btn.addEventListener("click", () => {
                    playVideo();
                });

                video.addEventListener("click", () => {
                    playVideo();
                });

                stopBtn.addEventListener("click", () => {
                    stopAudio();
                });

                video.addEventListener("timeupdate", () => {
                    if (video.duration === video.currentTime) {
                        stopAudio();
                    };
                });

                volumeContainer.addEventListener("click", () => {
                    controlVolume();
                });

                const fullScreenEnabled = !!(document.fullscreenEnabled || document.mozFullScreenEnabled || document.msFullscreenEnabled || document.webkitSupportsFullscreen || document.webkitFullscreenEnabled || document.createElement('video').webkitRequestFullScreen);
                if (!fullScreenEnabled) {
                    fullscreenContainer.style.display = "none";
                };

                const setFullscreenData = (state) => {
                    component.setAttribute('data-fullscreen', !!state);
                };

                const isFullScreen = () => {
                    return !!(document.fullScreen || document.webkitIsFullScreen || document.mozFullScreen || document.msFullscreenElement || document.fullscreenElement);
                };

                const handleFullscreen = () => {
                    if (isFullScreen()) {
                        if (document.exitFullscreen) {
                            document.exitFullscreen();
                        } else if (document.mozCancelFullScreen) {
                            document.mozCancelFullScreen();
                        } else if (document.webkitCancelFullScreen) {
                            document.webkitCancelFullScreen();
                        } else if (document.msExitFullscreen) {
                            document.msExitFullscreen();
                        };
                        setFullscreenData(false);
                    } else {
                        if (component.requestFullscreen) {
                            component.requestFullscreen();
                        } else if (component.mozRequestFullScreen) {
                            component.mozRequestFullScreen();
                        } else if (component.webkitRequestFullScreen) {
                            video.webkitRequestFullScreen();
                        } else if (component.msRequestFullscreen) {
                            component.msRequestFullscreen();
                        };
                        setFullscreenData(true);
                    };
                };

                fullscreenContainer.addEventListener("click", () => {
                    handleFullscreen();
                });

                document.addEventListener('fullscreenchange', () => {
                    fullscreenIcon.classList.toggle("toggle-screen");
                    reducescreenIcon.classList.toggle("toggle-screen");
                    component.classList.toggle("fullscreen");
                });

                const showRangeProgress = (rangeInput) => {
                    videoPlayerContainer.style.setProperty("--seek-before-width", rangeInput.value / rangeInput.max * 100 + "%");
                };

                seekSlider.addEventListener("input", (e) => {
                    showRangeProgress(e.target);
                });

                const calculateTime = (sec) => {
                    let minutes = Math.floor(sec / 60);
                    let seconds = Math.floor(sec - minutes * 60);
                    if (seconds < 10) {
                        seconds = `0${seconds}`;
                    }
                    return `${minutes}:${seconds}`;
                };

                const displayDuration = () => {
                    durationContainer.textContent = calculateTime(video.duration);
                };

                const setSliderMax = () => {
                    seekSlider.max = Math.floor(video.duration);
                };

                const whilePlaying = () => {
                    seekSlider.value = Math.floor(video.currentTime);
                    currentTimeContainer.textContent = calculateTime(seekSlider.value);
                    videoPlayerContainer.style.setProperty("--seek-before-width", `${seekSlider.value / seekSlider.max * 100}%`);
                    raf = requestAnimationFrame(whilePlaying);
                };

                if (video.readyState > 0) {
                    displayDuration();
                    setSliderMax();
                };

                video.addEventListener("playing", () => {
                    displayDuration();
                    setSliderMax();
                });

                seekSlider.addEventListener("input", () => {
                    currentTimeContainer.textContent = calculateTime(seekSlider.value);
                    if (!video.paused) {
                        cancelAnimationFrame(raf);
                    };
                });

                seekSlider.addEventListener("change", () => {
                    video.currentTime = seekSlider.value;
                    if (!video.paused) {
                        requestAnimationFrame(whilePlaying);
                    };
                });
            };
        });
    });

    document.addEventListener("play", (e) => {
        const videos = document.getElementsByTagName("video");
        for (let i = 0; i < videos.length; i++) {
            if (videos[i] != e.target) {
                videos[i].pause();
            };
        };
    }, true);
};


