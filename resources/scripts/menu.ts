export default class Menu {
  init() {
    // Constants declaration
    const menuElements = {
      nav: document.getElementById("menu_button"),
      top: document.getElementById("menu_top"),
      middle: document.getElementById("menu_middle"),
      bottom: document.getElementById("menu_bottom"),
      menu: document.querySelector(".menu"),
    };

    // Menu mobile animation
    menuElements.nav.addEventListener("click", () => {
      // verify if the menu is closed, if so, open it
      if (!menuElements.top.classList.contains("rotate-45")) {
        menuElements.top.classList.remove("-translate-y-1.5", "rotate-45");
        menuElements.top.classList.add("-translate-y-1.5", "rotate-45");
        menuElements.middle.classList.add("opacity-0");
        menuElements.bottom.classList.remove("translate-y-1.5");
        menuElements.bottom.classList.add("-translate-y-1.5", "-rotate-45");
        menuElements.menu.classList.remove("hidden");
        menuElements.menu.classList.add("top-[26px]", "left-[-45px]", "z-10");
      } else {
        menuElements.top.classList.remove("-translate-y-1.5", "rotate-45");
        menuElements.top.classList.add("-translate-y-1.5");
        menuElements.middle.classList.remove("opacity-0");
        menuElements.bottom.classList.remove("-translate-y-1.5", "-rotate-45");
        menuElements.bottom.classList.add("translate-y-1.5");
        menuElements.menu.classList.add("hidden");
        menuElements.menu.classList.remove(
          "top-[26px]",
          "left-[-45px]",
          "z-10",
        );
      }
    });
  }
}
