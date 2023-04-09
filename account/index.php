<!DOCTYPE html>
<?php
include("../php/account.php");

// If the user is not logged in, redirect to the login page
if (!isset($_SESSION['loggedin']) && !isset($_COOKIE['login'])) {
    header("Location: ../login.php");
    exit();
}

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
                if (isset($_SESSION['loggedin'])) {
                    if ($lp_db_results && mysqli_num_rows($lp_db_results) > 0) {
                        while ($row = mysqli_fetch_array($lp_db_results)) {
                            if ($row['primary_group'] == "default" || $row['primary_group'] == "player") {
                                $rank = "Player";
                            } else {
                                $rank = $row['primary_group'];
                            }
                            echo '
                            <div class="main_text" id="main_text-rank">
                                Username: ' . $_SESSION['user_username'] . '
                                <br>
                                Rank: ' . $rank . '
                            </div>
                        ';
                        }
                    } else {
                        echo '
                        <div class="main_text" id="main_text-rank">
                            Username: ' . $_SESSION['user_username'] . '
                            <br>
                            Rank: Player
                        </div>
                    ';
                    }
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
                if (isset($_SESSION['loggedin'])) {
                    if ($sw_db_results && mysqli_num_rows($sw_db_results) > 0) {
                        while ($row = mysqli_fetch_array($sw_db_results)) {
                            echo '
                            <div class="gamemode" id="gamemode-survival">
                                <div class="gamemode_image">
                                    <img alt="Game mode banner" class="gamemode_banner" src="../images/SkyWars Lobby - 1.png">
                                    <div class="gamemode_text">
                                        Wins: ' . $row["wins"] . '
                                        <br>
                                        Losses: ' . $row["losses"] . '
                                        <br>
                                        Kills: ' . $row["kills"] . '
                                        <br>
                                        Deaths: ' . $row["deaths"] . '
                                        <br>
                                        XP: ' . $row["xp"] . '
                                        <br>
                                    </div>
                                </div>
                            </div>
                        ';
                        }
                    } else {
                        echo '
                        <div class="gamemode" id="gamemode-survival">
                            <div class="gamemode_image">
                                <img alt="Game mode banner" class="gamemode_banner" src="../images/SkyWars Lobby - 1.png">
                                <div class="gamemode_text">
                                    No data
                                </div>
                            </div>
                        </div>
                    ';
                    }
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