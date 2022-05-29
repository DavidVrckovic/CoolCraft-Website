<?php
include("../php/search.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">

    <!-- Title and Favicon -->
    <title> CoolCraft | Stats </title>
    <link href="../images/icons/coolcraft_icon.png" rel="icon" type="image/png" />

    <!-- External sources -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>

    <!-- Search icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
    <script src="../scripts/ajax_search.js"> </script>

    <!-- Links -->
    <?php
    $directory_level = 1;
    include("../php/links.php");
    ?>

    <!-- Header and Navigation -->
    <?php
    $nav_faq = "../faq";
    $nav_home = "../";
    $nav_info = "../info";
    $nav_gamemodes = "../gamemodes";
    $nav_news = "../news";
    $nav_store = "../store";

    include("../php/navigation.php");
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
    include("../php/footer.php");
    ?>

    <!-- Other -->
    <?php
    include("../php/back_to_top.php");
    ?>
</body>

</html>