<!-- OLD NAVIGATION
<div class="header">
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
</nav>
-->

<header>
    <img alt="Server icon" class="logo nav_img" src="<?php echo ($header_image); ?>" />
    <div class="navi">
        <div class="nav_links">

            <div class="button-img">
                <div class="home nav_div">
                    <a href="<?php echo ($nav_home); ?>">
                        <img alt="Home icon" class="nav_img" id="homelightdark" src="<?php echo ($nav_home_icon); ?>" />
                        <img alt="Home icon" class="img-home nav_img" src="<?php echo ($nav_home_icon_hover); ?>" />
                    </a>
                </div>
            </div>

            <div class="button-img">
                <div class="info nav_div">
                    <a href="<?php echo ($nav_info); ?>">
                        <img alt="Info icon" class="nav_img" id="infolightdark" src="<?php echo ($nav_info_icon); ?>" />
                        <img alt="Info icon" class="img-info nav_img" src="<?php echo ($nav_info_icon_hover); ?>" />
                    </a>
                </div>
            </div>

            <div class="button-img">
                <div class="gamemodes nav_div">
                    <a href="<?php echo ($nav_gamemodes); ?>">
                        <img alt="Gamemodes icon" class="nav_img" id="gamemodeslightdark" src="<?php echo ($nav_gamemodes_icon); ?>" />
                        <img alt="Gamemodes icon" class="img-gamemodes nav_img" src="<?php echo ($nav_gamemodes_icon_hover); ?>" />
                    </a>
                </div>
            </div>

            <div class="button-img">
                <div class="news nav_div">
                    <a href="<?php echo ($nav_news); ?>">
                        <img alt="News icon" class="nav_img" id="newslightdark" src="<?php echo ($nav_news_icon); ?>" />
                        <img alt="News icon" class="img-news nav_img" src="<?php echo ($nav_news_icon_hover); ?>" />
                    </a>
                </div>
            </div>

            <div class="button-img">
                <div class="faq nav_div">
                    <a href="<?php echo ($nav_faq); ?>">
                        <img alt="FAQ icon" class="nav_img" id="faqlightdark" src="<?php echo ($nav_faq_icon); ?>" />
                        <img alt="FAQ icon" class="img-faq nav_img" src="<?php echo ($nav_faq_icon_hover); ?>" />
                    </a>
                </div>
            </div>

            <div class="button-img">
                <div class="store nav_div">
                    <a href="<?php echo ($nav_store); ?>">
                        <img alt="Store icon" class="nav_img" id="storelightdark" src="<?php echo ($nav_store_icon); ?>" />
                        <img alt="Store icon" class="img-store nav_img" src="<?php echo ($nav_store_icon_hover); ?>" />
                    </a>
                </div>
            </div>

        </div>
    </div>

    <div class="options nav_div">
        <a>
            <img alt="Options icon" class="nav_img" id="optionslightdark" src="<?php echo ($nav_options_icon); ?>" />
            <img alt="Options icon" class="img-options nav_img" id="optionshover" src="<?php echo ($nav_options_icon_hover); ?>" />
        </a>

        <div class="options-dropdown-content nav_div">

            <a href="<?php echo $nav_login; ?>">
                <?php
                if (isset($_SESSION['loggedin'])) {
                    echo $_SESSION['user_username'];
                } else {
                    echo "Login";
                }
                ?>
            </a>

            <a href="">
                Hr/En
            </a>

            <a href="" id="lightdarkmode">
                Light/Dark
            </a>

        </div>
    </div>

    <script src="<?php echo ($nav_script); ?>"></script>
</header>