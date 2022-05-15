<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">

    <!-- Title and Favicon -->
    <title> CoolCraft | Home </title>
    <link href="images/icons/coolcraft_icon.png" rel="icon" type="image/png" />

    <!-- CSS files -->
    <link href="styles/style.css" rel="stylesheet" type="text/css" />
    <link href="styles/index.css" rel="stylesheet" type="text/css" />
    <link href="styles/navigation.css" rel="stylesheet" type="text/css" />
    <link href="styles/footer.css" rel="stylesheet" type="text/css" />
    <link href="styles/back-to-top.css" rel="stylesheet" type="text/css" />

    <!-- External sources -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
</head>



<body>
    <!-- Scripts -->
    <script src="scripts/script.js"></script>

    <!-- Header and Navigation -->
    <?php
    include("php/navigation.php");
    ?>

    <!-- Content -->
    <div class="section" id="section-introduction" v-on:click="change">
        <img alt="Banner image" class="section" id="section_banner-introduction" :src="image" />
        <div class="inner_section" id="inner_section-introduction">

            <h1 class="title" id="title-introduction">
                <b> What is CoolCraft? </b>
            </h1>

            <div class="section_line" id="section_line-introduction"> </div>

            <div class="description" id="description-introduction">
                CoolCraft is a Minecraft server network with many different game modes for you to check out!
                <br>
                You will find a variety of gameplay and activities for you and your friends.
            </div>

        </div>
    </div>

    <div class="section" id="section-gamemodes">
        <div class="inner_section text" id="inner_section-gamemodes">

            <h1 class="title" id="title-gamemodes">
                <b> Game modes </b>
            </h1>

            <div class="section_line" id="section_line-gamemodes"> </div>

            <br>

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

    <div class="section" id="section-motivation">
        <img alt="Banner image" class="section" id="section_banner-motivation" src="images/pic2.png" />
        <div class="inner_section" id="inner_section-motivation">

            <h1 class="title" id="title-motivation">
                <b> Why CoolCraft? </b>
            </h1>

            <div class="section_line" id="section_line-motivation"> </div>

            <div class="description" id="description-motivation">
                We are always trying to put more features in, add more servers and improve the experience overall.
                <br>
                We have a very helpful team that is making everything simple, enjoyable and polished.
            </div>

        </div>
    </div>

    <div class="section" id="section-support">
        <div class="inner_section text" id="inner_section-support">

            <h1 class="title" id="title-support">
                <b> Need support? </b>
            </h1>

            <div class="section_line" id="section_line-support"> </div>

            <div class="description" id="description-support">
                You can always contact us directly if you have questions or suggestions! Follow these links:
                <a href="https://discord.com/invite/nnvvCr7" target="_blank"> Discord</a>,
                <a href="https://twitter.com/coolcraft_net" target="_blank"> Twitter</a> or
                <a href="https://facebook.com/coolcraftmc" target="_blank">Facebook</a>.
                <br>
                <a href="faq">Click here</a> to check out our FAQ where you might find some answers or
                <a href="support">click here</a> to get support.<br>
            </div>

        </div>
    </div>

    <div class="section" id="section-joinnow">
        <img alt="Banner image" class="section" id="section_banner-joinnow" src="images/pic4.png" />
        <div class="inner_section" id="inner_section-joinnow">

            <div class="description" id="description-joinnow">
                We can't wait to see you play and explore! Join us now!
                <br>
                Click here to copy IP
            </div>

        </div>
    </div>

    <!-- Footer -->
    <?php
    include("php/footer.php");
    ?>

    <!-- Other -->
    <?php
    include("php/back-to-top.php");
    ?>
</body>

</html>