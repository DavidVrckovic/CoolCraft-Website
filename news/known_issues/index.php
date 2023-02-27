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
    <title> CoolCraft > Known issues </title>
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



    <!-- CONTENT Banner -->
    <div class="section" id="section-introduction">
        <img alt="Banner image" class="section" id="section_banner-introduction" src="../../images/Parkour Lobby - 1.png" />
        <div class="inner_section" id="inner_section-introduction">

            <h1 class="title" id="title-introduction">
                Known issues
            </h1>

        </div>
    </div>

    <!-- CONTENT -->
    <div class="content">

        <!-- MAIN -->
        <div class="main">

            <h1 class="main_title" id="main_title-issues1">
                <b> Issues with no solution </b>
            </h1>

            <div class="main_title_line" id="main_title_line-issues1"> </div>

            <div class="main_text" id="main_text-issues1">
                <b> When on a game mode that supports Minecraft version 1.19.2, upon connecting to any lower-version game mode, chunks will not load. </b>
                <br><br>
                <ul>
                    <li>
                        What you can do to fix: Connect to another lower-version game mode and chunks will load correctly.
                    </li>
                </ul>
                <br>

                <b> Interactive boards are glitchy on lower Minecraft versions. </b>
                <br><br>
                <ul>
                    <li>
                        How to avoid: Use Minecraft version 1.19.2 or above.
                    </li>
                </ul>
                <br>

                <br><br>
            </div>

            <h1 class="main_title" id="main_title-issues2">
                <b> Issues with solutions available </b>
            </h1>

            <div class="main_title_line" id="main_title_line-issues2"> </div>

            <div class="main_text" id="main_text-issues2">
                <b> No issues. </b>

                <br><br>
            </div>

            <h1 class="main_title" id="main_title-issues3">
                <b> Issues in the process of fixing </b>
            </h1>

            <div class="main_title_line" id="main_title_line-issues3"> </div>

            <div class="main_text" id="main_text-issues3">
                <b> No issues. </b>

                <br><br>
            </div>
        </div>

        <!-- SIDEBAR -->
        <div class="sidebar" id="sidebar">

            <?php
            include("../../php/sidebar.php");
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