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
    <meta name="author" content="Davy">
    <meta name="description" content="A website for the Minecraft server network CoolCraft.">
    <meta name="keywords" content="CoolCraft, Cool, Craft, Minecraft, Mine, Server, Network, Web">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title & Favicon -->
    <title> CoolCraft > Game modes </title>
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