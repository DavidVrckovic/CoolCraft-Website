<!DOCTYPE html>



<?php
// Determine the prefix for file locations
$directory_prefix = "../../../";

// Include the links file
include($directory_prefix . "php/links.php");
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
    <title> CoolCraft | News | Update 1.4.0 </title>
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
            <img alt="Update 1.4.0" class="section_bg bg" id="intro_section_bg_img" src="../../../Images/Parkour Lobby - 1.png">

            <!-- Inner section -->
            <article class="inner cflex everything_center" id="intro_inner">

                <!-- Title -->
                <h1 class="title">
                    Update 1.4.0
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
                        Patch notes
                    </h2>

                    <!-- Line -->
                    <hr class="line width_100">

                    <!-- Text -->
                    <p class="text">
                        <b> Changes: </b>
                    </p>

                    <ul class="text">
                        <li>
                            Added Minecraft 1.17 and 1.17.1 version support.
                        </li>
                        <li>
                            Added interactive boards.
                        </li>
                        <li>
                            Added Parkour minigame.
                        </li>
                        <li>
                            UHC has been reworked from scratch.
                        </li>
                        <li>
                            You can now get the links for applications in game by typing the command /apply.
                        </li>
                        <li>
                            Removed NPCs. Interactive boards are a replacement. They will still be used for other things, such as BedWars.
                        </li>
                    </ul>

                    <p class="text">
                        <b> Fixes: </b>
                    </p>

                    <ul class="text">
                        <li>
                            Fixed an issue where health regenerated too quickly during a BedWars match.
                        </li>
                    </ul>

                </article>

                <!-- Inner section -->
                <article class="general">

                    <!-- Title -->
                    <h2 class="title">
                        Details
                    </h2>

                    <!-- Line -->
                    <hr class="line width_100">

                    <!-- Text -->
                    <p class="text">
                        <b> Published: </b> 16 July 2021
                    </p>

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

    echo ('
        <script src="' . $copy_to_clipboard_script . '"></script>
    ');
    ?>
</body>

</html>