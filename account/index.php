<!DOCTYPE html>



<?php
// Links
$directory_level = 1;
include("../php/links.php");



// Check if a user is not logged in within the session
if (!isset($_SESSION["loggedin"])) {

    // Redirect a user to the login page
    header("Location: ../login");
    exit();
}



// Include the account script
include("../php/account.php");
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
    <title> CoolCraft | Account </title>
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
            <img alt="Your account" class="section_bg bg" id="intro_section_bg_img" src="../Images/Hub Lobby - 4.png">

            <!-- Inner section -->
            <article class="inner cflex everything_center" id="intro_inner">

                <!-- Title -->
                <h1 class="title">
                    Your account
                </h1>

            </article>

        </section>

        <!-- SECTION -->
        <section class="content cflex" id="main_section">

            <!-- Inner section -->
            <article class="general">

                <!-- Title -->
                <h2 class="title">
                    General info
                </h2>

                <!-- Line -->
                <hr class="line width_100">

                <!-- Text -->
                <?php
                if (isset($_SESSION["error"]) && $_GET["error"] == "db_connection" && $_GET["database"] == "lp") {
                    echo ('
                        <p class="error">
                        ' . $_SESSION["error"] . '
                        </p>
                    ');
                } else {
                    output_general_info_lp(lp_db_get_results());
                }
                ?>

            </article>

            <!-- Inner section -->
            <article class="general">

                <!-- Title -->
                <h2 class="title">
                    Stats
                </h2>

                <!-- Line -->
                <hr class="line width_100">

                <!-- Text -->
                <?php
                if (isset($_SESSION["error"]) && $_GET["error"] == "db_connection" && $_GET["database"] == "sw") {
                    echo ('
                        <p class="error">
                        ' . $_SESSION["error"] . '
                        </p>
                    ');
                } else {
                    $sw_db_results = false;
                    output_skywars_stats($sw_db_results);
                }
                ?>

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