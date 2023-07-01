<!DOCTYPE html>



<?php
// Determine the prefix for file locations
$directory_prefix = "../";

// Include the main script
include($directory_prefix . "php/main.php");
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
    <title> CoolCraft | Vote </title>
    <link href="<?php echo ($favicon_image); ?>" rel="icon" type="image/png">

    <!-- External sources -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->

    <!-- General CSS files -->
    <link href="<?php echo ($coolcraft_css); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo ($index_css); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo ($animations_css); ?>" rel="stylesheet" type="text/css">

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
            <img alt="Vote for the CoolCraft Network" class="section_bg bg" id="intro_section_bg_img" src="../Images/Hub Lobby - 4.png">

            <!-- Inner section -->
            <article class="inner cflex everything_center" id="intro_inner">

                <!-- Title -->
                <h1 class="title">
                    Vote for the CoolCraft Network
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
                        Voting links
                    </h2>

                    <!-- Line -->
                    <hr class="line width_100">

                    <!-- Text -->
                    <p class="text">

                        <a class="link" href="https://minecraftservers.org/vote/562711" target="_blank">
                            Minecraft Servers
                        </a>

                    </p>

                    <p class="text">

                        <a class="link" href="https://www.planetminecraft.com/server/coolcraft-4438963/vote" target="_blank">
                            Planet Minecraft
                        </a>

                    </p>

                    <p class="text">

                        <a class="link" href="https://minecraft-mp.com/server/238693/vote" target="_blank">
                            Minecraft Multiplayer
                        </a>

                    </p>

                    <p class="text">

                        <a class="link" href="https://topg.org/Minecraft/in-589285" target="_blank">
                            TopG
                        </a>

                    </p>

                    <p class="text">

                        <a class="link" href="https://www.trackyserver.com/server/coolcraft-601359" target="_blank">
                            TrackyServer
                        </a>

                    </p>

                    <p class="text">

                        <a class="link" href="https://topminecraftservers.org/vote/13514" target="_blank">
                            Top Minecraft Servers
                        </a>

                    </p>

                    <p class="text">

                        <a class="link" href="https://minecraft-server-list.com/server/448957/vote" target="_blank">
                            Minecraft Server List
                        </a>

                    </p>

                    <p class="text">

                        <a class="link" href="https://minecraft-server.net/vote/Davy" target="_blank">
                            Minecraft Server
                        </a>

                    </p>

                    <p class="text">

                        <a class="link" href="https://topmcservers.com/server/547/vote" target="_blank">
                            Top Minecraft Servers
                        </a>

                    </p>

                    <p class="text">

                        <a class="link" href="https://mc-lists.org/server-coolcraft.1119/vote" target="_blank">
                            MC-Lists
                        </a>

                    </p>

                    <p class="text">

                        <a class="link" href="https://www.earlyshiftserverlist.com/server-coolcraft.38/vote" target="_blank">
                            The Early Shift
                        </a>

                    </p>

                    <p class="text">

                        <a class="link" href="https://minestatus.net/server/vote/play.coolcraft.me" target="_blank">
                            Minestatus
                        </a>

                    </p>

                    <!-- WITH LOGOS
<p class="text">
<a class="link" href="https://minecraftservers.org/vote/562711" target="_blank">
    Minecraft Servers
</a>
</p>

<p class="text">
<a class="link" href="https://www.planetminecraft.com/server/coolcraft-4438963/vote" target="_blank">
    <img alt="Planet Minecraft" class="nav_img" id="optionslightdark" src="https://www.planetminecraft.com/images/layout/themes/modern/planetminecraft_logo.png" />
</a>
</p>

<p class="text">
<a class="link" href="https://minecraft-mp.com/server/238693/vote" target="_blank">
    Minecraft Multiplayer
</a>
</p>

<p class="text">
<a class="link" href="https://topg.org/Minecraft/in-589285" target="_blank">
    <img alt="TopG" class="" id="" src="https://topg.org/style/images/topg-logo.gif" />
</a>
</p>

<p class="text">
<a class="link" href="https://www.trackyserver.com/server/coolcraft-601359" target="_blank">
    <img alt="TrackyServer" class="" id="" src="https://www.trackyserver.com/pages/logos/logo-rond.png" />
</a>
</p>

<p class="text">
<a class="link" href="https://topminecraftservers.org/vote/13514" target="_blank">
    Top Minecraft Servers
</a>
</p>

<p class="text">
<a class="link" href="https://minecraft-server-list.com/server/448957/vote" target="_blank">
    <img alt="Minecraft Server List" class="" id="" src="https://cdn.minecraft-server-list.com/img/logo.webp" />
</a>
</p>

<p class="text">
<a class="link" href="https://minecraft-server.net/vote/Davy" target="_blank">
    Minecraft-Server
</a>
</p>

<p class="text">
<a class="link" href="https://topmcservers.com/server/547/vote" target="_blank">
    <img alt="Top MC Servers" class="" id="" src="https://topmcservers.com/CSS/TopMinecraftServers-Website-Logo.png" />
</a>
</p>

<p class="text">
<a class="link" href="https://mc-lists.org/server-coolcraft.1119/vote" target="_blank">
    <img alt="MC-Lists" class="" id="" src="https://mc-lists.org/CSS/logo.png?9" />
</a>
</p>

<p class="text">
<a class="link" href="https://www.earlyshiftserverlist.com/server-coolcraft.38/vote" target="_blank">
    <img alt="The Early Shift" class="" id="" src="https://www.earlyshiftserverlist.com/CSS/minecraftserverlist.png" />
</a>
</p>
-->
                </article>

            </section>

            <!-- ASIDE -->
            <aside class="sidebar cflex" id="sidebar_section">

                <?php
                include($directory_prefix . "Parts/sidebar.php");
                ?>

            </aside>

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