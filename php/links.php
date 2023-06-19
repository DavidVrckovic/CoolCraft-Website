<?php
// Start the session
session_start();

// Check if a user is not logged in within the session
if (!isset($_SESSION["loggedin"])) {

    // Check if a user is logged in locally (if a cookie is set)
    if (isset($_COOKIE["loggedin"])) {

        // Update the session with the local data (cookies)
        session_regenerate_id();
        $_SESSION["loggedin"] = TRUE;
        $_SESSION["user_id"] = $_COOKIE["user_id"];
        $_SESSION["user_username"] = $_COOKIE["user_username"];
        $_SESSION["user_email"] = $_COOKIE["user_email"];
        $_SESSION["user_lastlogin"] = $_COOKIE["user_lastlogin"];
        $_SESSION["user_regdate"] = $_COOKIE["user_regdate"];
        $_SESSION["user_password"] = $_COOKIE["user_password"];
        $_SESSION["user_uuid"] = $_COOKIE["user_uuid"];
    }
}



// Title & Favicon
$favicon_image = $directory_prefix . "Images/Icons/CoolCraft icon.png";

// CSS files
$animations_css = $directory_prefix . "Styles/animations.css";
$auth_css = $directory_prefix . "Styles/auth.css";
$back_to_top_css = $directory_prefix . "Styles/back_to_top.css";
$footer_css = $directory_prefix . "Styles/footer.css";
$index_css = $directory_prefix . "Styles/index.css";
$navigation_css = $directory_prefix . "Styles/navigation.css";
$theme_css = $directory_prefix . "Styles/theme.css";

$coolcraft_css = $directory_prefix . "Styles/coolcraft.css";



// Header & Navigation
$header_image = $directory_prefix . "Images/Icons/CoolCraft icon.png";

$nav_faq = $directory_prefix . "faq";
$nav_faq_icon = $directory_prefix . "Images/Navigation/faq_icon_black.png";
$nav_faq_icon_black = $directory_prefix . "Images/Navigation/faq_icon_black.png";
$nav_faq_icon_gold = $directory_prefix . "Images/Navigation/faq_icon_gold.png";
$nav_faq_icon_white = $directory_prefix . "Images/Navigation/faq_icon_white.png";

$nav_gamemodes = $directory_prefix . "gamemodes";
$nav_gamemodes_icon = $directory_prefix . "Images/Navigation/gamemodes_icon_black.png";
$nav_gamemodes_icon_black = $directory_prefix . "Images/Navigation/gamemodes_icon_black.png";
$nav_gamemodes_icon_gold = $directory_prefix . "Images/Navigation/gamemodes_icon_gold.png";
$nav_gamemodes_icon_white = $directory_prefix . "Images/Navigation/gamemodes_icon_white.png";

$nav_home = $directory_prefix . "";
$nav_home_icon = $directory_prefix . "Images/Navigation/home_icon_black.png";
$nav_home_icon_black = $directory_prefix . "Images/Navigation/home_icon_black.png";
$nav_home_icon_gold = $directory_prefix . "Images/Navigation/home_icon_gold.png";
$nav_home_icon_white = $directory_prefix . "Images/Navigation/home_icon_white.png";

$nav_info = $directory_prefix . "info";
$nav_info_icon = $directory_prefix . "Images/Navigation/info_icon_black.png";
$nav_info_icon_black = $directory_prefix . "Images/Navigation/info_icon_black.png";
$nav_info_icon_gold = $directory_prefix . "Images/Navigation/info_icon_gold.png";
$nav_info_icon_white = $directory_prefix . "Images/Navigation/info_icon_white.png";

$nav_news = $directory_prefix . "news";
$nav_news_icon = $directory_prefix . "Images/Navigation/news_icon_black.png";
$nav_news_icon_black = $directory_prefix . "Images/Navigation/news_icon_black.png";
$nav_news_icon_gold = $directory_prefix . "Images/Navigation/news_icon_gold.png";
$nav_news_icon_white = $directory_prefix . "Images/Navigation/news_icon_white.png";

$nav_options = $directory_prefix . "options";
$nav_options_icon = $directory_prefix . "Images/Navigation/options_icon_black.png";
$nav_options_icon_black = $directory_prefix . "Images/Navigation/options_icon_black.png";
$nav_options_icon_gold = $directory_prefix . "Images/Navigation/options_icon_gold.png";
$nav_options_icon_white = $directory_prefix . "Images/Navigation/options_icon_white.png";

$nav_store = $directory_prefix . "store";
$nav_store_icon = $directory_prefix . "Images/Navigation/store_icon_black.png";
$nav_store_icon_black = $directory_prefix . "Images/Navigation/store_icon_black.png";
$nav_store_icon_gold = $directory_prefix . "Images/Navigation/store_icon_gold.png";
$nav_store_icon_white = $directory_prefix . "Images/Navigation/store_icon_white.png";

$nav_apply = $directory_prefix . "apply";



// Options dropdown menu
if (!isset($_SESSION["loggedin"], $_COOKIE["loggedin"])) {
    $nav_auth = $directory_prefix . "login";
} else {
    $nav_auth = $directory_prefix . "logout";
    $nav_account = $directory_prefix . "account";
}



// Navigation Script
$nav_script = $directory_prefix . "Scripts/navigation.js";

$nav_icons = "
    <script>
        var nav_faq_icon = '$nav_faq_icon';
        var nav_gamemodes_icon = '$nav_gamemodes_icon';
        var nav_home_icon = '$nav_home_icon';
        var nav_info_icon = '$nav_info_icon';
        var nav_news_icon = '$nav_news_icon';
        var nav_options_icon = '$nav_options_icon';
        var nav_store_icon = '$nav_store_icon';

        var nav_faq_icon_darkmode = '$nav_faq_icon_white';
        var nav_gamemodes_icon_darkmode = '$nav_gamemodes_icon_white';
        var nav_home_icon_darkmode = '$nav_home_icon_white';
        var nav_info_icon_darkmode = '$nav_info_icon_white';
        var nav_news_icon_darkmode = '$nav_news_icon_white';
        var nav_options_icon_darkmode = '$nav_options_icon_white';
        var nav_store_icon_darkmode = '$nav_store_icon_white';
    </script>
";



// Back to top
$back_to_top_image = $directory_prefix . "Images/Back to top/Back to top - White.png";
$back_to_top_script = $directory_prefix . "Scripts/back_to_top.js";
?>