import "@styles/app.css";
import.meta.glob(["../images/**", "../fonts/**"]);

import Menu from "./menu";
import Flickrgallery from "./flickrgallery";

/**
 * Application entrypoint
 */
addEventListener("DOMContentLoaded", async () => {
    console.log("Sage Vite is ready! 🎉");

    // Starting the menu
    if (document.getElementById("menu_button")) {
    new Menu().init();
    }

    // Starting the Flickr Fallery
    if (document.getElementById("flickr-gallery")) {
        new Flickrgallery().init();
    }

});
