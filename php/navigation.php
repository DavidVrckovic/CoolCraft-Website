<!--<div class="header">
    <a class="icon" href=""> <img alt="Server icon" src="images/icons/coolcraft_icon.png"> </a>
    <a class="title" href=""> CoolCraft </a>
</div>

<nav class="flex-container">
    <ul class="nav">
        <li> <a class="active" href=""> Home </a> </li>
        <li> <a class="inactive" href="info"> Info </a> </li>
        <li> <a class="inactive" href="servers"> Servers </a> </li>
        <li> <a class="inactive" href="gallery"> Gallery </a> </li>
        <li> <a class="inactive" href="news"> News </a> </li>
        <li> <a class="inactive" href="faq"> FAQ </a> </li>
        <li> <a class="inactive" href="support"> Support </a> </li>
        <li> <a class="inactive" href="store"> Store </a> </li>
    </ul>
</nav>-->

<!--<header>
        <img class="logo nav_img" src="logo/CClogo.png" alt="srv_logo">
        <nav class="navig">
            <ul class="nav_links">
                <li>

                    <div class="home nav_div" id="home nav_div"><a href="news.php"><img src="logo/home.png" alt="srv_logo" id="homelightdark" class="nav_img"><img
                                src="logo/homehover.png" class="img-home nav_img" alt="srv_logo"></a></div>

                </li>
                <li>

                    <div class="info nav_div"><a href="news.php"><img src="logo/info.png" alt="srv_logo" id="infolightdark" class="nav_img"><img
                                src="logo/infohover.png" class="img-info nav_img" alt="srv_logo"></a></div>

                </li>
                <li>

                    <div class="servers nav_div"><a href="news.php"><img src="logo/servers.png" alt="srv_logo" id="serverslightdark" class="nav_img"><img
                                src="logo/servershover.png" class="img-servers nav_img" alt="srv_logo"></a></div>

                </li>
                <li>

                    <div class="news nav_div"><a href="news.php"><img src="logo/news.png" alt="srv_logo" id="newslightdark" class="nav_img"><img
                                src="logo/newshover.png" class="img-news nav_img" alt="srv_logo"></a></div>

                </li>
                <li>

                    <div class="faq nav_div"><a href="news.php"><img src="logo/faq.png" alt="srv_logo" id="faqlightdark" class="nav_img"><img
                                src="logo/faqhover.png" class="img-faq nav_img" alt="srv_logo"></a></div>

                </li>
                <li>

                    <div class="store nav_div"><a href="news.php"><img src="logo/store.png" alt="srv_logo" id="storelightdark" class="nav_img"><img
                                src="logo/storehover.png" class="img-store nav_img" alt="srv_logo"></a></div>

                </li>
            </ul>
        </nav>
        <div class="options nav_div">

            <a><img src="logo/options.png" alt="srv_logo" id="optionslightdark" class="nav_img"><img src="logo/optionshover.png" class="img-options nav_img"
                    alt="srv_logo" id="optionshover"></a>

                    <div class="options-dropdown-content nav_div">
                        <a href="#">Log In</a>
                        <a href="#">Hr/En</a>
                        <a href="#" id="lightdarkmode">Light/Dark</a>
                    </div>

        </div>
        <script src="navigation.js"></script>
    </header>-->

<header>
    <img class="logo nav_img" src="<?php echo($header_image); ?>" alt="srv_logo">
    <div class="navi">
        <div class="nav_links">
            <div class="button-img">

                <div class="home nav_div" id="home nav_div"><a href="news.php"><img src="<?php echo($nav_home_icon); ?>" alt="srv_logo" id="homelightdark" class="nav_img"><img src="<?php echo($nav_home_icon_hover); ?>" class="img-home nav_img" alt="srv_logo"></a></div>

            </div>
            <div class="button-img">

                <div class="info nav_div"><a href="news.php"><img src="<?php echo($nav_info_icon); ?>" alt="srv_logo" id="infolightdark" class="nav_img"><img src="<?php echo($nav_info_icon_hover); ?>" class="img-info nav_img" alt="srv_logo"></a></div>

            </div>
            <div class="button-img">

                <div class="servers nav_div"><a href="news.php"><img src="<?php echo($nav_gamemodes_icon); ?>" alt="srv_logo" id="serverslightdark" class="nav_img"><img src="<?php echo($nav_gamemodes_icon_hover); ?>" class="img-servers nav_img" alt="srv_logo"></a></div>

            </div>
            <div class="button-img">

                <div class="news nav_div"><a href="news.php"><img src="<?php echo($nav_news_icon); ?>" alt="srv_logo" id="newslightdark" class="nav_img"><img src="<?php echo($nav_news_icon_hover); ?>" class="img-news nav_img" alt="srv_logo"></a></div>

            </div>
            <div class="button-img">

                <div class="faq nav_div"><a href="news.php"><img src="<?php echo($nav_faq_icon); ?>" alt="srv_logo" id="faqlightdark" class="nav_img"><img src="<?php echo($nav_faq_icon_hover); ?>" class="img-faq nav_img" alt="srv_logo"></a></div>

            </div>
            <div class="button-img">

                <div class="store nav_div"><a href="news.php"><img src="<?php echo($nav_store_icon); ?>" alt="srv_logo" id="storelightdark" class="nav_img"><img src="<?php echo($nav_store_icon_hover); ?>" class="img-store nav_img" alt="srv_logo"></a></div>

            </div>
        </div>
    </div>
    <div class="options nav_div">

        <a><img src="<?php echo($nav_options_icon); ?>" alt="srv_logo" id="optionslightdark" class="nav_img"><img src="<?php echo($nav_options_icon_hover); ?>" class="img-options nav_img" alt="srv_logo" id="optionshover"></a>

        <div class="options-dropdown-content nav_div">
            <a href="<?php echo $login_src; ?>">
                <?php
                if (isset($_SESSION['loggedin'])) {
                    echo $_SESSION['user_username'];
                } else {
                    echo "Login";
                }
                ?>
            </a>
            <a href="#">Hr/En</a>
            <a href="#" id="lightdarkmode">Light/Dark</a>
        </div>

    </div>
    <script src="scripts/navigation.js"></script>
</header>