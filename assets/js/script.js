const documentHeight = () => {
    const doc = document.documentElement;
    doc.style.setProperty("--doc-height", `${window.innerHeight}px`);
};

const customCursor = () => {
    const cursor = document.getElementById("cursor");
    const links = document.querySelectorAll("a, .menu-btn, .close-btn, .filter-btn, .all-media-btn, .media-label, .card-back a, .media-card .card-back, .media-content-close, .audio-player svg, .video-player svg, .seek-slider");
    document.addEventListener("mousemove", (event) => {
        let x = event.pageX;
        let y = event.pageY;
        cursor.style.left = x + "px";
        cursor.style.top = y + "px";
    });
    links.forEach(link => {
        link.addEventListener("mouseenter", () => {
            cursor.style.width = 112 + "px";
            cursor.style.height = 112 + "px";
        });
        link.addEventListener("mouseleave", () => {
            cursor.style.width = 10 + "px";
            cursor.style.height = 10 + "px";
        });
    });
};

const scrollIntoView = (e) => {
    const targetSection = document.getElementById(e.target.dataset.targetSection);
    targetSection.scrollIntoView({
        behavior: "smooth"
    });
};

const jsScroll = () => {
    const pageLinks = document.querySelectorAll(".js-scroll");
    for (let i = 0; i < pageLinks.length; i++) {
        const pagelink = pageLinks[i];
        pagelink.addEventListener("click", scrollIntoView, false);
    };
};

const handleMenu = () => {
    const openBtn = document.querySelector(".menu-btn");
    const closeBtn = document.querySelector(".close-btn");
    const closeMenuBtns = document.querySelectorAll(".close-btn, .menu-link a");
    const menu = document.querySelector(".menu");
    const menuWrapper = document.querySelector(".menu-wrapper");
    const langBtn = document.querySelector(".lang-btn a");
    const body = document.querySelector("body");

    openBtn.addEventListener("click", () => {
        openBtn.classList.add("scale");
        if (openBtn.classList.contains("scale")) {
            closeBtn.classList.add("--show-element");
        } else {
            closeBtn.classList.remove("--show-element");
        };
        setTimeout(() => {
            body.style.overflowY = "hidden";
            menu.classList.add("--show-element");
        }, 400);
        setTimeout(() => {
            menuWrapper.classList.add("--fade-element");
            langBtn.style.color = "var(--bg-color)";
        }, 600);
    });

    closeMenuBtns.forEach(btn => {
        btn.addEventListener("click", () => {
            menuWrapper.classList.remove("--fade-element");
            langBtn.style.color = "var(--txt-color)";
            setTimeout(() => {
                openBtn.classList.remove("scale");
                closeBtn.classList.remove("--show-element");
            }, 300);
            setTimeout(() => {
                body.style.overflowY = "scroll";
                menu.classList.remove("--show-element");
            }, 500);
        });
    });
};

const handleHeaderOnScroll = () => {
    const topBar = document.querySelector(".header");
    let lastScrollTop = 0;
    window.addEventListener("scroll", () => {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if (scrollTop < lastScrollTop) {
            topBar.classList.remove("--up");
            topBar.classList.add("--down");
        } else {
            topBar.classList.remove("--down");
            topBar.classList.add("--up");
        }
        lastScrollTop = scrollTop;
    }, false);
};

const createChild = () => {
    let div = document.createElement("div");
    div.classList.add("grid-square", "--outline");
    return div;
}

const handleGrid = () => {
    const gridLayout = document.querySelectorAll(".four-columns, .two-columns");
    for (let i = 0; i < gridLayout.length; i++) {
        const parent = gridLayout[i];
        const children = parent.children;
        const childrenArray = Array.from(children);
        childrenArray.forEach(child => {
            if (child.children.length == 0) {
                child.classList.add("--empty");
            };
        });
    };
};

const revealOnScroll = () => {
    const reveals = document.querySelectorAll(".main section");
    for (let i = 0; i < reveals.length; i++) {
        const windowHeight = window.innerHeight;
        const elementTop = reveals[i].getBoundingClientRect().top;
        const elementVisible = 100;

        if (elementTop < windowHeight - elementVisible) {
            reveals[i].classList.add("appear");
        } else {
            reveals[i].classList.remove("appear");
        };
    };
};

const handleSlideshow = () => {
    const btnLeft = document.getElementById("btn-left");
    const btnRight = document.getElementById("btn-right");
    const scrollContainer = document.querySelector(".gallery-block");
    const images = document.querySelectorAll(".image-wrapper img");
    const distance = screen.width / 2;

    if (scrollContainer) {
        btnLeft.addEventListener("click", () => {
            scrollContainer.scrollBy({
                left: -distance,
                behavior: "smooth"
            });
            images.forEach(image => {
                image.classList.add("--grayscale");
            });
            window.addEventListener("scroll", () => {
                images.forEach(image => {
                    image.classList.remove("--grayscale");
                });
            });
        })
        btnRight.addEventListener("click", () => {
            scrollContainer.scrollBy({
                left: distance,
                behavior: "smooth"
            });
            images.forEach(image => {
                image.classList.add("--grayscale");
            });
            window.addEventListener("scroll", () => {
                images.forEach(image => {
                    image.classList.remove("--grayscale");
                });
            });
        });
    };
};

window.addEventListener("resize", () => {
    documentHeight();
});

window.addEventListener("load", () => {
    history.scrollRestoration = "manual";
    documentHeight();
    customCursor();
    jsScroll();
    handleMenu();
    handleHeaderOnScroll();
    handleGrid();
    revealOnScroll();
    handleSlideshow();
});

window.addEventListener("scroll", () => {
    revealOnScroll();
});


