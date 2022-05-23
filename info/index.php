<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">

    <!-- Title and Favicon -->
    <title> CoolCraft | Info </title>
    <link href="../images/icons/coolcraft_icon.png" rel="icon" type="image/png" />

    <!-- General CSS files -->
    <link href="index.css" rel="stylesheet" type="text/css" />
    <link href="../styles/index.css" rel="stylesheet" type="text/css" />

    <!-- Specific CSS files -->
    <link href="../styles/back-to-top.css" rel="stylesheet" type="text/css" />
    <link href="../styles/footer.css" rel="stylesheet" type="text/css" />
    <link href="../styles/navigation.css" rel="stylesheet" type="text/css" />

    <!-- External sources -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
</head>



<body>
    <!-- Scripts -->
    <script src="../scripts/script.js"></script>
    <script src="../scripts/copy-to-clipboard.js"></script>

    <!-- Header and Navigation -->
    <?php
    $header_image = "../images/icons/coolcraft_icon.png";

    $nav_faq = "../faq";
    $nav_home = "../";
    $nav_info = "";
    $nav_gamemodes = "../gamemodes";
    $nav_news = "../news";
    $nav_store = "../store";

    include("../php/navigation.php");
    ?>



    <!-- CONTENT Banner -->
    <div class="section" id="section-introduction">
        <img alt="Banner image" class="section" id="section_banner-introduction" src="../images/hub_4.png" />
        <div class="inner_section" id="inner_section-introduction">
        </div>
    </div>

    <!-- CONTENT -->
    <div class="content">

        <!-- MAIN -->
        <div class="main">

            <h1 class="main_title" id="main_title-info">
                Information and details
            </h1>

            <div class="main_title_line" id="main_title_line-info"> </div>

            <div class="main_text" id="main_text-info">
                CoolCraft is a Minecraft server network with many different game modes for you to check out! You can find a variety of gameplay and activities for you and your friends.
                <br><br>
                Currently available game modes are:
                <ul>
                    <li>
                        <b>Survival</b>
                    </li>
                    <li>
                        <b>Factions</b>
                    </li>
                    <li>
                        <b>SkyBlock</b>
                    </li>
                    <li>
                        <b>Prison</b>
                    </li>
                    <li>
                        <b>Creative</b>
                    </li>
                    <li>
                        <b>Minigames</b> including <b>BedWars</b>, <b>SkyWars</b>, <b>TNTRun</b>, <b>Duels</b>, <b>Parkour</b> and <b>UHC</b>
                    </li>
                </ul>
                <br>
                We support the following Minecraft versions: <b>1.8 and above</b>.
                <br><br>
                <img src="../images/CoolCraft Website Banner.gif" alt="GIF" class="website_banner" />
                <br><br>
                We are always trying to put more features in, add more servers and improve the experience overall. If you find any issues, feel free to report them to us.
                <br>
            </div>
            <br><br>

        </div>

        <!-- SIDEBAR -->
        <div class="sidebar">

            <h1 class="sidebar_title" id="sidebar_title-contact">
                Contact us
            </h1>

            <div class="sidebar_title_line" id="sidebar_title_line-contact"> </div>

            <p> <a href="https://discord.com/invite/nnvvCr7" target="_blank"> Discord </a> </p>
            <p> <a href="https://twitter.com/coolcraft_net" target="_blank"> Twitter </a> </p>
            <p> <a href="https://facebook.com/coolcraftmc" target="_blank"> Facebook </a> </p>

            <br><br>

            <h1 class="sidebar_title" id="sidebar_title-info">
                Info
            </h1>

            <div class="sidebar_title_line" id="sidebar_title_line-info"> </div>

            <p> Server IP address: <b>play.coolcraft.me</b> </p>
            <p> Supported MC versions: 1.8 and above </p>

        </div>

    </div>



    <!-- Footer -->
    <?php
    include("../php/footer.php");
    ?>

    <!-- Other -->
    <?php
    $footer_image = "../images/icons/back-to-top.png";
    $footer_script = "../scripts/back-to-top.js";

    include("../php/back-to-top.php");
    ?>
</body>

</html>