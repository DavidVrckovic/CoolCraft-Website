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
    <title> CoolCraft > Info </title>
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
        <img alt="Banner image" class="section" id="section_banner-introduction" src="../images/Hub Lobby - 4.png" />
        <div class="inner_section" id="inner_section-introduction">

            <h1 class="title" id="title-introduction">
                Information and details
            </h1>

        </div>
    </div>

    <!-- CONTENT -->
    <div class="content">

        <!-- MAIN -->
        <div class="main">

            <h1 class="main_title" id="main_title-general_info">
                General info
            </h1>

            <div class="main_title_line" id="main_title_line-general_info"> </div>

            <div class="main_text" id="main_text-general_info">
                CoolCraft is a Minecraft server network with many different game modes for you to check out! You can find a variety of gameplay and activities for you and your friends.
                <br><br>
                We support the following Minecraft versions: <b>1.8 and above</b>.
                <br><br>
                <img alt="GIF" class="website_banner" src="../images/CoolCraft Website Banner.gif" />
                <br><br>
                We are always trying to put more features in, add more servers and improve the experience overall. If you find any issues, feel free to report them to us.
                <br>
            </div>



            <h1 class="main_title" id="main_title-available_gamemodes">
                Available game modes
            </h1>

            <div class="main_title_line" id="main_title_line-available_gamemodes"> </div>

            <div class="main_text" id="main_text-available_gamemodes">
                Currently available game modes are:
                <ul>
                    <li>
                        <b>Survival</b>
                    </li>
                    <li>
                        <b>Factions</b>
                    </li>
                    <li>
                        <b>SkyBlock</b>
                    </li>
                    <li>
                        <b>Prison</b>
                    </li>
                    <li>
                        <b>Creative</b>
                    </li>
                    <li>
                        <b>Minigames</b> including <b>BedWars</b>, <b>SkyWars</b>, <b>TNTRun</b>, <b>Duels</b>, <b>Parkour</b> and <b>UHC</b>
                    </li>
                </ul>
                <br>
                Learn more about each game mode <a class="link" href="../gamemodes">here</a>.
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