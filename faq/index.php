<!DOCTYPE html>
<?php
// Start the session
session_start();

// Links
$directory_level = 1;
include("../php/links.php");
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
    <title> CoolCraft | FAQ </title>
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
            <img alt="Frequently asked questions" class="section_bg bg" id="intro_section_bg_img" src="../Images/Hub Lobby - 5.png">

            <!-- Inner section -->
            <article class="inner cflex everything_center" id="intro_inner">

                <!-- Title -->
                <h1 class="title">
                    Frequently asked questions
                </h1>

            </article>

        </section>

        <!-- CONTENT -->
        <div class="content flex has_bg_color">

            <!-- SECTION -->
            <section class="main cflex" id="main_section">

                <!-- Inner section -->
                <article class="general">

                    <!-- Title -->
                    <h2 class="title">
                        General questions
                    </h2>

                    <!-- Line -->
                    <hr class="line width_100">

                    <!-- Question -->
                    <div class="question">

                        <h3 class="title">
                            How do I connect to CoolCraft?
                        </h3>

                    </div>

                    <!-- Answer -->
                    <div class="answer text">

                        <ol class="list">
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

                        <img alt="" class="faq_answer_img" src="../images/faq/FAQ - How to connect.png">

                    </div>

                </article>

                <!-- Inner section -->
                <article class="general">

                    <!-- Title -->
                    <h2 class="title">
                        Server-related questions
                    </h2>

                    <!-- Line -->
                    <hr class="line width_100">

                    <!-- Question -->
                    <div class="question">

                        <h3 class="title">
                            How do I play a specific game mode on CoolCraft?
                        </h3>

                    </div>

                    <!-- Answer -->
                    <div class="answer text">

                        <ol class="list">
                            <li>
                                If on Hub, right click while holding a compass named "Server Selector" in you hand.
                            </li>
                            <li>
                                Click on the icon which represents the server you want to play. You can hover over them to see more information.
                            </li>
                        </ol>

                        <ol class="list">
                            <li>
                                If on other servers, type the command /servers in chat.
                            </li>
                            <li>
                                Click on the icon which represents the server you want to play. You can hover over them to see more information.
                            </li>
                        </ol>

                        <img alt="" class="faq_answer_img" src="../images/faq/FAQ - Server menu - 1.png">

                    </div>

                    <!-- Question -->
                    <div class="question">

                        <h3 class="title">
                            How do I choose the right game mode to play?
                        </h3>

                    </div>

                    <!-- Answer -->
                    <div class="answer text">

                        <p>
                            This depends on your playstyle. We recommend that you try every game mode and figure out which one fits you the best. Read the description of every game mode and it might help you decide.
                        </p>

                        <img alt="" class="faq_answer_img" src="../images/faq/FAQ - Server menu - 2.png">

                    </div>

                </article>

            </section>

            <!-- ASIDE -->
            <aside class="sidebar cflex" id="sidebar_section">

                <?php
                include($directory_prefix . "Parts/sidebar.php");
                ?>

            </aside>

        </div>

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
        <script src="' . $dropdown_script . '"></script>
    ';
    ?>
</body>

</html>