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
    <title> CoolCraft > FAQ </title>
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