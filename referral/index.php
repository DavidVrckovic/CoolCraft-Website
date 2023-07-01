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
    <title> CoolCraft | Referrals </title>
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
            <img alt="Referrals" class="section_bg bg" id="intro_section_bg_img" src="../Images/Hub Lobby - 4.png">

            <!-- Inner section -->
            <article class="inner cflex everything_center" id="intro_inner">

                <!-- Title -->
                <h1 class="title">
                    Referrals
                </h1>

            </article>

        </section>

        <!-- SECTION -->
        <section class="content cflex has_bg_color" id="main_section">

            <!-- Inner section -->
            <article class="general">

                <!-- Title -->
                <h2 class="title">
                    Passive income
                </h2>

                <!-- Line -->
                <hr class="line width_100">

                <!-- Text -->
                <p class="text">

                    <a class="link" href="https://r.honeygain.me/DAVID2925B" target="_blank"> <!-- https://r.honeygain.me/DAVY54E2E7 -->
                        Honeygain
                    </a>

                </p>

                <!-- Text -->
                <p class="text">

                    <a class="link" href="https://pawns.app/?r=davidvrc" target="_blank"> <!-- https://iproyal.com/pawns?r=davy -->
                        IPRoyal Pawns
                    </a>

                </p>

                <!-- Text -->
                <p class="text">

                    <a class="link" href="https://packetstream.io/?psr=2I6x" target="_blank"> <!-- https://packetstream.io/?psr=1Gdh -->
                        PacketStream
                    </a>

                </p>

                <!-- Text -->
                <p class="text">

                    <a class="link" href="https://peer2profit.com/r/1681743204643d5d64b7d5e" target="_blank"> <!-- https://peer2profit.com/r/168199533064413642036b1 -->
                        Peer2Profit
                    </a>

                </p>

                <!-- Text -->
                <p class="text">

                    <a class="link" href="https://coin.onelink.me/ePJg/15ts5rg1" target="_blank">
                        COIN (mobile)
                    </a>

                </p>

                <!-- Text -->
                <p class="text">

                    <a class="link" href="https://refer.tapestri.io/c/164450" target="_blank">
                        Tapestri (mobile)
                    </a>

                </p>

            </article>

            <!-- Inner section -->
            <article class="general">

                <!-- Title -->
                <h2 class="title">
                    Crypto
                </h2>

                <!-- Line -->
                <hr class="line width_100">

                <!-- Text -->
                <p class="text">

                    <a class="link" href="https://sweatco.in/hi/davidvrckovic" target="_blank">
                        Sweatcoin
                    </a>

                </p>

                <!-- Text -->
                <p class="text">

                    <a class="link" href="https://minepi.com/DavyNavy" target="_blank">
                        Pi Network
                    </a>

                </p>

                <!-- Text -->
                <p class="text">

                    <a class="link" href="https://bee.com/en/download" target="_blank">
                        Bee Network - Invitation code: davynavy
                    </a>

                </p>

                <!-- Text -->
                <p class="text">

                    <a class="link" href="https://timestope.mojaik.com//davynavy" target="_blank">
                        TimeStope
                    </a>

                </p>

                <!-- Text -->
                <p class="text">

                    <a class="link" href="https://play.google.com/store/apps/details?id=com.cloud.earning" target="_blank">
                        Fone Network - Invitation code: te9wyu3x
                    </a>

                </p>

            </article>

            <!-- Inner section -->
            <article class="general">

                <!-- Title -->
                <h2 class="title">
                    Affiliate
                </h2>

                <!-- Line -->
                <hr class="line width_100">

                <!-- Text -->
                <p class="text">

                    <a class="link" href="https://joinhoney.com/ref/t7oh72r" target="_blank">
                        Honey
                    </a>

                </p>

            </article>

            <!-- Inner section -->
            <article class="general">

                <!-- Title -->
                <h2 class="title">
                    Games
                </h2>

                <!-- Line -->
                <hr class="line width_100">

                <!-- Text -->
                <p class="text">

                    <a class="link" href="https://worldoftanks.eu/referral/f653f18d8d6f4db7a97269091e71e3f8" target="_blank">
                        World of Tanks
                    </a>

                </p>

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
    ?>
</body>

</html>