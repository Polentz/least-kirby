const sections = document.querySelectorAll(".cards-section, .filters-section");

const handleFilters = () => {
    filterBtns.forEach(btn => {
        btn.addEventListener("click", (element) => {
            applyFilter(element, btn);
            cards.forEach(label => {
                label.classList.remove("highlight");
            });
        });
        btn.addEventListener("mouseenter", (element) => {
            highlightItemPerFilter(element);
        });
        btn.addEventListener("mouseleave", () => {
            cards.forEach(label => {
                label.classList.remove("highlight");
            });
        });
    });

    filterClear.addEventListener("click", () => {
        removeFilters();
    });
};

const selectContent = (element) => {
    const clickedElementName = element.currentTarget.dataset.name;
    mediaContents.forEach(content => {
        const contentName = content.dataset.name;
        const offset = 56;
        if (contentName === clickedElementName) {
            content.classList.add("show-content");
            window.scrollTo({
                top: -offset
            });
        } else {
            content.classList.remove("show-content");
            sections.forEach(section => {
                section.style.display = "none";
            });
        };
    });
};

const selectContentTrigger = () => {
    mediaCards.forEach(label => {
        label.addEventListener("click", (element) => {
            selectContent(element);
        });
    });
};

const unselectContent = () => {
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
    sections.forEach(section => {
        section.style.display = "block";
    });
};

const unselectContentTrigger = (container) => {
    mediaContentClose.forEach(btn => {
        btn.addEventListener("click", () => {
            unselectContent();
            container.scrollTo(0, 0);
        });
    });
};

window.addEventListener("load", () => {
    handleCategories();
    handleFilters();
    selectContentTrigger();
    unselectContentTrigger(window);
    customAudioPlayer();
    customVideoPlayer();
});


