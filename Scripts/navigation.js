// Get local storage items and save them in a variable
let theme = localStorage.getItem("Theme");

// Get elements and save them in a variable
const nav_logo = document.getElementById("nav_logo");
const nav_options = document.getElementById("nav_options");
const nav_links = document.getElementById("nav_links");

const nav_menu_link = document.querySelector("#nav_menu_link");
const nav_menu_dialog = document.querySelector("#nav_menu_dialog");

const nav_faq_img = document.querySelector("#nav_faq_img");
const nav_faq_img_hover = document.querySelector("#nav_faq_img_hover");
const nav_gamemodes_img = document.querySelector("#nav_gamemodes_img");
const nav_gamemodes_img_hover = document.querySelector("#nav_gamemodes_img_hover");
const nav_home_img = document.querySelector("#nav_home_img");
const nav_home_img_hover = document.querySelector("#nav_home_img_hover");
const nav_info_img = document.querySelector("#nav_info_img");
const nav_info_img_hover = document.querySelector("#nav_info_img_hover");
const nav_menu_img = document.querySelector("#nav_menu_img");
const nav_menu_img_hover = document.querySelector("#nav_menu_img_hover");
const nav_news_img = document.querySelector("#nav_news_img");
const nav_news_img_hover = document.querySelector("#nav_news_img_hover");
const nav_options_img = document.querySelector("#nav_options_img");
const nav_options_img_hover = document.querySelector("#nav_options_img_hover");
const nav_store_img = document.querySelector("#nav_store_img");
const nav_store_img_hover = document.querySelector("#nav_store_img_hover");

const nav_options_link = document.querySelector("#nav_options_link");
const nav_options_dialog = document.querySelector("#nav_options_dialog");

const theme_options = document.querySelector("#theme_options");






// Function to open/close the options dialog
function options_dialog() {

    if (nav_options_dialog.style.display == "block") {

        nav_options_dialog.style.display = "none";
        nav_options_img_hover.style.removeProperty("display");

    } else {

        nav_options_dialog.style.display = "block";
        nav_options_img_hover.style.display = "inline";

    }

}

// Check if elements exist
if (nav_options && nav_options_dialog) {

    nav_options.onclick = () => {
        options_dialog();
    }

}



// Function to open/close the menu dialog
function menu_dialog() {

    if (nav_menu_dialog.style.display == "block") {

        nav_menu_dialog.style.display = "none";
        nav_menu_img_hover.style.removeProperty("display");

    } else {

        nav_menu_dialog.style.display = "block";
        nav_menu_img_hover.style.display = "inline";

    }

}

// Check if elements exist
if (nav_menu_link && nav_menu_dialog) {

    nav_menu_link.onclick = () => {
        menu_dialog();
    }

}



// Function to enable dark theme
function enable_dark_theme() {

    // Add class to the body element
    document.body.classList.add("dark_theme");

    // Update the local storage
    localStorage.setItem("Theme", "dark");

    // Change icons
    nav_gamemodes_img.src = nav_gamemodes_icon_darkmode;
    nav_faq_img.src = nav_faq_icon_darkmode;
    nav_home_img.src = nav_home_icon_darkmode;
    nav_info_img.src = nav_info_icon_darkmode;
    nav_options_img.src = nav_options_icon_darkmode;
    nav_news_img.src = nav_news_icon_darkmode;
    nav_store_img.src = nav_store_icon_darkmode;

    // Change text
    theme_options.innerHTML = "Light theme";

}

// Function to disable dark theme
function disable_dark_theme() {

    // Remove class from the body element
    document.body.classList.remove("dark_theme");

    // Update the local storage
    localStorage.setItem("Theme", null);

    // Change icons
    nav_gamemodes_img.src = nav_gamemodes_icon;
    nav_faq_img.src = nav_faq_icon;
    nav_home_img.src = nav_home_icon;
    nav_info_img.src = nav_info_icon;
    nav_options_img.src = nav_options_icon;
    nav_news_img.src = nav_news_icon;
    nav_store_img.src = nav_store_icon;

    // Change text
    theme_options.innerHTML = "Dark theme";

}

// Check if the user has already enabled dark theme in previous sessions
if (theme === "dark") {
    enable_dark_theme();
}

// Check if elements exist
if (theme_options) {

    theme_options.addEventListener("click", () => {

        // Update a variable from the local storage
        theme = localStorage.getItem("Theme");

        if (theme !== "dark") {
            enable_dark_theme();
        } else {
            disable_dark_theme();
        }

    });

}