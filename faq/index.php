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
    <title> CoolCraft | FAQ </title>
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
    $nav_faq = "";
    $nav_home = "../";
    $nav_info = "../info";
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
                Frequently asked questions
            </h1>

        </div>
    </div>

    <!-- CONTENT -->
    <div class="content">

        <!-- MAIN -->
        <div class="main">

            <h1 class="main_title" id="main_title-general_info">
                General questions
            </h1>

            <div class="main_title_line" id="main_title_line-general_info"> </div>

            <!-- FAQ Question -->
            <div class="faq_question">

                <!-- Question -->
                <div class="faq_title">
                    How do I connect to CoolCraft?
                </div>

                <!-- Answer -->
                <div class="faq_answer">
                    <ol>
                        <li>
                            Open your Minecraft client
                        </li>
                        <li>
                            Select "Multiplayer".
                        </li>
                        <li>
                            Click on "Add Server".
                        </li>
                        <li>
                            Under "Server Address" enter the following: <b>coolcraft.me</b>
                        </li>
                        <li>
                            Click on "Done" and double click on the server in the list.
                        </li>
                    </ol>
                    <br>
                    <img alt="FAQ answer image" class="faq_answer_img" src="../images/faq/FAQ - How to connect.png" />
                    <br>
                </div>

            </div>



            <h1 class="main_title" id="main_title-available_gamemodes">
                Server-related questions
            </h1>

            <div class="main_title_line" id="main_title_line-available_gamemodes"> </div>

            <!-- FAQ Question -->
            <div class="faq_question">

                <!-- Question -->
                <div class="faq_title">
                    How do I play a specific game mode on CoolCraft?
                </div>

                <!-- Answer -->
                <div class="faq_answer">
                    <ol>
                        <li>
                            If on Hub, right click while holding a compass named "Server Selector" in you hand.
                        </li>
                        <li>
                            Click on the icon which represents the server you want to play. You can hover over them to see more information.
                        </li>
                    </ol>
                    <br>
                    <ol>
                        <li>
                            If on other servers, type the command /servers in chat.
                        </li>
                        <li>
                            Click on the icon which represents the server you want to play. You can hover over them to see more information.
                        </li>
                    </ol>
                    <img alt="FAQ answer image" class="faq_answer_img" src="../images/faq/FAQ - Server menu - 1.png" />
                    <br>
                </div>

            </div>

            <!-- FAQ Question -->
            <div class="faq_question">

                <!-- Question -->
                <div class="faq_title">
                    How do I choose the right game mode to play?
                </div>

                <!-- Answer -->
                <div class="faq_answer">
                    This depends on your playstyle. We recommend that you try every game mode and figure out which one fits you the best. Read the description of every game mode and it might help you decide.
                    <br>
                    <img alt="FAQ answer image" class="faq_answer_img" src="../images/faq/FAQ - Server menu - 2.png" />
                    <br>
                </div>

            </div>

        </div>

        <!-- SIDEBAR -->
        <div class="sidebar">

            <h1 class="sidebar_title" id="sidebar_title-contact">
                Contact us
            </h1>

            <div class="sidebar_title_line" id="sidebar_title_line-contact"> </div>

            <p> <a href="https://discord.com/invite/nnvvCr7" target="_blank"> Discord </a> </p>
            <p> <a href="https://twitter.com/coolcraft_net" target="_blank"> Twitter </a> </p>
            <p> <a href="https://facebook.com/coolcraftmc" target="_blank"> Facebook </a> </p>

            <br><br>

            <h1 class="sidebar_title" id="sidebar_title-info">
                Info
            </h1>

            <div class="sidebar_title_line" id="sidebar_title_line-info"> </div>

            <p> Server IP address: <b>play.coolcraft.me</b> </p>
            <p> Supported MC versions: 1.8 and above </p>

        </div>

    </div>



    <!-- Footer -->
    <?php
    include("../php/footer.php");
    ?>

    <!-- Other -->
    <?php
    echo '<script src="../scripts/dropdown.js"></script>';
    include("../php/back_to_top.php");
    ?>
</body>

</html>