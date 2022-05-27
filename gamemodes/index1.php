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
    <link href="../styles/back_to_top.css" rel="stylesheet" type="text/css" />
    <link href="../styles/dark_mode.css" rel="stylesheet" type="text/css" />
    <link href="../styles/footer.css" rel="stylesheet" type="text/css" />
    <link href="../styles/navigation.css" rel="stylesheet" type="text/css" />
</head>



<body>
    <!-- Links -->
    <?php
    $directory_level = 1;
    include("../php/links.php");
    ?>

    <!-- Header and Navigation -->
    <?php
    $nav_faq = "../faq";
    $nav_home = "../";
    $nav_info = "../info";
    $nav_gamemodes = "";
    $nav_news = "../news";
    $nav_store = "../store";

    include("../php/navigation.php");
    ?>



    <!-- CONTENT -->
    <div class="content">

        <!-- MAIN -->
        <div class="main">

            <!-- Section -->
            <div class="section" id="section-survival">
                <img alt="Banner image" class="section" id="section_banner-survival" src="../images/Survival Spawn - 1.png" />
                <div class="inner_section" id="inner_section-survival">

                    <a class="title" href="survival" id="serverlinks">
                        <h1 class="title" id="title-survival">
                            <b> Survival </b>
                        </h1>
                    </a>

                    <div class="section_line" id="section_line-survival"> </div>

                    <div class="description" id="description-survival">
                        One of the main game modes in Minecraft.
                        <br>
                        A peaceful singleplayer/multiplayer game mode where players must collect resources, build bases, battle mobs, eat, and explore the world in an effort to thrive and survive.
                    </div>

                </div>
            </div>

            <!-- Section -->
            <div class="section" id="section-factions">
                <img alt="Banner image" class="section" id="section_banner-factions" src="../images/Factions Spawn - 1.png" />
                <div class="inner_section" id="inner_section-factions">

                    <a class="title" href="factions" id="serverlinks">
                        <h1 class="title" id="title-factions">
                            <b> Factions </b>
                        </h1>
                    </a>

                    <div class="section_line" id="section_line-factions"> </div>

                    <div class="description" id="description-factions">
                        A competitive PvP game mode that lets players team up by joining different factions. Players within the same faction work together to gather resources, build bases, protect their land, recruit new members and raid other factions.
                    </div>

                </div>
            </div>

            <!-- Section -->
            <div class="section" id="section-skyblock">
                <img alt="Banner image" class="section" id="section_banner-skyblock" src="../images/SkyBlock Spawn - 1.png" />
                <div class="inner_section" id="inner_section-skyblock">

                    <a class="title" href="skyblock" id="serverlinks">
                        <h1 class="title" id="title-skyblock">
                            <b> SkyBlock </b>
                        </h1>
                    </a>

                    <div class="section_line" id="section_line-skyblock"> </div>

                    <div class="description" id="description-skyblock">
                        A peaceful singleplayer/multiplayer game mode where players spawn on a floating
                        <br>
                        island and must survive and complete challenges with the resources available.
                    </div>

                </div>
            </div>

            <!-- Section -->
            <div class="section" id="section-prison">
                <img alt="Banner image" class="section" id="section_banner-prison" src="../images/Prison Spawn - 1.png" />
                <div class="inner_section" id="inner_section-prison">

                    <a class="title" href="prison" id="serverlinks">
                        <h1 class="title" id="title-prison">
                            <b> Prison </b>
                        </h1>
                    </a>

                    <div class="section_line" id="section_line-prison"> </div>

                    <div class="description" id="description-prison">
                        A peaceful singleplayer/multiplayer game mode where players work hard in mines
                        <br>
                        as prisoners to progress through ranks and obtain freedom. As the ranking gets
                        <br>
                        higher, mining gets harder.
                    </div>

                </div>
            </div>

            <!-- Section -->
            <div class="section" id="section-creative">
                <img alt="Banner image" class="section" id="section_banner-creative" src="../images/Creative - 1.png" />
                <div class="inner_section" id="inner_section-creative">

                    <a class="title" href="creative" id="serverlinks">
                        <h1 class="title" id="title-creative">
                            <b> Creative </b>
                        </h1>
                    </a>

                    <div class="section_line" id="section_line-creative"> </div>

                    <div class="description" id="description-creative">
                        A peaceful singleplayer/multiplayer game mode where players have access to all
                        <br>
                        blocks and items in the game. Players can build what they want and show off
                        <br>
                        their builds to others.
                    </div>

                </div>
            </div>

            <!-- Section -->
            <div class="section" id="section-minigames">
                <img alt="Banner image" class="section" id="section_banner-minigames" src="../images/Minigames Lobby - 1.png" />
                <div class="inner_section" id="inner_section-minigames">

                    <a class="title" href="minigames" id="serverlinks">
                        <h1 class="title" id="title-minigames">
                            <b> Minigames </b>
                        </h1>
                    </a>

                    <div class="section_line" id="section_line-minigames"> </div>

                    <div class="description" id="description-minigames">
                        <b> Minigames </b> is a mix of many different smaller game modes.
                        <br>
                        Every minigame has its own unique gameplay.
                    </div>

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
    include("../php/back_to_top.php");
    ?>
</body>

</html>