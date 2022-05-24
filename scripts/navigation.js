let darkMode = localStorage.getItem('dark-theme');

const darkModeToggle = document.querySelector('#lightdarkmode');

const enableDarkMode = () => {
    // 1. Add the class to the body
    document.body.classList.add('dark-theme');
    // 2. Update darkMode in localStorage
    localStorage.setItem('dark-theme', 'enabled');

    gamemodeslightdark.src = nav_gamemodes_icon_darkmode;
    faqlightdark.src = nav_faq_icon_darkmode;
    homelightdark.src = nav_home_icon_darkmode;
    infolightdark.src = nav_info_icon_darkmode;
    optionslightdark.src = nav_options_icon_darkmode;
    newslightdark.src = nav_news_icon_darkmode;
    storelightdark.src = nav_store_icon_darkmode;
}

const disableDarkMode = () => {
    // 1. Remove the class from the body
    document.body.classList.remove('dark-theme');
    // 2. Update darkMode in localStorage 
    localStorage.setItem('dark-theme', null);

    gamemodeslightdark.src = nav_gamemodes_icon;
    faqlightdark.src = nav_faq_icon;
    homelightdark.src = nav_home_icon;
    infolightdark.src = nav_info_icon;
    optionslightdark.src = nav_options_icon;
    newslightdark.src = nav_news_icon;
    storelightdark.src = nav_store_icon;
}

// If the user already visited and enabled darkMode
// start things off with it on
if (darkMode === 'enabled') {
    enableDarkMode();
}

// When someone clicks the button
darkModeToggle.addEventListener('click', () => {
    // get their darkMode setting
    darkMode = localStorage.getItem('dark-theme');

    // if it not current enabled, enable it
    if (darkMode !== 'enabled') {
        enableDarkMode();
        // if it has been enabled, turn it off  
    } else {
        disableDarkMode();
    }
});