<?php
if ($directory_level == 0) {
    $header_image = "images/icons/coolcraft_icon.png";

    $nav_faq_icon = "images/navigation/faq_icon_black.png";
    $nav_gamemodes_icon = "images/navigation/gamemodes_icon_black.png";
    $nav_home_icon = "images/navigation/home_icon_black.png";
    $nav_info_icon = "images/navigation/info_icon_black.png";
    $nav_news_icon = "images/navigation/news_icon_black.png";
    $nav_options_icon = "images/navigation/options_icon_black.png";
    $nav_store_icon = "images/navigation/store_icon_black.png";

    $nav_faq_icon_hover = "images/navigation/faq_icon_gold.png";
    $nav_gamemodes_icon_hover = "images/navigation/gamemodes_icon_gold.png";
    $nav_home_icon_hover = "images/navigation/home_icon_gold.png";
    $nav_info_icon_hover = "images/navigation/info_icon_gold.png";
    $nav_news_icon_hover = "images/navigation/news_icon_gold.png";
    $nav_options_icon_hover = "images/navigation/options_icon_gold.png";
    $nav_store_icon_hover = "images/navigation/store_icon_gold.png";

    $nav_faq_icon_darkmode = "images/navigation/faq_icon_white.png";
    $nav_gamemodes_icon_darkmode = "images/navigation/gamemodes_icon_white.png";
    $nav_home_icon_darkmode = "images/navigation/home_icon_white.png";
    $nav_info_icon_darkmode = "images/navigation/info_icon_white.png";
    $nav_news_icon_darkmode = "images/navigation/news_icon_white.png";
    $nav_options_icon_darkmode = "images/navigation/options_icon_white.png";
    $nav_store_icon_darkmode = "images/navigation/store_icon_white.png";

    if (!isset($_SESSION['loggedin']) && !isset($_COOKIE['login'])) {
        $nav_auth = "login.php";
    } else {
        $nav_auth = "logout";
        $nav_account = "account";
    }

    $nav_script = "scripts/navigation.js";

    echo "
    <script>
        var nav_faq_icon = '$nav_faq_icon';
        var nav_gamemodes_icon = '$nav_gamemodes_icon';
        var nav_home_icon = '$nav_home_icon';
        var nav_info_icon = '$nav_info_icon';
        var nav_news_icon = '$nav_news_icon';
        var nav_options_icon = '$nav_options_icon';
        var nav_store_icon = '$nav_store_icon';

        var nav_faq_icon_darkmode = '$nav_faq_icon_darkmode';
        var nav_gamemodes_icon_darkmode = '$nav_gamemodes_icon_darkmode';
        var nav_home_icon_darkmode = '$nav_home_icon_darkmode';
        var nav_info_icon_darkmode = '$nav_info_icon_darkmode';
        var nav_news_icon_darkmode = '$nav_news_icon_darkmode';
        var nav_options_icon_darkmode = '$nav_options_icon_darkmode';
        var nav_store_icon_darkmode = '$nav_store_icon_darkmode';
    </script>
    ";

    $backToTop_image = "images/icons/back_to_top.png";
    $backToTop_script = "scripts/back_to_top.js";
} else if ($directory_level == 1) {
    $header_image = "../images/icons/coolcraft_icon.png";

    $nav_faq_icon = "../images/navigation/faq_icon_black.png";
    $nav_gamemodes_icon = "../images/navigation/gamemodes_icon_black.png";
    $nav_home_icon = "../images/navigation/home_icon_black.png";
    $nav_info_icon = "../images/navigation/info_icon_black.png";
    $nav_news_icon = "../images/navigation/news_icon_black.png";
    $nav_options_icon = "../images/navigation/options_icon_black.png";
    $nav_store_icon = "../images/navigation/store_icon_black.png";

    $nav_faq_icon_hover = "../images/navigation/faq_icon_gold.png";
    $nav_gamemodes_icon_hover = "../images/navigation/gamemodes_icon_gold.png";
    $nav_home_icon_hover = "../images/navigation/home_icon_gold.png";
    $nav_info_icon_hover = "../images/navigation/info_icon_gold.png";
    $nav_news_icon_hover = "../images/navigation/news_icon_gold.png";
    $nav_options_icon_hover = "../images/navigation/options_icon_gold.png";
    $nav_store_icon_hover = "../images/navigation/store_icon_gold.png";

    $nav_faq_icon_darkmode = "../images/navigation/faq_icon_white.png";
    $nav_gamemodes_icon_darkmode = "../images/navigation/gamemodes_icon_white.png";
    $nav_home_icon_darkmode = "../images/navigation/home_icon_white.png";
    $nav_info_icon_darkmode = "../images/navigation/info_icon_white.png";
    $nav_news_icon_darkmode = "../images/navigation/news_icon_white.png";
    $nav_options_icon_darkmode = "../images/navigation/options_icon_white.png";
    $nav_store_icon_darkmode = "../images/navigation/store_icon_white.png";

    if (!isset($_SESSION['loggedin']) && !isset($_COOKIE['login'])) {
        $nav_auth = "../login.php";
    } else {
        $nav_auth = "../logout";
        $nav_account = "../account";
    }

    $nav_script = "../scripts/navigation.js";

    echo "
    <script>
        var nav_faq_icon = '$nav_faq_icon';
        var nav_gamemodes_icon = '$nav_gamemodes_icon';
        var nav_home_icon = '$nav_home_icon';
        var nav_info_icon = '$nav_info_icon';
        var nav_news_icon = '$nav_news_icon';
        var nav_options_icon = '$nav_options_icon';
        var nav_store_icon = '$nav_store_icon';

        var nav_faq_icon_darkmode = '$nav_faq_icon_darkmode';
        var nav_gamemodes_icon_darkmode = '$nav_gamemodes_icon_darkmode';
        var nav_home_icon_darkmode = '$nav_home_icon_darkmode';
        var nav_info_icon_darkmode = '$nav_info_icon_darkmode';
        var nav_news_icon_darkmode = '$nav_news_icon_darkmode';
        var nav_options_icon_darkmode = '$nav_options_icon_darkmode';
        var nav_store_icon_darkmode = '$nav_store_icon_darkmode';
    </script>
    ";

    $backToTop_image = "../images/icons/back_to_top.png";
    $backToTop_script = "../scripts/back_to_top.js";
} else if ($directory_level == 2) {
    $header_image = "../../images/icons/coolcraft_icon.png";

    $nav_faq_icon = "../../images/navigation/faq_icon_black.png";
    $nav_gamemodes_icon = "../../images/navigation/gamemodes_icon_black.png";
    $nav_home_icon = "../../images/navigation/home_icon_black.png";
    $nav_info_icon = "../../images/navigation/info_icon_black.png";
    $nav_news_icon = "../../images/navigation/news_icon_black.png";
    $nav_options_icon = "../../images/navigation/options_icon_black.png";
    $nav_store_icon = "../../images/navigation/store_icon_black.png";

    $nav_faq_icon_hover = "../../images/navigation/faq_icon_gold.png";
    $nav_gamemodes_icon_hover = "../../images/navigation/gamemodes_icon_gold.png";
    $nav_home_icon_hover = "../../images/navigation/home_icon_gold.png";
    $nav_info_icon_hover = "../../images/navigation/info_icon_gold.png";
    $nav_news_icon_hover = "../../images/navigation/news_icon_gold.png";
    $nav_options_icon_hover = "../../images/navigation/options_icon_gold.png";
    $nav_store_icon_hover = "../../images/navigation/store_icon_gold.png";

    $nav_faq_icon_darkmode = "../../images/navigation/faq_icon_white.png";
    $nav_gamemodes_icon_darkmode = "../../images/navigation/gamemodes_icon_white.png";
    $nav_home_icon_darkmode = "../../images/navigation/home_icon_white.png";
    $nav_info_icon_darkmode = "../../images/navigation/info_icon_white.png";
    $nav_news_icon_darkmode = "../../images/navigation/news_icon_white.png";
    $nav_options_icon_darkmode = "../../images/navigation/options_icon_white.png";
    $nav_store_icon_darkmode = "../../images/navigation/store_icon_white.png";

    if (!isset($_SESSION['loggedin']) && !isset($_COOKIE['login'])) {
        $nav_auth = "../../login.php";
    } else {
        $nav_auth = "../../logout";
        $nav_account = "../../account";
    }

    $nav_script = "../../scripts/navigation.js";

    echo "
    <script>
        var nav_faq_icon = '$nav_faq_icon';
        var nav_gamemodes_icon = '$nav_gamemodes_icon';
        var nav_home_icon = '$nav_home_icon';
        var nav_info_icon = '$nav_info_icon';
        var nav_news_icon = '$nav_news_icon';
        var nav_options_icon = '$nav_options_icon';
        var nav_store_icon = '$nav_store_icon';

        var nav_faq_icon_darkmode = '$nav_faq_icon_darkmode';
        var nav_gamemodes_icon_darkmode = '$nav_gamemodes_icon_darkmode';
        var nav_home_icon_darkmode = '$nav_home_icon_darkmode';
        var nav_info_icon_darkmode = '$nav_info_icon_darkmode';
        var nav_news_icon_darkmode = '$nav_news_icon_darkmode';
        var nav_options_icon_darkmode = '$nav_options_icon_darkmode';
        var nav_store_icon_darkmode = '$nav_store_icon_darkmode';
    </script>
    ";

    $backToTop_image = "../../images/icons/back_to_top.png";
    $backToTop_script = "../../scripts/back_to_top.js";
}
?>
