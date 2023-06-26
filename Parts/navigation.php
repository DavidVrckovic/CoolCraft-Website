<?php
echo $nav_icons;
?>


<header>

    <!-- Left Navigation -->
    <nav class="logo" id="nav_logo">

        <!-- Navigation link -->
        <a class="nav_link" href="<?php echo ($nav_home); ?>" id="nav_logo_link">

            <!-- Navigation link icon -->
            <img alt="Home" class="nav_link" id="nav_logo_img" src="<?php echo ($header_image); ?>">

        </a>

        <!-- Navigation link -->
        <a class="nav_link" id="nav_menu_link">

            <!-- Navigation link icon -->
            <img alt="Menu" class="nav_link" id="nav_menu_img" src="<?php echo ($nav_menu_icon); ?>">

        </a>

        <!-- Navigation dialog -->
        <dialog class="menu" id="nav_menu_dialog">

            <!-- Navigation link -->
            <a class="dropdown_link" href="<?php echo ($nav_home); ?>" id="nav_menu_home_link">
                Home
            </a>

            <!-- Navigation link -->
            <a class="dropdown_link" href="<?php echo ($nav_info); ?>" id="nav_menu_info_link">
                Info
            </a>

            <!-- Navigation link -->
            <a class="dropdown_link" href="<?php echo ($nav_gamemodes); ?>" id="nav_menu_gamemodes_link">
                Gamemodes
            </a>

            <!-- Navigation link -->
            <a class="dropdown_link" href="<?php echo ($nav_news); ?>" id="nav_menu_news_link">
                News
            </a>

            <!-- Navigation link -->
            <a class="dropdown_link" href="<?php echo ($nav_faq); ?>" id="nav_menu_faq_link">
                FAQ
            </a>

            <!-- Navigation link -->
            <a class="dropdown_link" href="<?php echo ($nav_store); ?>" id="nav_menu_store_link">
                Store
            </a>

        </dialog>

    </nav>

    <!-- Center Navigation -->
    <nav class="links" id="nav_links">

        <!-- Navigation link -->
        <a class="nav_link has_2_img" href="<?php echo ($nav_home); ?>" id="nav_home_link">

            <!-- Navigation link icons -->
            <img alt="Home" class="nav_link" id="nav_home_img" src="<?php echo ($nav_home_icon); ?>">
            <img alt="Home" class="nav_link is_hover" id="nav_home_img_hover" src="<?php echo ($nav_home_icon_gold); ?>" title="Home">

        </a>

        <!-- Navigation link -->
        <a class="nav_link has_2_img" href="<?php echo ($nav_info); ?>" id="nav_info_link">

            <!-- Navigation link icons -->
            <img alt="Info" class="nav_link" id="nav_info_img" src="<?php echo ($nav_info_icon); ?>">
            <img alt="Info" class="nav_link is_hover" id="nav_info_img_hover" src="<?php echo ($nav_info_icon_gold); ?>" title="Info">

        </a>

        <!-- Navigation link -->
        <a class="nav_link has_2_img" href="<?php echo ($nav_gamemodes); ?>" id="nav_gamemodes_link">

            <!-- Navigation link icons -->
            <img alt="Gamemodes" class="nav_link" id="nav_gamemodes_img" src="<?php echo ($nav_gamemodes_icon); ?>">
            <img alt="Gamemodes" class="nav_link is_hover" id="nav_gamemodes_img_hover" src="<?php echo ($nav_gamemodes_icon_gold); ?>" title="Game modes">

        </a>

        <!-- Navigation link -->
        <a class="nav_link has_2_img" href="<?php echo ($nav_news); ?>" id="nav_news_link">

            <!-- Navigation link icons -->
            <img alt="News" class="nav_link" id="nav_news_img" src="<?php echo ($nav_news_icon); ?>">
            <img alt="News" class="nav_link is_hover" id="nav_news_img_hover" src="<?php echo ($nav_news_icon_gold); ?>" title="News">

        </a>

        <!-- Navigation link -->
        <a class="nav_link has_2_img" href="<?php echo ($nav_faq); ?>" id="nav_faq_link">

            <!-- Navigation link icons -->
            <img alt="FAQ" class="nav_link" id="nav_faq_img" src="<?php echo ($nav_faq_icon); ?>">
            <img alt="FAQ" class="nav_link is_hover" id="nav_faq_img_hover" src="<?php echo ($nav_faq_icon_gold); ?>" title="FAQ">

        </a>

        <!-- Navigation link -->
        <a class="nav_link has_2_img" href="<?php echo ($nav_store); ?>" id="nav_store_link">

            <!-- Navigation link icons -->
            <img alt="Store" class="nav_link" id="nav_store_img" src="<?php echo ($nav_store_icon); ?>">
            <img alt="Store" class="nav_link is_hover" id="nav_store_img_hover" src="<?php echo ($nav_store_icon_gold); ?>" title="Store">

        </a>

    </nav>

    <!-- Right Navigation -->
    <nav class="options" id="nav_options">

        <!-- Navigation link -->
        <a class="nav_link has_2_img" id="nav_options_link">

            <!-- Navigation link icons -->
            <img alt="Options" class="nav_link" id="nav_options_img" src="<?php echo ($nav_options_icon); ?>">
            <img alt="Options" class="nav_link is_hover" id="nav_options_img_hover" src="<?php echo ($nav_options_icon_gold); ?>">

        </a>

        <!-- Navigation dialog -->
        <dialog class="options" id="nav_options_dialog">

            <?php
            if (isset($_SESSION["loggedin"])) {
                echo '
                    <a class="dropdown_link" href="' . $nav_account . '" id="account_options">
                        ' . $_SESSION["user_username"] . '
                    </a>
                ';
            }
            ?>

            <a class="dropdown_link" href="<?php echo $nav_auth; ?>" id="auth_options">
                <?php
                if (isset($_SESSION["loggedin"])) {
                    echo "Logout";
                } else {
                    echo "Login";
                }
                ?>
            </a>

            <!--<a class="dropdown_link" href="" id="language_options">
                Language
            </a>-->

            <a class="dropdown_link" href="" id="theme_options">
                Dark theme
            </a>

        </dialog>

    </nav>

    <!-- Navigation script -->
    <script src="<?php echo ($nav_script); ?>"></script>

</header>