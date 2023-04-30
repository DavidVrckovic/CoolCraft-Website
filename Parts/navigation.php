<header>
    <!-- Left Navigation -->
    <nav class="logo">

        <!-- Navigation link -->
        <a class="nav_link" href="<?php echo ($nav_home); ?>">
            <img alt="Home" class="nav_link_img" src="<?php echo ($header_image); ?>">
        </a>

    </nav>

    <!-- Center Navigation -->
    <nav class="links">

        <!-- Navigation link -->
        <a class="nav_link has_2_img" href="<?php echo ($nav_home); ?>">
            <img alt="Home" class="nav_link_img" id="nav_home_img" src="<?php echo ($nav_home_icon); ?>">
            <img alt="Home" class="nav_link_img is_hover" src="<?php echo ($nav_home_icon_gold); ?>" title="Home">
        </a>

        <!-- Navigation link -->
        <a class="nav_link has_2_img" href="<?php echo ($nav_info); ?>">
            <img alt="Info" class="nav_link_img" id="nav_info_img" src="<?php echo ($nav_info_icon); ?>">
            <img alt="Info" class="nav_link_img is_hover" src="<?php echo ($nav_info_icon_gold); ?>" title="Info">
        </a>

        <!-- Navigation link -->
        <a class="nav_link has_2_img" href="<?php echo ($nav_gamemodes); ?>">
            <img alt="Gamemodes" class="nav_link_img" id="nav_gamemodes_img" src="<?php echo ($nav_gamemodes_icon); ?>">
            <img alt="Gamemodes" class="nav_link_img is_hover" src="<?php echo ($nav_gamemodes_icon_gold); ?>" title="Game modes">
        </a>

        <!-- Navigation link -->
        <a class="nav_link has_2_img" href="<?php echo ($nav_news); ?>">
            <img alt="News" class="nav_link_img" id="nav_news_img" src="<?php echo ($nav_news_icon); ?>">
            <img alt="News" class="nav_link_img is_hover" src="<?php echo ($nav_news_icon_gold); ?>" title="News">
        </a>

        <!-- Navigation link -->
        <a class="nav_link has_2_img" href="<?php echo ($nav_faq); ?>">
            <img alt="FAQ" class="nav_link_img" id="nav_faq_img" src="<?php echo ($nav_faq_icon); ?>">
            <img alt="FAQ" class="nav_link_img is_hover" src="<?php echo ($nav_faq_icon_gold); ?>" title="FAQ">
        </a>

        <!-- Navigation link -->
        <a class="nav_link has_2_img" href="<?php echo ($nav_store); ?>">
            <img alt="Store" class="nav_link_img" id="nav_store_img" src="<?php echo ($nav_store_icon); ?>">
            <img alt="Store" class="nav_link_img is_hover" src="<?php echo ($nav_store_icon_gold); ?>" title="Store">
        </a>

    </nav>

    <!-- Right Navigation -->
    <nav class="options" id="nav_options">

        <!-- Navigation link -->
        <a class="nav_link has_2_img">
            <img alt="Options" class="nav_link_img" id="nav_options_img" src="<?php echo ($nav_options_icon); ?>">
            <img alt="Options" class="nav_link_img is_hover" id="nav_options_icon_hover" src="<?php echo ($nav_options_icon_gold); ?>">
        </a>

        <!-- Options Dropdown menu -->
        <div class="options dropdown" id="nav_dropdown">

            <?php
            if (isset($_SESSION['loggedin'])) {
                echo '
                    <a class="dropdown_link" href="' . $nav_account . '">
                        ' . $_SESSION['user_username'] . '
                    </a>
                ';
            }
            ?>

            <a class="dropdown_link" href="<?php echo $nav_auth; ?>">
                <?php
                if (isset($_SESSION['loggedin'])) {
                    echo "Logout";
                } else if (isset($_COOKIE['login'])) {
                    echo "Logout";
                } else {
                    echo "Login";
                }
                ?>
            </a>

            <a class="dropdown_link" href="">
                Hr / En
            </a>

            <a class="dropdown_link" href="" id="lightdarkmode">
                Light / Dark
            </a>

        </div>

    </nav>

    <script src="<?php echo ($nav_script); ?>"></script>
</header>