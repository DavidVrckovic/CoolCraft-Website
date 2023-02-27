<?php
// Determine the prefix for file locations
if ($directory_level == 0) {
    $directory_prefix = "";
} else if ($directory_level == 1) {
    $directory_prefix = "../";
} else if ($directory_level == 2) {
    $directory_prefix = "../../";
} else if ($directory_level == 3) {
    $directory_prefix = "../../../";
} else if ($directory_level == 4) {
    $directory_prefix = "../../../../";
}



// Title & Favicon
$favicon_image = $directory_prefix . "images/icons/coolcraft_icon.png";

// CSS files
$authentication_css = $directory_prefix . "styles/authentication.css";
$back_to_top_css = $directory_prefix . "styles/back_to_top.css";
$footer_css = $directory_prefix . "styles/footer.css";
$index_css = $directory_prefix . "styles/index.css";
$navigation_css = $directory_prefix . "styles/navigation.css";



// Header & Navigation
$header_image = $directory_prefix . "images/icons/coolcraft_icon.png";

$nav_faq = $directory_prefix . "faq";
$nav_faq_icon = $directory_prefix . "images/navigation/faq_icon_black.png";
$nav_faq_icon_gold = $directory_prefix . "images/navigation/faq_icon_gold.png";
$nav_faq_icon_white = $directory_prefix . "images/navigation/faq_icon_white.png";

$nav_gamemodes = $directory_prefix . "gamemodes";
$nav_gamemodes_icon = $directory_prefix . "images/navigation/gamemodes_icon_black.png";
$nav_gamemodes_icon_gold = $directory_prefix . "images/navigation/gamemodes_icon_gold.png";
$nav_gamemodes_icon_white = $directory_prefix . "images/navigation/gamemodes_icon_white.png";

$nav_home = $directory_prefix . "";
$nav_home_icon = $directory_prefix . "images/navigation/home_icon_black.png";
$nav_home_icon_gold = $directory_prefix . "images/navigation/home_icon_gold.png";
$nav_home_icon_white = $directory_prefix . "images/navigation/home_icon_white.png";

$nav_info = $directory_prefix . "info";
$nav_info_icon = $directory_prefix . "images/navigation/info_icon_black.png";
$nav_info_icon_gold = $directory_prefix . "images/navigation/info_icon_gold.png";
$nav_info_icon_white = $directory_prefix . "images/navigation/info_icon_white.png";

$nav_news = $directory_prefix . "news";
$nav_news_icon = $directory_prefix . "images/navigation/news_icon_black.png";
$nav_news_icon_gold = $directory_prefix . "images/navigation/news_icon_gold.png";
$nav_news_icon_white = $directory_prefix . "images/navigation/news_icon_white.png";

$nav_options = $directory_prefix . "options";
$nav_options_icon = $directory_prefix . "images/navigation/options_icon_black.png";
$nav_options_icon_gold = $directory_prefix . "images/navigation/options_icon_gold.png";
$nav_options_icon_white = $directory_prefix . "images/navigation/options_icon_white.png";

$nav_store = $directory_prefix . "store";
$nav_store_icon = $directory_prefix . "images/navigation/store_icon_black.png";
$nav_store_icon_gold = $directory_prefix . "images/navigation/store_icon_gold.png";
$nav_store_icon_white = $directory_prefix . "images/navigation/store_icon_white.png";



// Options dropdown menu
if (!isset($_SESSION['loggedin']) && !isset($_COOKIE['login'])) {
    $nav_auth = $directory_prefix . "login";
} else {
    $nav_auth = $directory_prefix . "logout";
    $nav_account = $directory_prefix . "account";
}



// Navigation Script
$nav_script = $directory_prefix . "scripts/navigation.js";

echo "
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
$back_to_top_image = $directory_prefix . "images/Back to top/Back to top - White.png";
$back_to_top_script = $directory_prefix . "scripts/back_to_top.js";



// Copy to clipboard
$copy_to_clipboard_script = "scripts/copy_to_clipboard.js";
?>