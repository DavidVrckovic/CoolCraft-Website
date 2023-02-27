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
    <meta name="author" content="Davy">
    <meta name="description" content="A website for the Minecraft server network CoolCraft.">
    <meta name="keywords" content="CoolCraft, Cool, Craft, Minecraft, Mine, Server, Network, Web">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title & Favicon -->
    <title> CoolCraft > Game modes > Factions </title>
    <link href="<?php echo ($favicon_image); ?>" rel="icon" type="image/png" />

    <!-- External sources -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>

    <!-- General CSS files -->
    <link href="index.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo ($index_css); ?>" rel="stylesheet" type="text/css" />

    <!-- Specific CSS files -->
    <link href="<?php echo ($back_to_top_css); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo ($footer_css); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo ($navigation_css); ?>" rel="stylesheet" type="text/css" />
</head>



<body>
    <!-- Header & Navigation -->
    <?php
    include($directory_prefix . "Parts/navigation.php");
    ?>



    <!-- Section -->
    <div class="section" id="section-introduction">
        <img alt="Banner image" class="section" id="section_banner-introduction" src="../../images/Factions Spawn - 1.png" />
        <div class="inner_section" id="inner_section-introduction">

            <h1 class="title" id="title-introduction">
                Factions
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
                <b>Factions</b> is a competitive PvP game mode that lets players team up by creating and joining different factions. Players within the same faction work together to gather resources, build bases, protect their land, recruit new members and raid other factions.
            </div>

            <h1 class="main_title" id="main_title-gamemode_images">
                Images
            </h1>

            <div class="main_title_line" id="main_title_line-gamemode_images"> </div>

            <div class="gamemodes">
                <div class="gamemode" id="gamemode-survival">
                    <img alt="Game mode banner" class="gamemode_banner" src="../../images/Factions Spawn - 1.png" />
                </div>

                <div class="gamemode" id="gamemode-survival">
                    <img alt="Game mode banner" class="gamemode_banner" src="../../images/Factions Spawn - 2.png" />
                </div>

                <div class="gamemode" id="gamemode-survival">
                    <img alt="Game mode banner" class="gamemode_banner" src="../../images/Factions Spawn - 3.png" />
                </div>

                <div class="gamemode" id="gamemode-survival">
                    <img alt="Game mode banner" class="gamemode_banner" src="../../images/Factions Spawn - 4.png" />
                </div>

                <div class="gamemode" id="gamemode-survival">
                    <img alt="Game mode banner" class="gamemode_banner" src="../../images/Factions Spawn - 5.png" />
                </div>
            </div>
        </div>

    </div>



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