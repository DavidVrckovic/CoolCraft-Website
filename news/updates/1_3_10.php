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
    <title> CoolCraft | News | Update 1.3.10 </title>
    <link href="../../images/icons/coolcraft_icon.png" rel="icon" type="image/png" />

    <!-- External sources -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>

    <!-- General CSS files -->
    <!--<link href="index.css" rel="stylesheet" type="text/css" />-->
    <link href="../../styles/index.css" rel="stylesheet" type="text/css" />
    <link href="../../styles/content-sidebar.css" rel="stylesheet" type="text/css" />

    <!-- Specific CSS files -->
    <link href="../../styles/back_to_top.css" rel="stylesheet" type="text/css" />
    <link href="../../styles/dark_mode.css" rel="stylesheet" type="text/css" />
    <link href="../../styles/footer.css" rel="stylesheet" type="text/css" />
    <link href="../../styles/navigation.css" rel="stylesheet" type="text/css" />
</head>



<body>
    <!-- Links -->
    <?php
    $directory_level = 2;
    include("../../php/links.php");
    ?>

    <!-- Header and Navigation -->
    <?php
    $nav_faq = "../../faq";
    $nav_home = "../../";
    $nav_info = "../../info";
    $nav_gamemodes = "../../gamemodes";
    $nav_news = "../";
    $nav_store = "../../store";

    include("../../php/navigation.php");
    ?>



    <!-- CONTENT Banner -->
    <div class="section" id="section-introduction">
        <img alt="Banner image" class="section" id="section_banner-introduction" src="../../images/Hub Lobby - 1.png" />
        <div class="inner_section" id="inner_section-introduction">

            <h1 class="title" id="title-introduction">
                Update 1.3.10
            </h1>

        </div>
    </div>

    <!-- CONTENT -->
    <div class="content">

        <!-- MAIN -->
        <div class="main">

            <h1 class="main_title" id="main_title-info">
                <b> Update details </b>
            </h1>

            <div class="main_title_line" id="main_title_line-info"> </div>

            <div class="main_text" id="main_text-info">
                <b> Changes </b>
                <ul>
                    <li>
                        Added new Hub lobby.
                    </li>
                    <li>
                        Added sound effects to join items.
                    </li>
                    <li>
                        Authentication now uses MySQL to store data.
                    </li>
                    <li>
                        Auctions have been improved.
                    </li>
                    <li>
                        Small adjustments to menus.
                    </li>
                </ul>
                <br>

                <b> Published: </b> 2 April 2021

                <br><br><br>
            </div>
        </div>

        <!-- SIDEBAR -->
        <div class="sidebar" id="sidebar">

            <h1 class="sidebar_title" id="sidebar_title-contact">
                <b> Contact us </b>
            </h1>

            <div class="sidebar_title_line" id="sidebar_title_line-contact"> </div>

            <p> <a href="https://discord.com/invite/nnvvCr7" target="_blank"> Discord </a> </p>
            <p> <a href="https://twitter.com/coolcraft_net" target="_blank"> Twitter </a> </p>
            <p> <a href="https://facebook.com/coolcraftmc" target="_blank"> Facebook </a> </p>

            <br><br>

            <h1 class="sidebar_title" id="sidebar_title-info">
                <b> Info </b>
            </h1>

            <div class="sidebar_title_line" id="sidebar_title_line-info"> </div>

            <p> Server IP address: <b>play.coolcraft.me</b> </p>
            <p> Supported MC versions: 1.8 and above </p>

        </div>

    </div>



    <!-- Footer -->
    <?php
    include("../../php/footer.php");
    ?>

    <!-- Other -->
    <?php
    include("../../php/back_to_top.php");
    ?>
</body>

</html>