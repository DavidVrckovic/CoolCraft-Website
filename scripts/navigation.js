document.getElementById("nav_options").addEventListener("click", dropdown);

function dropdown() {
    if (document.getElementsByClassName("dropdown")[0].style.display == "block") {
        document.getElementsByClassName("dropdown")[0].style.display = "none"
    } else {
        document.getElementsByClassName("dropdown")[0].style.display = "block";
    }
}



let darkMode = localStorage.getItem('Dark theme');

const darkModeToggle = document.querySelector('#lightdarkmode');

const enableDarkMode = () => {
    // 1. Add the class to the body
    document.body.classList.add('dark_theme');
    // 2. Update darkMode in localStorage
    localStorage.setItem('Dark theme', 'enabled');

    nav_gamemodes_img.src = nav_gamemodes_icon_darkmode;
    nav_faq_img.src = nav_faq_icon_darkmode;
    nav_home_img.src = nav_home_icon_darkmode;
    nav_info_img.src = nav_info_icon_darkmode;
    nav_options_img.src = nav_options_icon_darkmode;
    nav_news_img.src = nav_news_icon_darkmode;
    nav_store_img.src = nav_store_icon_darkmode;
}

const disableDarkMode = () => {
    // 1. Remove the class from the body
    document.body.classList.remove('dark_theme');
    // 2. Update darkMode in localStorage 
    localStorage.setItem('Dark theme', null);

    nav_gamemodes_img.src = nav_gamemodes_icon;
    nav_faq_img.src = nav_faq_icon;
    nav_home_img.src = nav_home_icon;
    nav_info_img.src = nav_info_icon;
    nav_options_img.src = nav_options_icon;
    nav_news_img.src = nav_news_icon;
    nav_store_img.src = nav_store_icon;
}

// If the user already visited and enabled darkMode
// start things off with it on
if (darkMode === 'enabled') {
    enableDarkMode();
}

// When someone clicks the button
darkModeToggle.addEventListener('click', () => {
    // get their darkMode setting
    darkMode = localStorage.getItem('Dark theme');

    // if it not current enabled, enable it
    if (darkMode !== 'enabled') {
        enableDarkMode();
        // if it has been enabled, turn it off  
    } else {
        disableDarkMode();
    }
});