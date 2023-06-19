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
    <title> CoolCraft | News | CoolCraft will not receive updates for some time </title>
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
            <img alt="CoolCraft will not receive updates for some time" class="section_bg bg" id="intro_section_bg_img" src="../../../Images/Hub Lobby - 8.png">

            <!-- Inner section -->
            <article class="inner cflex everything_center" id="intro_inner">

                <!-- Title -->
                <h1 class="title">
                    CoolCraft will not receive updates for some time
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
                        Info
                    </h2>

                    <!-- Line -->
                    <hr class="line width_100">

                    <!-- Text -->
                    <p class="text">
                        School has been more and more stressful lately and I am barely keeping up. There are many projects to do, exams and quite a bit of homework on top of that as well. I really want to work on the server, make some new game modes, fix things up, and be with the community, but it is very hard for me to do everything at once and I am starting to feel overwhelmed and depressed. I guess the good thing is that I am working on a project for school which will eventually have a use for the server. I aim to get back to being active on the server somewhere in mid-June. Thank you for understanding.
                        <br><br>
                        Have a nice day, stay safe and take care!
                        <br><br>
                        - Davy
                    </p>

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
                        <b> Published: </b> 8 May 2021
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