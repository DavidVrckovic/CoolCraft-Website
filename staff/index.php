<!DOCTYPE html>



<?php
// Determine the prefix for file locations
$directory_prefix = "../";

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
    <title> CoolCraft | Staff </title>
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
            <img alt="Staff" class="section_bg bg" id="intro_section_bg_img" src="../Images/Hub Lobby - 5.png">

            <!-- Inner section -->
            <article class="inner cflex everything_center" id="intro_inner">

                <!-- Title -->
                <h1 class="title">
                    Staff
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
                        Documents
                    </h2>

                    <!-- Line -->
                    <hr class="line width_100">

                    <!-- Text -->
                    <p class="text">

                        <a class="link" href="https://docs.google.com/document/d/1FLoi5s_RJoiseoZR9Uqy3JIKc9rGCAK0jVNQCjCd2Rk/edit?usp=sharing" target="_blank">
                            CoolCraft Documentation
                        </a>

                    </p>

                    <!-- Text -->
                    <p class="text">

                        <a class="link" href="https://docs.google.com/spreadsheets/d/1bxkgT3V09BkWHuBpaEmkwjtb67ZSYJk9gwlmhFT0JJE/edit?usp=sharing" target="_blank">
                            CoolCraft Spreadsheet
                        </a>

                    </p>

                    <!-- Text -->
                    <p class="text">

                        <a class="link" href="networkmanager/dashboard/dashboard.php" target="_blank">
                            Network Manager
                        </a>

                    </p>

                    <!-- Text -->
                    <p class="text">

                        <a class="link" href="https://docs.google.com/document/d/1PWADfyil6hzipTNgCvNXhWZHxMC0NQMLmqQclSMU4AM/edit?usp=sharing" target="_blank">
                            Marketing Plan
                        </a>

                    </p>

                </article>

            </section>

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