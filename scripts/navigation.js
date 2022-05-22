let darkMode = localStorage.getItem('dark-theme');

const darkModeToggle = document.querySelector('#lightdarkmode');

const enableDarkMode = () => {
    // 1. Add the class to the body
    document.body.classList.add('dark-theme');
    // 2. Update darkMode in localStorage
    localStorage.setItem('dark-theme', 'enabled');

    optionslightdark.src = "logo/options1.png";
    homelightdark.src = "logo/home1.png";
    infolightdark.src = "logo/info1.png";
    serverslightdark.src = "logo/servers1.png";
    newslightdark.src = "logo/news1.png";
    faqlightdark.src = "logo/faq1.png";
    storelightdark.src = "logo/store1.png";
}

const disableDarkMode = () => {
    // 1. Remove the class from the body
    document.body.classList.remove('dark-theme');
    // 2. Update darkMode in localStorage 
    localStorage.setItem('dark-theme', null);

    optionslightdark.src = "logo/options.png";
    homelightdark.src = "logo/home.png";
    infolightdark.src = "logo/info.png";
    serverslightdark.src = "logo/servers.png";
    newslightdark.src = "logo/news.png";
    faqlightdark.src = "logo/faq.png";
    storelightdark.src = "logo/store.png";
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