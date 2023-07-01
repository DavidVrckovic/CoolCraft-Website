<!DOCTYPE html>



<?php
// Determine the prefix for file locations
$directory_prefix = "../";

// Include the main script
include($directory_prefix . "php/main.php");
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
    <title> CoolCraft | Game modes </title>
    <link href="<?php echo ($favicon_image); ?>" rel="icon" type="image/png">

    <!-- External sources -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->

    <!-- General CSS files -->
    <link href="<?php echo ($coolcraft_css); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo ($index_css); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo ($animations_css); ?>" rel="stylesheet" type="text/css">

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
            <img alt="Game modes" class="section_bg bg" id="intro_section_bg_img" src="../Images/Hub Lobby - 5.png">

            <!-- Inner section -->
            <article class="inner cflex everything_center" id="intro_inner">

                <!-- Title -->
                <h1 class="title">
                    Game modes
                </h1>

            </article>

        </section>

        <!-- SECTION -->
        <section class="gamemodes everything_center has_bg_color" id="main_section">

            <!-- Block section -->
            <article class="gamemode everything_center has_bg_img">

                <!-- Background image -->
                <img alt="Survival" class="cc_bg bg" src="../Images/Survival Spawn - 1.png">

                <!-- Clickable block -->
                <a class="link_over_bg_img cflex everything_center" href="survival">

                    <!-- Title -->
                    <h2 class="title">
                        Survival
                    </h2>

                    <!-- Text -->
                    <p class="text">
                        Click for more info
                    </p>

                </a>

            </article>

            <!-- Block section -->
            <article class="gamemode everything_center has_bg_img">

                <!-- Background image -->
                <img alt="Factions" class="cc_bg bg" src="../Images/Factions Spawn - 1.png">

                <!-- Clickable block -->
                <a class="link_over_bg_img cflex everything_center" href="factions">

                    <!-- Title -->
                    <h2 class="title">
                        Factions
                    </h2>

                    <!-- Text -->
                    <p class="text">
                        Click for more info
                    </p>

                </a>

            </article>

            <!-- Block section -->
            <article class="gamemode everything_center has_bg_img">

                <!-- Background image -->
                <img alt="SkyBlock" class="cc_bg bg" src="../Images/SkyBlock Spawn - 1.png">

                <!-- Clickable block -->
                <a class="link_over_bg_img cflex everything_center" href="skyblock">

                    <!-- Title -->
                    <h2 class="title">
                        SkyBlock
                    </h2>

                    <!-- Text -->
                    <p class="text">
                        Click for more info
                    </p>

                </a>

            </article>

            <!-- Block section -->
            <article class="gamemode everything_center has_bg_img">

                <!-- Background image -->
                <img alt="Prison" class="cc_bg bg" src="../Images/Prison Spawn - 1.png">

                <!-- Clickable block -->
                <a class="link_over_bg_img cflex everything_center" href="prison">

                    <!-- Title -->
                    <h2 class="title">
                        Prison
                    </h2>

                    <!-- Text -->
                    <p class="text">
                        Click for more info
                    </p>

                </a>

            </article>

            <!-- Block section -->
            <article class="gamemode everything_center has_bg_img">

                <!-- Background image -->
                <img alt="Creative" class="cc_bg bg" src="../Images/Creative - 1.png">

                <!-- Clickable block -->
                <a class="link_over_bg_img cflex everything_center" href="creative">

                    <!-- Title -->
                    <h2 class="title">
                        Creative
                    </h2>

                    <!-- Text -->
                    <p class="text">
                        Click for more info
                    </p>

                </a>

            </article>

            <!-- Block section -->
            <article class="gamemode everything_center has_bg_img">

                <!-- Background image -->
                <img alt="Minigames" class="cc_bg bg" src="../Images/Minigames Lobby - 1.png">

                <!-- Clickable block -->
                <a class="link_over_bg_img cflex everything_center" href="minigames">

                    <!-- Title -->
                    <h2 class="title">
                        Minigames
                    </h2>

                    <!-- Text -->
                    <p class="text">
                        Click for more info
                    </p>

                </a>

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