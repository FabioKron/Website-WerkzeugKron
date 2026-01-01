const navSlide = () => {
    const menu = document.querySelector(".menu");
    const nav = document.querySelector(".nav-links");

    if (menu && nav) {
        menu.addEventListener("click", () => {
            nav.classList.toggle("nav-active");
        });
    }
};

const injectClosureBanner = () => {
    const main = document.querySelector("main");

    if (!main) {
        return;
    }

    const banner = document.createElement("div");
    banner.className = "site-banner";
    banner.innerHTML = `
        <p><strong>Hinweis:</strong> Unser Ladengeschäft ist ab 2026 geschlossen.</p>
        <p>Ausverkauf von Maschinen, Geräten und Brennholz am <strong>03.01., 10.01., 17.01. und 25.01.2026</strong> jeweils von <strong>9 bis 13 Uhr</strong>.</p>
    `;

    main.prepend(banner);
};

document.addEventListener("DOMContentLoaded", () => {
    navSlide();
    injectClosureBanner();
});