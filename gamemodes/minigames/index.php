<!DOCTYPE html>



<?php
// Determine the prefix for file locations
$directory_prefix = "../../";

// Include the links file
include($directory_prefix . "php/links.php");
?>



<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="author" content="Davy">
    <meta name="description" content="A website for the Minecraft server network CoolCraft.">
    <meta name="keywords" content="CoolCraft, Cool, Craft, Minecraft, Mine, Server, Network, Web">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title & Favicon -->
    <title> CoolCraft | Minigames </title>
    <link href="<?php echo ($favicon_image); ?>" rel="icon" type="image/png">

    <!-- External sources -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- General CSS files -->
    <link href="<?php echo ($coolcraft_css); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo ($index_css); ?>" rel="stylesheet" type="text/css">

    <!-- Specific CSS files -->
    <link href="<?php echo ($back_to_top_css); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo ($footer_css); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo ($navigation_css); ?>" rel="stylesheet" type="text/css">
</head>



<body>
    <!-- Header & Navigation -->
    <?php
    include($directory_prefix . "Parts/navigation.php");
    ?>



    <!-- MAIN -->
    <main class="cflex">

        <!-- SECTION -->
        <section class="cflex everything_center has_bg_img height_small" id="intro_section">

            <!-- Background image -->
            <img alt="Game modes: Minigames" class="section_bg bg" id="intro_section_bg_img" src="../../images/Minigames Lobby - 1.png">

            <!-- Inner section -->
            <article class="inner cflex everything_center" id="intro_inner">

                <!-- Title -->
                <h1 class="title">
                    Game modes: Minigames
                </h1>

            </article>

        </section>

        <!-- SECTION -->
        <section class="content cflex has_bg_color" id="content_section">

            <!-- Inner section -->
            <article class="general">

                <!-- Title -->
                <h2 class="title">
                    Description
                </h2>

                <!-- Line -->
                <hr class="line width_100">

                <!-- Text -->
                <p class="text">
                    <b>Minigames</b> is a mix of many different smaller game modes. Every minigame has its own unique gameplay.
                </p>

                <!-- Text -->
                <p class="text">
                    <b>BedWars</b> is a competitive PvP minigame where players where you must protect your bed whilst trying to eliminate your opponents on islands in the sky. You can continue to respawn while your bed is safe. If your bed is destroyed, you're on your last life! Use the shop on your island to get better items and win.
                </p>

                <!-- Text -->
                <p class="text">
                    <b>Duels</b> is a simple competitive PvP minigame where players fight in a 1v1 format.
                </p>

                <!-- Text -->
                <p class="text">
                    <b>SkyWars</b> is a competitive PvP minigame where players start off on a separate island and try to battle each other. The main goal is to be the last person or team alive to win.
                </p>

                <!-- Text -->
                <p class="text">
                    <b>TNTRun</b> is a competitive fast-paced minigame where players start on layer of sand and every block that they step on dissapears. If a player falls through all of the layers they loose the game.
                </p>

                <!-- Text -->
                <p class="text">
                    <b>UHC</b> is a competitive minigame where players fight each other in a randomly generated survival-like world. The main goal is to be the last person or team alive to win.
                </p>

            </article>

            <!-- Inner section -->
            <article class="general">

                <!-- Title -->
                <h2 class="title">
                    Images
                </h2>

                <!-- Line -->
                <hr class="line width_100">

                <!-- Images -->
                <img alt="1" class="gamemode_banner" src="../../images/Minigames Lobby - 2.png" style="padding: 1% 1% 0 0; width: 32%;">
                <img alt="2" class="gamemode_banner" src="../../images/Minigames Lobby - 3.png" style="padding: 1% 1% 0 0; width: 32%;">
                <img alt="3" class="gamemode_banner" src="../../images/BedWars Lobby - 1.png" style="padding: 1% 1% 0 0; width: 32%;">
                <img alt="4" class="gamemode_banner" src="../../images/BedWars - Castle Raiders - 1.png" style="padding: 1% 1% 0 0; width: 32%;">
                <img alt="5" class="gamemode_banner" src="../../images/Duels Lobby - 1.png" style="padding: 1% 1% 0 0; width: 32%;">
                <img alt="6" class="gamemode_banner" src="../../images/Duels - Sumo - 1.png" style="padding: 1% 1% 0 0; width: 32%;">
                <img alt="7" class="gamemode_banner" src="../../images/SkyWars Lobby - 2.png" style="padding: 1% 1% 0 0; width: 32%;">
                <img alt="8" class="gamemode_banner" src="../../images/SkyWars - Circle of Life - 1.png" style="padding: 1% 1% 0 0; width: 32%;">
                <img alt="9" class="gamemode_banner" src="../../images/TNTRun Lobby - 2.png" style="padding: 1% 1% 0 0; width: 32%;">
                <img alt="10" class="gamemode_banner" src="../../images/TNTRun - Stone - 1.png" style="padding: 1% 1% 0 0; width: 32%;">

            </article>

        </section>

    </main>



    <!-- Footer -->
    <?php
    include($directory_prefix . "Parts/footer.php");
    ?>

    <!-- Other -->
    <?php
    include($directory_prefix . "Parts/back_to_top.php");
    ?>
</body>

</html>