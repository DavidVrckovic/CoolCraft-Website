<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">

    <!-- Title and Favicon -->
    <title> CoolCraft | Info </title>
    <link href="../images/icons/coolcraft_icon.png" rel="icon" type="image/png" />

    <!-- CSS files -->
    <link href="../styles/style.css" rel="stylesheet" type="text/css" />
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="../styles/index.css" rel="stylesheet" type="text/css" />
    <link href="../styles/header.css" rel="stylesheet" type="text/css" />
    <link href="../styles/navigation.css" rel="stylesheet" type="text/css" />
    <link href="../styles/footer.css" rel="stylesheet" type="text/css" />

    <!-- External sources -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>



<body>
    <!-- Scripts -->
    <script src="../scripts/script.js"></script>
    <script src="../scripts/copy-to-clipboard.js"></script>

    <!-- Header and Navigation -->
    <?php
    include("../php/header_modified.php");
    include("../php/navigation.php");
    ?>

    <!-- Content -->
    <div class="section" id="section1">
        <img alt="Banner image" class="section_banner" id="section1_banner" src="../images/pic1.png" />
        <div class="section_text" id="introduction">

            Play Now!

        </div>
    </div>

    <div class="content" id="content">
        <div class="main" id="main">

            <h1 class="title" id="title">
                <b> Information and details </b>
            </h1>

            <div class="line_title"> </div>

            <div class="text">
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

        <div class="sidebar">

            <h1 class="contact">
                <b> Contact us </b>
            </h1>

            <div class="line_contact"> </div>

            <p> <a href="https://discord.com/invite/nnvvCr7" target="_blank"> Discord </a> </p>
            <p> <a href="https://twitter.com/coolcraft_net" target="_blank"> Twitter </a> </p>
            <p> <a href="https://facebook.com/coolcraftmc" target="_blank"> Facebook </a> </p>

            <br><br>

            <h1 class="info">
                <b> Info </b>
            </h1>

            <div class="line_info"> </div>

            <p> Server IP address: <b>play.coolcraft.me</b> </p>
            <p> Supported MC versions: 1.8 and above </p>

        </div>
    </div>
    <br><br><br>


    <?php
    include("../php/footer.php");
    ?>
</body>

</html>