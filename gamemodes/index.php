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



    <!-- Section -->
    <div class="section" id="section-introduction">
        <img alt="Banner image" class="section" id="section_banner-introduction" src="../images/Hub Lobby - 5.png" />
        <div class="inner_section" id="inner_section-introduction">

            <h1 class="title" id="title-introduction">
                Game modes
            </h1>

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
                            <img alt="Game mode banner" class="gamemode_banner" src="../images/Survival Spawn - 1.png" />
                            <div class="gamemode_text">
                                Survival
                            </div>
                        </div>
                    </a>
                </div>

                <div class="gamemode" id="gamemode-factions">
                    <a class="gamemode_banner" href="factions">
                        <div class="gamemode_image">
                            <img alt="Game mode banner" class="gamemode_banner" src="../images/Factions Spawn - 1.png" />
                            <div class="gamemode_text">
                                Factions
                            </div>
                        </div>
                    </a>
                </div>

                <div class="gamemode" id="gamemode-skyblock">
                    <a class="gamemode_banner" href="skyblock">
                        <div class="gamemode_image">
                            <img alt="Game mode banner" class="gamemode_banner" src="../images/SkyBlock Spawn - 1.png" />
                            <div class="gamemode_text">
                                SkyBlock
                            </div>
                        </div>
                    </a>
                </div>

                <div class="gamemode" id="gamemode-prison">
                    <a class="gamemode_banner" href="prison">
                        <div class="gamemode_image">
                            <img alt="Game mode banner" class="gamemode_banner" src="../images/Prison Spawn - 1.png" />
                            <div class="gamemode_text">
                                Prison
                            </div>
                        </div>
                    </a>
                </div>

                <div class="gamemode" id="gamemode-creative">
                    <a class="gamemode_banner" href="creative">
                        <div class="gamemode_image">
                            <img alt="Game mode banner" class="gamemode_banner" src="../images/Creative - 1.png" />
                            <div class="gamemode_text">
                                Creative
                            </div>
                        </div>
                    </a>
                </div>

                <div class="gamemode" id="gamemode-minigames">
                    <a class="gamemode_banner" href="minigames">
                        <div class="gamemode_image">
                            <img alt="Game mode banner" class="gamemode_banner" src="../images/Minigames Lobby - 1.png" />
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