<?php
// Start the session
session_start();

// Links
$directory_level = 2;
include("../../php/links.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">

    <!-- Title and Favicon -->
    <title> CoolCraft | Game modes | Minigames </title>
    <link href="../../images/icons/coolcraft_icon.png" rel="icon" type="image/png" />

    <!-- External sources -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>

    <!-- General CSS files -->
    <link href="../index.css" rel="stylesheet" type="text/css" />
    <link href="../../styles/index.css" rel="stylesheet" type="text/css" />
    <link href="../../styles/content.css" rel="stylesheet" type="text/css" />

    <!-- Specific CSS files -->
    <link href="../../styles/back_to_top.css" rel="stylesheet" type="text/css" />
    <link href="../../styles/dark_mode.css" rel="stylesheet" type="text/css" />
    <link href="../../styles/footer.css" rel="stylesheet" type="text/css" />
    <link href="../../styles/navigation.css" rel="stylesheet" type="text/css" />
</head>



<body>
    <!-- Header and Navigation -->
    <?php
    $nav_faq = "../../faq";
    $nav_home = "../../";
    $nav_info = "../../info";
    $nav_gamemodes = "../";
    $nav_news = "../../news";
    $nav_store = "../../store";

    include("../../php/navigation.php");
    ?>



    <!-- Section -->
    <div class="section" id="section-introduction">
        <img alt="Banner image" class="section" id="section_banner-introduction" src="../../images/Minigames Lobby - 1.png" />
        <div class="inner_section" id="inner_section-introduction">

            <h1 class="title" id="title-introduction">
                Minigames
            </h1>

        </div>
    </div>

    <!-- CONTENT -->
    <div class="content">

        <!-- MAIN -->
        <div class="main">

            <h1 class="main_title" id="main_title-gamemode_info">
                Info
            </h1>

            <div class="main_title_line" id="main_title_line-gamemode_info"> </div>

            <div class="main_text" id="main_text-info">
                <b>Minigames</b> is a mix of many different smaller game modes. Every minigame has its own unique gameplay.
                <br><br>
                <b>BedWars</b> is a competitive PvP minigame where players where you must protect your bed whilst trying to eliminate your opponents on islands in the sky. You can continue to respawn while your bed is safe. If your bed is destroyed, you're on your last life! Use the shop on your island to get better items and win.
                <br><br>
                <b>Duels</b> is a simple competitive PvP minigame where players fight in a 1v1 format.
                <br><br>
                <b>SkyWars</b> is a competitive PvP minigame where players start off on a separate island and try to battle each other. The main goal is to be the last person or team alive to win.
                <br><br>
                <b>TNTRun</b> is a competitive fast-paced minigame where players start on layer of sand and every block that they step on dissapears. If a player falls through all of the layers they loose the game.
                <br><br>
                <b>UHC</b> is a competitive minigame where players fight each other in a randomly generated survival-like world. The main goal is to be the last person or team alive to win.
            </div>

            <h1 class="main_title" id="main_title-gamemode_images">
                Images
            </h1>

            <div class="main_title_line" id="main_title_line-gamemode_images"> </div>

            <div class="gamemodes">
                <div class="gamemode" id="gamemode-survival">
                    <img alt="Game mode banner" class="gamemode_banner" src="../../images/Minigames Lobby - 2.png" />
                </div>

                <div class="gamemode" id="gamemode-survival">
                    <img alt="Game mode banner" class="gamemode_banner" src="../../images/Minigames Lobby - 3.png" />
                </div>

                <div class="gamemode" id="gamemode-survival">
                    <img alt="Game mode banner" class="gamemode_banner" src="../../images/BedWars Lobby - 1.png" />
                </div>

                <div class="gamemode" id="gamemode-survival">
                    <img alt="Game mode banner" class="gamemode_banner" src="../../images/BedWars Lobby - 2.png" />
                </div>

                <div class="gamemode" id="gamemode-survival">
                    <img alt="Game mode banner" class="gamemode_banner" src="../../images/BedWars - Castle Raiders - 1.png" />
                </div>

                <div class="gamemode" id="gamemode-survival">
                    <img alt="Game mode banner" class="gamemode_banner" src="../../images/Duels Lobby - 1.png" />
                </div>

                <div class="gamemode" id="gamemode-survival">
                    <img alt="Game mode banner" class="gamemode_banner" src="../../images/Duels Lobby - 2.png" />
                </div>

                <div class="gamemode" id="gamemode-survival">
                    <img alt="Game mode banner" class="gamemode_banner" src="../../images/Duels - Sumo - 1.png" />
                </div>

                <div class="gamemode" id="gamemode-survival">
                    <img alt="Game mode banner" class="gamemode_banner" src="../../images/Duels - Sumo - 2.png" />
                </div>

                <div class="gamemode" id="gamemode-survival">
                    <img alt="Game mode banner" class="gamemode_banner" src="../../images/Duels - Sumo2 - 1.png" />
                </div>

                <div class="gamemode" id="gamemode-survival">
                    <img alt="Game mode banner" class="gamemode_banner" src="../../images/Duels - Sumo2 - 2.png" />
                </div>

                <div class="gamemode" id="gamemode-survival">
                    <img alt="Game mode banner" class="gamemode_banner" src="../../images/SkyWars Lobby - 1.png" />
                </div>

                <div class="gamemode" id="gamemode-survival">
                    <img alt="Game mode banner" class="gamemode_banner" src="../../images/SkyWars Lobby - 2.png" />
                </div>

                <div class="gamemode" id="gamemode-survival">
                    <img alt="Game mode banner" class="gamemode_banner" src="../../images/SkyWars - Circle of Life - 1.png" />
                </div>

                <div class="gamemode" id="gamemode-survival">
                    <img alt="Game mode banner" class="gamemode_banner" src="../../images/TNTRun Lobby - 1.png" />
                </div>

                <div class="gamemode" id="gamemode-survival">
                    <img alt="Game mode banner" class="gamemode_banner" src="../../images/TNTRun Lobby - 2.png" />
                </div>

                <div class="gamemode" id="gamemode-survival">
                    <img alt="Game mode banner" class="gamemode_banner" src="../../images/TNTRun Lobby - 3.png" />
                </div>

                <div class="gamemode" id="gamemode-survival">
                    <img alt="Game mode banner" class="gamemode_banner" src="../../images/TNTRun - Stone - 1.png" />
                </div>
            </div>
        </div>

    </div>



    <!-- Footer -->
    <?php
    include("../../php/footer.php");
    ?>

    <!-- Other -->
    <?php
    include("../../php/back_to_top.php");
    ?>
</body>

</html>