<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">

    <!-- Title and Favicon -->
    <title> CoolCraft | Game modes </title>
    <link href="../images/icons/coolcraft_icon.png" rel="icon" type="image/png" />

    <!-- General CSS files -->
    <link href="index.css" rel="stylesheet" type="text/css" />
    <link href="../styles/index.css" rel="stylesheet" type="text/css" />
    <link href="../styles/content.css" rel="stylesheet" type="text/css" />

    <!-- Specific CSS files -->
    <link href="../styles/back-to-top.css" rel="stylesheet" type="text/css" />
    <link href="../styles/footer.css" rel="stylesheet" type="text/css" />
    <link href="../styles/navigation.css" rel="stylesheet" type="text/css" />

    <!-- External sources -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
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

    include("../php/navigation.php");
    ?>



    <!-- CONTENT Banner -->
    <div class="section" id="section-introduction">
        <img alt="Banner image" class="section" id="section_banner-introduction" src="../images/pic1.png" />
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
                            <img alt="Game mode banner" class="gamemode_banner" src="../images/pic2.png" />
                            <div class="gamemode_text">
                                Survival
                            </div>
                        </div>
                    </a>
                </div>

                <div class="gamemode" id="gamemode-factions">
                    <a class="gamemode_banner" href="factions">
                        <div class="gamemode_image">
                            <img alt="Game mode banner" class="gamemode_banner" src="../images/pic2.png" />
                            <div class="gamemode_text">
                                Factions
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="gamemode" id="gamemode-skyblock">
                    <a class="gamemode_banner" href="skyblock">
                        <div class="gamemode_image">
                            <img alt="Game mode banner" class="gamemode_banner" src="../images/pic2.png" />
                            <div class="gamemode_text">
                                SkyBlock
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="gamemode" id="gamemode-prison">
                    <a class="gamemode_banner" href="prison">
                        <div class="gamemode_image">
                            <img alt="Game mode banner" class="gamemode_banner" src="../images/pic2.png" />
                            <div class="gamemode_text">
                                Prison
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="gamemode" id="gamemode-creative">
                    <a class="gamemode_banner" href="creative">
                        <div class="gamemode_image">
                            <img alt="Game mode banner" class="gamemode_banner" src="../images/pic2.png" />
                            <div class="gamemode_text">
                                Creative
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="gamemode" id="gamemode-minigames">
                    <a class="gamemode_banner" href="minigames">
                        <div class="gamemode_image">
                            <img alt="Game mode banner" class="gamemode_banner" src="../images/pic2.png" />
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