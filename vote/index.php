<?php
// Start the session
session_start();

// Links
$directory_level = 1;
include("../php/links.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">

    <!-- Title and Favicon -->
    <title> CoolCraft | Vote for us </title>
    <link href="../images/icons/coolcraft_icon.png" rel="icon" type="image/png" />

    <!-- External sources -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>

    <!-- General CSS files -->
    <link href="index.css" rel="stylesheet" type="text/css" />
    <link href="../styles/index.css" rel="stylesheet" type="text/css" />
    <link href="../styles/content-sidebar.css" rel="stylesheet" type="text/css" />

    <!-- Specific CSS files -->
    <link href="../styles/back_to_top.css" rel="stylesheet" type="text/css" />
    <link href="../styles/dark_mode.css" rel="stylesheet" type="text/css" />
    <link href="../styles/footer.css" rel="stylesheet" type="text/css" />
    <link href="../styles/navigation.css" rel="stylesheet" type="text/css" />
</head>



<body>
    <!-- Header and Navigation -->
    <?php
    $nav_faq = "../faq";
    $nav_home = "../";
    $nav_info = "";
    $nav_gamemodes = "../gamemodes";
    $nav_news = "../news";
    $nav_store = "../store";

    include("../php/navigation.php");
    ?>



    <!-- Section -->
    <div class="section" id="section-introduction">
        <img alt="Banner image" class="section" id="section_banner-introduction" src="../images/Hub Lobby - 4.png" />
        <div class="inner_section" id="inner_section-introduction">

            <h1 class="title" id="title-introduction">
                Vote for the CoolCraft Network
            </h1>

        </div>
    </div>

    <!-- CONTENT -->
    <div class="content">

        <!-- MAIN -->
        <div class="main">

            <h1 class="main_title" id="main_title-general_info">
                Voting links
            </h1>

            <div class="main_title_line" id="main_title_line-general_info"> </div>

            <div class="main_text" id="main_text-general_info">
                <a href="https://minecraftservers.org/vote/562711" target="_blank">
                    Minecraft Servers
                </a>
                <br>
                <a href="https://www.planetminecraft.com/server/coolcraft-4438963/vote" target="_blank">
                    Planet Minecraft
                </a>
                <br>
                <a href="https://minecraft-mp.com/server/238693/vote" target="_blank">
                    Minecraft Multiplayer
                </a>
                <br>
                <a href="https://topg.org/Minecraft/in-589285" target="_blank">
                    TopG
                </a>
                <br>
                <a href="https://www.trackyserver.com/server/coolcraft-601359" target="_blank">
                    TrackyServer
                </a>
                <br>
                <a href="https://topminecraftservers.org/vote/13514" target="_blank">
                    Top Minecraft Servers
                </a>
                <br>
                <a href="https://minecraft-server-list.com/server/448957/vote" target="_blank">
                    Minecraft Server List
                </a>
                <br>
                <a href="https://minecraft-server.net/vote/Davy" target="_blank">
                    Minecraft Server
                </a>
                <br>
                <a href="https://topmcservers.com/server/547/vote" target="_blank">
                    Top Minecraft Servers
                </a>
                <br>
                <a href="https://mc-lists.org/server-coolcraft.1119/vote" target="_blank">
                    MC-Lists
                </a>
                <br>
            </div>

        </div>

        <!-- SIDEBAR -->
        <div class="sidebar">

            <?php
            include("../php/sidebar.php");
            ?>

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