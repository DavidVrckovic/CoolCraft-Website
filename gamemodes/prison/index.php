<!DOCTYPE html>
<?php
// Start the session
session_start();

// Links
$directory_level = 2;
include("../../php/links.php");
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
    <title> CoolCraft | Prison </title>
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
            <img alt="Game modes: Prison" class="section_bg bg" id="intro_section_bg_img" src="../../images/Prison Spawn - 1.png">

            <!-- Inner section -->
            <article class="inner cflex everything_center" id="intro_inner">

                <!-- Title -->
                <h1 class="title">
                    Game modes: Prison
                </h1>

            </article>

        </section>

        <!-- SECTION -->
        <section class="content cflex has_bg_color" id="content_section">

            <!-- Inner section -->
            <article class="general">

                <!-- Title -->
                <h2 class="title">
                    Description
                </h2>

                <!-- Line -->
                <hr class="line width_100">

                <!-- Text -->
                <p class="text">
                    <b>Prison</b> is a peaceful singleplayer/multiplayer game mode where players work hard in mines as prisoners to progress through ranks and obtain freedom. As the ranking gets higher, mining gets harder.
                </p>

            </article>

            <!-- Inner section -->
            <article class="general">

                <!-- Title -->
                <h2 class="title">
                    Images
                </h2>

                <!-- Line -->
                <hr class="line width_100">

                <!-- Images -->
                <img alt="1" class="gamemode_banner" src="../../images/Prison Spawn - 1.png" style="padding: 1% 1% 0 0; width: 32%;">
                <img alt="2" class="gamemode_banner" src="../../images/Prison Spawn - 2.png" style="padding: 1% 1% 0 0; width: 32%;">
                <img alt="3" class="gamemode_banner" src="../../images/Prison Spawn - 3.png" style="padding: 1% 1% 0 0; width: 32%;">

            </article>

        </section>

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
    ';
    ?>
</body>

</html>