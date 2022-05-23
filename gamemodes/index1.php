<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">

    <!-- Title and Favicon -->
    <title> CoolCraft | Game modes </title>
    <link href="../images/icons/coolcraft_icon.png" rel="icon" type="image/png" />

    <!-- CSS files -->
    <link href="index.css" rel="stylesheet" type="text/css" />
    <link href="../styles/index.css" rel="stylesheet" type="text/css" />
    <link href="../styles/content-sidebar.css" rel="stylesheet" type="text/css" />
    <link href="../styles/navigation.css" rel="stylesheet" type="text/css" />
    <link href="../styles/footer.css" rel="stylesheet" type="text/css" />
    <link href="../styles/back-to-top.css" rel="stylesheet" type="text/css" />

    <!-- External sources -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
</head>



<body>
    <!-- Scripts -->
    <!--<script src="../scripts/script.js"></script>-->

    <!-- Header and Navigation -->
    <?php
    include("../php/navigation.php");
    ?>

    <!-- Content -->


    <div class="section" id="section-survival">
        <img alt="Banner image" class="section" id="section_banner-survival" src="../images/factions_spawn.png" />
        <div class="inner_section" id="inner_section-survival">

            <a class="title" href="survival" id="serverlinks">
                <h1 class="title" id="title-survival">
                    <b> Survival </b>
                </h1>
            </a>

            <div class="section_line" id="section_line-survival"> </div>

            <div class="description" id="description-survival">
                One of the main game modes in Minecraft.
                <br>
                A peaceful singleplayer/multiplayer game mode where players must collect resources, build bases, battle mobs, eat, and explore the world in an effort to thrive and survive.
            </div>

        </div>
    </div>

    <div class="section" id="section-factions">
        <img alt="Banner image" class="section" id="section_banner-factions" src="../images/factions_spawn.png" />
        <div class="inner_section" id="inner_section-factions">

            <a class="title" href="factions" id="serverlinks">
                <h1 class="title" id="title-factions">
                    <b> Factions </b>
                </h1>
            </a>

            <div class="section_line" id="section_line-factions"> </div>

            <div class="description" id="description-factions">
                A competitive PvP game mode that lets players team up by joining different factions. Players within the same faction work together to gather resources, build bases, protect their land, recruit new members and raid other factions.
            </div>

        </div>
    </div>

    <div class="section" id="section-skyblock">
        <img alt="Banner image" class="section" id="section_banner-skyblock" src="../images/skyblock_spawn.png" />
        <div class="inner_section" id="inner_section-skyblock">

            <a class="title" href="skyblock" id="serverlinks">
                <h1 class="title" id="title-skyblock">
                    <b> SkyBlock </b>
                </h1>
            </a>

            <div class="section_line" id="section_line-skyblock"> </div>

            <div class="description" id="description-skyblock">
                A peaceful singleplayer/multiplayer game mode where players spawn on a floating
                <br>
                island and must survive and complete challenges with the resources available.
            </div>

        </div>
    </div>

    <div class="section" id="section-prison">
        <img alt="Banner image" class="section" id="section_banner-prison" src="../images/prison_spawn.png" />
        <div class="inner_section" id="inner_section-prison">

            <a class="title" href="prison" id="serverlinks">
                <h1 class="title" id="title-prison">
                    <b> Prison </b>
                </h1>
            </a>

            <div class="section_line" id="section_line-prison"> </div>

            <div class="description" id="description-prison">
                A peaceful singleplayer/multiplayer game mode where players work hard in mines
                <br>
                as prisoners to progress through ranks and obtain freedom. As the ranking gets
                <br>
                higher, mining gets harder.
            </div>

        </div>
    </div>

    <div class="section" id="section-creative">
        <img alt="Banner image" class="section" id="section_banner-creative" src="../images/factions_spawn.png" />
        <div class="inner_section" id="inner_section-creative">

            <a class="title" href="creative" id="serverlinks">
                <h1 class="title" id="title-creative">
                    <b> Creative </b>
                </h1>
            </a>

            <div class="section_line" id="section_line-creative"> </div>

            <div class="description" id="description-creative">
                A peaceful singleplayer/multiplayer game mode where players have access to all
                <br>
                blocks and items in the game. Players can build what they want and show off
                <br>
                their builds to others.
            </div>

        </div>
    </div>

    <div class="section" id="section-minigames">
        <img alt="Banner image" class="section" id="section_banner-minigames" src="../images/minigames_lobby.png" />
        <div class="inner_section" id="inner_section-minigames">

            <a class="title" href="minigames" id="serverlinks">
                <h1 class="title" id="title-minigames">
                    <b> Minigames </b>
                </h1>
            </a>

            <div class="section_line" id="section_line-minigames"> </div>

            <div class="description" id="description-minigames">
                <b> Minigames </b> is a mix of many different smaller game modes.
                <br>
                Every minigame has its own unique gameplay.
            </div>

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