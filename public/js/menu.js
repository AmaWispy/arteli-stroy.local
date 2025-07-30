const setupMenuRendering = () => {
    const menu = document.querySelector(".multilevel-menu");
    const desktopMenu = document.querySelector(".desktop-menu__service");
    const mobileMenu = document.querySelector(".mobile-menu__service");

    handleResize(menu, desktopMenu, mobileMenu);
    
    window.addEventListener("resize", () => handleResize(menu, desktopMenu, mobileMenu))
}

document.addEventListener("DOMContentLoaded", setupMenuRendering);

function handleResize(menu, desktopMenu, mobileMenu) {
    if(document.documentElement.clientWidth < 768) {
        menu.remove();
        mobileMenu.appendChild(menu);
    } else {
        menu.remove();
        desktopMenu.appendChild(menu);
    }
}