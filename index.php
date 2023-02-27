<?php
// Start the session
session_start();

// Links
$directory_level = 0;
include("php/links.php");
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
    <title> CoolCraft - Minecraft server network </title>
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
    <!-- Scripts -->
    <script src="scripts/content_switcher.js"></script>

    <!-- Header & Navigation -->
    <?php
    include($directory_prefix . "Parts/navigation.php");
    ?>



    <!-- CONTENT -->
    <div class="content">

        <!-- MAIN -->
        <div class="main">

            <!-- Section -->
            <div class="section" id="section-introduction" v-on:click="change">
                <img alt="Banner image" class="section" id="section_banner-introduction" :src="introduction_image" />
                <div class="inner_section" id="inner_section-introduction">

                    <h1 class="title" id="title-introduction">
                        What is CoolCraft?
                    </h1>

                    <div class="section_line" id="section_line-introduction"> </div>

                    <div class="description" id="description-introduction">
                        CoolCraft is a Minecraft server network with many different game modes for you to check out!
                        <br>
                        You will find a variety of gameplay and activities for you and your friends.
                    </div>

                </div>
            </div>

            <!-- Section -->
            <div class="section text" id="section-gamemodes">
                <div class="inner_section text" id="inner_section-gamemodes">

                    <h1 class="title" id="title-gamemodes">
                        Game modes
                    </h1>

                    <div class="section_line" id="section_line-gamemodes"> </div>

                    <div class="description" id="description-gamemodes">
                        <a href="faq">Click here</a> to check out the list of game modes available to play.
                        <br>
                    </div>

                    <ul class="section_list" id="section_list-gamemodes">
                        <li class="switch" id="left_switch">
                            <div class="left" v-on:click="goleft">
                                <button class="switch"> &#8592; </button>
                            </div>
                        </li>
                        <a class="gamemode_link" id="serverlinks" :href="link1">
                            <li class="gamemode" id="gamemode1">
                                <div id="server1">
                                    <div class="gamemode_icon">
                                        <img alt="Icon" class="select_gamemode" id="image1" :src="image1" />
                                    </div>
                                    <div class="gamemode_name">
                                        {{ ime1 }}
                                    </div>
                                    <div class="gamemode_description">
                                        {{ desc1 }}
                                    </div>
                                </div>
                            </li>
                        </a>
                        <a class="gamemode_link" id="serverlinks" :href="link2">
                            <li class="gamemode" id="gamemode2">
                                <div id="server2">
                                    <div class="gamemode_icon">
                                        <img alt="Icon" class="select_gamemode" id="image2" :src="image2" />
                                    </div>
                                    <div class="gamemode_name">
                                        {{ ime2 }}
                                    </div>
                                    <div class="gamemode_description">
                                        {{ desc2 }}
                                    </div>
                                </div>
                            </li>
                        </a>
                        <a class="gamemode_link" id="serverlinks" :href="link3">
                            <li class="gamemode" id="gamemode3">
                                <div id="server3">
                                    <div class="gamemode_icon">
                                        <img alt="Icon" class="select_gamemode" id="image3" :src="image3" />
                                    </div>
                                    <div class="gamemode_name">
                                        {{ ime3 }}
                                    </div>
                                    <div class="gamemode_description">
                                        {{ desc3 }}
                                    </div>
                                </div>
                            </li>
                        </a>
                        <li class="switch" id="right_switch">
                            <div class="right" v-on:click="goright">
                                <button class="switch"> &#8594; </button>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>

            <!-- Section -->
            <div class="section" id="section-motivation">
                <img alt="Banner image" class="section" id="section_banner-motivation" src="images/Minigames Lobby - 1.png" />
                <div class="inner_section" id="inner_section-motivation">

                    <h1 class="title" id="title-motivation">
                        Why CoolCraft?
                    </h1>

                    <div class="section_line" id="section_line-motivation"> </div>

                    <div class="description" id="description-motivation">
                        We are always trying to put more features in, add more servers and improve the experience overall.
                        <br>
                        We have a very helpful team that is making everything simple, enjoyable and polished.
                    </div>

                </div>
            </div>

            <!-- Section -->
            <div class="section text" id="section-trailer">
                <div class="inner_section text" id="inner_section-trailer">

                    <h1 class="title" id="title-trailer">
                        Watch the trailer
                    </h1>

                    <div class="section_line" id="section_line-trailer"> </div>

                    <iframe allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="trailer" frameborder="0" src="https://www.youtube.com/embed/7jIcHdK2ZJU" title="Trailer"></iframe>

                </div>
            </div>

            <!-- Section -->
            <div class="section" id="section-joinnow">
                <img alt="Banner image" class="section" id="section_banner-joinnow" src="images/SkyBlock Spawn - 1.png" />
                <div class="inner_section" id="inner_section-joinnow">

                    <div class="description" id="description-joinnow">
                        We can't wait to see you play and explore! Join us now!
                        <br>
                        <a id="copy-text-btn" href="javascript:void(0)">
                            Click here</a> to copy IP
                    </div>

                </div>
            </div>

            <!-- Section -->
            <div class="section text" id="section-support">
                <div class="inner_section text" id="inner_section-support">

                    <h1 class="title" id="title-support">
                        Need support?
                    </h1>

                    <div class="section_line" id="section_line-support"> </div>

                    <div class="description" id="description-support">
                        <a href="faq">Click here</a> to check out our FAQ where you might find answers to common issues and questions.
                        <br><br>
                        You can always contact us directly if you have questions or suggestions! To do so, follow these links:
                        <a href="https://discord.com/invite/nnvvCr7" target="_blank"> Discord</a>,
                        <a href="https://twitter.com/coolcraft_net" target="_blank"> Twitter</a> or
                        <a href="https://facebook.com/coolcraftmc" target="_blank">Facebook</a>.
                        <br>
                    </div>

                </div>
            </div>

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