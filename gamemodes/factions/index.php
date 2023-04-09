<!DOCTYPE html>
<?php
// Start the session
session_start();

// Links
$directory_level = 2;
include("../../php/links.php");
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
    <title> CoolCraft | Factions </title>
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
            <img alt="Game modes: Factions" class="section_bg bg" id="intro_section_bg_img" src="../../images/Factions Spawn - 1.png">

            <!-- Inner section -->
            <article class="inner cflex everything_center" id="intro_inner">

                <!-- Title -->
                <h1 class="title">
                    Game modes: Factions
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
                    <b>Factions</b> is a competitive PvP game mode that lets players team up by creating and joining different factions. Players within the same faction work together to gather resources, build bases, protect their land, recruit new members and raid other factions.
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
                <img alt="1" class="gamemode_banner" src="../../images/Factions Spawn - 1.png" style="padding: 1% 1% 0 0; width: 32%;">
                <img alt="2" class="gamemode_banner" src="../../images/Factions Spawn - 2.png" style="padding: 1% 1% 0 0; width: 32%;">
                <img alt="3" class="gamemode_banner" src="../../images/Factions Spawn - 3.png" style="padding: 1% 1% 0 0; width: 32%;">
                <img alt="4" class="gamemode_banner" src="../../images/Factions Spawn - 4.png" style="padding: 1% 1% 0 0; width: 32%;">
                <img alt="5" class="gamemode_banner" src="../../images/Factions Spawn - 5.png" style="padding: 1% 1% 0 0; width: 32%;">

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

    echo '
        <script src="' . $copy_to_clipboard_script . '"></script>
    ';
    ?>
</body>

</html>