<?php
include("../php/search.php");

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
    <title> CoolCraft > Statistics </title>
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
                <div class="search">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off" class="search" method="GET">
                        <input class="search" id="search2" name="q" onkeyup="showResult(this.value)" placeholder="Player name" type="text" value="">
                        <button class="search" id="submit" type="submit" value="Search">
                            <i class="fa fa-search"></i>
                        </button>
                        <div class="livesearch" id="livesearch"></div>
                    </form>
                </div>
            </h1>

        </div>
    </div>

    <!-- CONTENT -->
    <div class="content">

        <!-- MAIN -->
        <div class="main">

            <h1 class="main_title" id="main_title-general_info">
                <?php
                if (isset($_GET['q'])) {
                    while ($row = mysqli_fetch_array($nm_db_results)) {
                        echo "<span>" . $row['username'] . "</span> <br>";
                    }
                }
                ?>
            </h1>

            <div class="main_title_line" id="main_title_line-general_info"> </div>

            <?php
            if (isset($_GET['q'])) {
                while ($row = mysqli_fetch_array($lp_db_results)) {
                    if ($row['primary_group'] == "default" || $row['primary_group'] == "player") {
                        echo "<span> Rank: Player </span>";
                    } else {
                        echo "<span> Rank: " . $row['primary_group'] . "</span>";
                    }
                }
            }

            if (isset($_GET['q'])) {
                if ($sw_db_results) {
                    while ($row = mysqli_fetch_array($sw_db_results)) {
                        echo '
                        <div class="gamemode" id="gamemode-survival">
                            <div class="gamemode_image">
                                <img alt="Game mode banner" class="gamemode_banner" src="../images/Survival Spawn - 1.png" />
                                <div class="gamemode_text">
                                    Wins: ' . $row["wins"] . ' <br>
                                    Losses: ' . $row["losses"] . ' <br>
                                    Kills: ' . $row["kills"] . ' <br>
                                    Deaths: ' . $row["deaths"] . ' <br>
                                    XP: ' . $row["xp"] . ' <br>
                                </div>
                            </div>
                        </div>
                        ';
                    }
                } else {
                    echo 'User has never player SkyWars.';
                }
            } else {
                echo 'Search for a username to see their stats.';
            }
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