<?php
// Start the session
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">

    <!-- Title and Favicon -->
    <title> CoolCraft | Game modes </title>
    <link href="../images/icons/coolcraft_icon.png" rel="icon" type="image/png" />

    <!-- External sources -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>

    <!-- General CSS files -->
    <link href="index.css" rel="stylesheet" type="text/css" />
    <link href="../styles/index.css" rel="stylesheet" type="text/css" />
    <link href="../styles/content.css" rel="stylesheet" type="text/css" />

    <!-- Specific CSS files -->
    <link href="../styles/back-to-top.css" rel="stylesheet" type="text/css" />
    <link href="../styles/dark_mode.css" rel="stylesheet" type="text/css" />
    <link href="../styles/footer.css" rel="stylesheet" type="text/css" />
    <link href="../styles/navigation.css" rel="stylesheet" type="text/css" />
</head>



<body>
    <!-- Scripts -->
    <!--<script src="../scripts/script.js"></script>-->

    <!-- Header and Navigation -->
    <?php
    $header_image = "../images/icons/coolcraft_icon.png";

    $nav_faq = "../faq";
    $nav_home = "../";
    $nav_info = "../info";
    $nav_gamemodes = "";
    $nav_news = "../news";
    $nav_store = "../store";

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

    //code for login

    $nav_script = "../scripts/navigation.js";

    include("../php/navigation.php");
    ?>



    <!-- CONTENT Banner -->
    <div class="section" id="section-introduction">
        <img alt="Banner image" class="section" id="section_banner-introduction" src="../images/hub_5.png" />
        <div class="inner_section" id="inner_section-introduction">
        </div>
    </div>

    <!-- CONTENT -->
    <div class="content">

        <!-- MAIN -->
        <div class="main">

            <h1 class="main_title" id="main_title-gamemodes">
                Game modes
            </h1>

            <div class="main_title_line" id="main_title_line-gamemodes"> </div>

            <div class="gamemodes">

                <div class="gamemode" id="gamemode-survival">
                    <a class="gamemode_banner" href="survival">
                        <div class="gamemode_image">
                            <img alt="Game mode banner" class="gamemode_banner" src="../images/factions_spawn.png" />
                            <div class="gamemode_text">
                                Survival
                            </div>
                        </div>
                    </a>
                </div>

                <div class="gamemode" id="gamemode-factions">
                    <a class="gamemode_banner" href="factions">
                        <div class="gamemode_image">
                            <img alt="Game mode banner" class="gamemode_banner" src="../images/factions_spawn.png" />
                            <div class="gamemode_text">
                                Factions
                            </div>
                        </div>
                    </a>
                </div>

                <div class="gamemode" id="gamemode-skyblock">
                    <a class="gamemode_banner" href="skyblock">
                        <div class="gamemode_image">
                            <img alt="Game mode banner" class="gamemode_banner" src="../images/skyblock_spawn.png" />
                            <div class="gamemode_text">
                                SkyBlock
                            </div>
                        </div>
                    </a>
                </div>

                <div class="gamemode" id="gamemode-prison">
                    <a class="gamemode_banner" href="prison">
                        <div class="gamemode_image">
                            <img alt="Game mode banner" class="gamemode_banner" src="../images/prison_spawn.png" />
                            <div class="gamemode_text">
                                Prison
                            </div>
                        </div>
                    </a>
                </div>

                <div class="gamemode" id="gamemode-creative">
                    <a class="gamemode_banner" href="creative">
                        <div class="gamemode_image">
                            <img alt="Game mode banner" class="gamemode_banner" src="../images/factions_spawn.png" />
                            <div class="gamemode_text">
                                Creative
                            </div>
                        </div>
                    </a>
                </div>

                <div class="gamemode" id="gamemode-minigames">
                    <a class="gamemode_banner" href="minigames">
                        <div class="gamemode_image">
                            <img alt="Game mode banner" class="gamemode_banner" src="../images/minigames_lobby.png" />
                            <div class="gamemode_text">
                                Minigames
                            </div>
                        </div>
                    </a>
                </div>

            </div>

        </div>

    </div>



    <!-- Footer -->
    <?php
    include("../php/footer.php");
    ?>

    <!-- Other -->
    <?php
    $footer_image = "../images/icons/back-to-top.png";
    $footer_script = "../scripts/back-to-top.js";

    include("../php/back-to-top.php");
    ?>
</body>

</html>