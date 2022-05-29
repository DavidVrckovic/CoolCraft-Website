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
    <nav class="nav left">
        <a href="<?php echo ($nav_home); ?>">
            <img alt="Server icon" class="logo nav_img" src="<?php echo ($header_image); ?>" />
        </a>
    </nav>

    <nav class="nav center">
        <div class="nav_links">

            <div class="button-img">
                <div class="nav home">
                    <a href="<?php echo ($nav_home); ?>">
                        <img alt="Home icon" class="nav_img" id="homelightdark" src="<?php echo ($nav_home_icon); ?>" />
                        <img alt="Home icon" class="img-home nav_img" src="<?php echo ($nav_home_icon_hover); ?>" title="Home" />
                    </a>
                </div>
            </div>

            <div class="button-img">
                <div class="nav info">
                    <a href="<?php echo ($nav_info); ?>">
                        <img alt="Info icon" class="nav_img" id="infolightdark" src="<?php echo ($nav_info_icon); ?>" />
                        <img alt="Info icon" class="img-info nav_img" src="<?php echo ($nav_info_icon_hover); ?>" title="Info" />
                    </a>
                </div>
            </div>

            <div class="button-img">
                <div class="nav gamemodes">
                    <a href="<?php echo ($nav_gamemodes); ?>">
                        <img alt="Gamemodes icon" class="nav_img" id="gamemodeslightdark" src="<?php echo ($nav_gamemodes_icon); ?>" />
                        <img alt="Gamemodes icon" class="img-gamemodes nav_img" src="<?php echo ($nav_gamemodes_icon_hover); ?>" title="Game modes" />
                    </a>
                </div>
            </div>

            <div class="button-img">
                <div class="nav news">
                    <a href="<?php echo ($nav_news); ?>">
                        <img alt="News icon" class="nav_img" id="newslightdark" src="<?php echo ($nav_news_icon); ?>" />
                        <img alt="News icon" class="img-news nav_img" src="<?php echo ($nav_news_icon_hover); ?>" title="News" />
                    </a>
                </div>
            </div>

            <div class="button-img">
                <div class="nav faq">
                    <a href="<?php echo ($nav_faq); ?>">
                        <img alt="FAQ icon" class="nav_img" id="faqlightdark" src="<?php echo ($nav_faq_icon); ?>" />
                        <img alt="FAQ icon" class="img-faq nav_img" src="<?php echo ($nav_faq_icon_hover); ?>" title="FAQ" />
                    </a>
                </div>
            </div>

            <div class="button-img">
                <div class="nav store">
                    <a href="<?php echo ($nav_store); ?>">
                        <img alt="Store icon" class="nav_img" id="storelightdark" src="<?php echo ($nav_store_icon); ?>" />
                        <img alt="Store icon" class="img-store nav_img" src="<?php echo ($nav_store_icon_hover); ?>" title="Store" />
                    </a>
                </div>
            </div>

        </div>
    </nav>

    <div class="nav options">
        <a>
            <img alt="Options icon" class="nav_img" id="optionslightdark" src="<?php echo ($nav_options_icon); ?>" />
            <img alt="Options icon" class="img-options nav_img" id="optionshover" src="<?php echo ($nav_options_icon_hover); ?>" />
        </a>

        <div class="nav options-dropdown-content">
            
            <?php
            if (isset($_SESSION['loggedin'])) {
                echo '<a href="' . $nav_account . '">'
                . $_SESSION['user_username']
                . '</a>';
            }
            ?>

            <a href="<?php echo $nav_auth; ?>">
                <?php
                if (isset($_SESSION['loggedin'])) {
                    echo "Logout";
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