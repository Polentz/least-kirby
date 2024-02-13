const mainSection = document.querySelector(".main");
const mediaSection = document.querySelector(".cards-section");

const filterByTag = (cards) => {
    const pageTag = mainSection.dataset.name;
    cards.forEach(card => {
        const cardTag = card.dataset.tag;
        console.log(cardTag)
        if (!pageTag.includes(cardTag)) {
            card.remove();
        };
    });
};

const openContent = (element) => {
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

const openContentTrigger = () => {
    mediaCards.forEach(label => {
        label.addEventListener("click", (element) => {
            openContent(element);
        });
    });
};

const closeContent = () => {
    mediaContents.forEach(content => {
        if (content.classList.contains("show-content")) {
            content.classList.remove("show-content");
        };
        const mediafiles = document.querySelectorAll("audio, video");
        for (let i = 0; i < mediafiles.length; i++) {
            const media = mediafiles[i];
            if (media.played) {
                media.pause();
            };
        };
    });
    mediaSection.style.display = "block";
};

const closeContentTrigger = (container) => {
    mediaContentClose.forEach(btn => {
        btn.addEventListener("click", (e) => {
            e.preventDefault();
            closeContent();
            container.scrollTo(0, 0);
        });
    });
};

window.addEventListener("load", () => {
    filterByTag(cards);
    filterByTag(mediaContents);
    handleCategories();
    openContentTrigger();
    closeContentTrigger(mediaSection);
    customAudioPlayer();
    customVideoPlayer();
});



