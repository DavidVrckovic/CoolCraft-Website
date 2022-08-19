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



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">

    <!-- Title and Favicon -->
    <title> CoolCraft | Account </title>
    <link href="../images/icons/coolcraft_icon.png" rel="icon" type="image/png" />

    <!-- External sources -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>

    <!-- General CSS files -->
    <link href="index.css" rel="stylesheet" type="text/css" />
    <link href="../styles/index.css" rel="stylesheet" type="text/css" />
    <link href="../styles/content.css" rel="stylesheet" type="text/css" />

    <!-- Specific CSS files -->
    <link href="../styles/back_to_top.css" rel="stylesheet" type="text/css" />
    <link href="../styles/dark_mode.css" rel="stylesheet" type="text/css" />
    <link href="../styles/footer.css" rel="stylesheet" type="text/css" />
    <link href="../styles/navigation.css" rel="stylesheet" type="text/css" />
</head>



<body>
    <!-- Header and Navigation -->
    <?php
    $nav_faq = "../faq";
    $nav_gamemodes = "../gamemodes";
    $nav_home = "../";
    $nav_info = "../info";
    $nav_news = "../news";
    $nav_store = "../store";

    include("../php/navigation.php");
    ?>



    <!-- Section -->
    <div class="section" id="section-introduction">
        <img alt="Banner image" class="section" id="section_banner-introduction" src="../images/Hub Lobby - 4.png" />
        <div class="inner_section" id="inner_section-introduction">

            <h1 class="title" id="title-introduction">
                Your account
            </h1>

        </div>
    </div>

    <!-- CONTENT -->
    <div class="content">

        <!-- MAIN -->
        <div class="main">

            <h1 class="main_title" id="main_title-general_info">
                General info
            </h1>

            <div class="main_title_line" id="main_title_line-general_info"> </div>

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
                }
                else {
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

            <h1 class="main_title" id="main_title-general_info">
                Stats
            </h1>

            <div class="main_title_line" id="main_title_line-general_info"> </div>

            <?php
            if (isset($_SESSION['loggedin'])) {
                if ($sw_db_results && mysqli_num_rows($sw_db_results) > 0) {
                    while ($row = mysqli_fetch_array($sw_db_results)) {
                        echo '
                            <div class="gamemode" id="gamemode-survival">
                                <div class="gamemode_image">
                                    <img alt="Game mode banner" class="gamemode_banner" src="../images/SkyWars Lobby - 1.png" />
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
                                <img alt="Game mode banner" class="gamemode_banner" src="../images/SkyWars Lobby - 1.png" />
                                <div class="gamemode_text">
                                    No data
                                </div>
                            </div>
                        </div>
                    ';
                }
            }
            ?>

        </div>

    </div>



    <!-- Footer -->
    <?php
    include("../php/footer.php");
    ?>

    <!-- Other -->
    <?php
    include("../php/back_to_top.php");
    ?>
</body>

</html>