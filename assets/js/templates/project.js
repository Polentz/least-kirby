const mainSection = document.querySelector(".main");
const mediaSection = document.querySelector(".cards-section");
const mediaCards = document.querySelectorAll(".media-card");
const mediaContents = document.querySelectorAll(".media-article");
const mediaContentClose = document.querySelectorAll(".media-content-close");
const categoryWrapper = document.querySelectorAll(".media-content-category");
const playBtns = document.querySelectorAll(".play-btn");
const audioComponent = document.querySelectorAll(".audio-wrapper");

window.addEventListener("load", () => {
    filterByTag(mediaCards);
    filterByTag(mediaContents);
});

const filterByTag = (cards) => {
    cards.forEach(card => {
        const pageTag = mainSection.dataset.name;
        const cardTag = card.dataset.tag;
        if (!cardTag.includes(pageTag)) {
            card.remove();
        };
    });
};

mediaCards.forEach(label => {
    label.addEventListener("click", (element) => {
        selectContent(element);
    });
});

mediaContentClose.forEach(btn => {
    btn.addEventListener("click", () => {
        unselectContent();
        mediaSection.scrollTo(0, 0);
    });
});

const selectContent = (element) => {
    const contentTag = element.currentTarget.dataset.name;
    mediaContents.forEach(content => {
        const contentName = content.dataset.name;
        if (contentName.includes(contentTag)) {
            content.classList.add("show-content");
        } else {
            content.classList.remove("show-content");
            mediaSection.style.display = "none";
        };
    });
};

const unselectContent = () => {
    mediaContents.forEach(content => {
        if (content.classList.contains("show-content")) {
            content.classList.remove("show-content");
        };
        const audios = document.querySelectorAll("audio");
        for (let i = 0; i < audios.length; i++) {
            const audio = audios[i];
            if (audio.played) {
                audio.pause();
            };
        };
    });
    mediaSection.style.display = "block";
};

categoryWrapper.forEach(container => {
    const mediaContentCategories = container.querySelectorAll(".media-content-filter");
    const reading = [
        "Reading",
        "Lecture",
        "Texte"
    ];
    const podcast = ["Podcast"];
    const video = ["Video", "Vidéo"];
    const svgLecture = container.querySelectorAll(".svg-lecture");
    const svgPodcast = container.querySelectorAll(".svg-podcast");
    const svgVideo = container.querySelectorAll(".svg-video");
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
        };
    });
});

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
            })

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
            }

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
                };
            });
        };
    });
});

document.addEventListener("play", (e) => {
    const audios = document.getElementsByTagName("audio");
    for (let i = 0, len = audios.length; i < len; i++) {
        if (audios[i] != e.target) {
            audios[i].pause();
        };
    };
}, true);



