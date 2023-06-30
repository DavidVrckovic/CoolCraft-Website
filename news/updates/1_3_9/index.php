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
    <title> CoolCraft | News | Update 1.3.9 </title>
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
            <img alt="Update 1.3.9" class="section_bg bg" id="intro_section_bg_img" src="../../../Images/Hub Lobby - 9.png">

            <!-- Inner section -->
            <article class="inner cflex everything_center" id="intro_inner">

                <!-- Title -->
                <h1 class="title">
                    Update 1.3.9
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
                            Added Partner rank.
                        </li>
                        <li>
                            Added some advanced options for staff members.
                        </li>
                        <li>
                            Chat formatting has been improved and now supports placeholders, hover and click events.
                        </li>
                    </ul>

                    <p class="text">
                        <b> Fixes: </b>
                    </p>

                    <ul class="text">
                        <li>
                            Fixed an issue where player's real username was displayed in chat instead of their nickname.
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
                        <b> Published: </b> 17 March 2021
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
    ?>
</body>

</html>