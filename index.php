<!DOCTYPE html>



<?php
// Determine the prefix for file locations
$directory_prefix = "";

// Include the links file
include($directory_prefix . "php/links.php");
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
    <title> CoolCraft - Minecraft server network </title>
    <link href="<?php echo ($favicon_image); ?>" rel="icon" type="image/png">

    <!-- External sources -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
        <section class="cflex everything_center has_bg_img height_normal" id="welcome_section">

            <!-- Background image -->
            <img alt="Section background image" class="section_bg bg" id="welcome_section_bg_img" src="Images/Hub Lobby - 1.png">

            <!-- Inner section -->
            <article class="inner cflex everything_center" id="welcome_inner">

                <!-- Title -->
                <h1 class="title">
                    What is CoolCraft?
                </h1>

                <!-- Line -->
                <hr class="line cc">

                <!-- Text -->
                <div class="title_text">

                    <p class="title_text">
                        CoolCraft is a Minecraft server network with many different game modes for you to check out!
                    </p>

                    <p class="title_text">
                        You will find a variety of gameplay and activities for you and your friends.
                    </p>

                </div>

            </article>

        </section>

        <!-- SECTION -->
        <section class="cflex everything_center has_bg_color height_normal" id="trailer_section">

            <!-- Inner section -->
            <article class="inner cflex everything_center" id="trailer_inner">

                <!-- Title -->
                <h1 class="title">
                    Watch the trailer
                </h1>

                <!-- Line -->
                <hr class="line cc">

                <!-- YouTube Video Trailer -->
                <iframe allow="accelerometer; autoplay; clipboard-write; encrypted-media; fullscreen; gyroscope; picture-in-picture" class="trailer" src="https://www.youtube.com/embed/7jIcHdK2ZJU" title="Trailer"></iframe>

            </article>

        </section>

        <!-- SECTION -->
        <section class="cflex everything_center has_bg_img height_normal" id="why_section">

            <!-- Background image -->
            <img alt="Section background image" class="section_bg bg" id="why_section_bg_img" src="Images/Minigames Lobby - 1.png">

            <!-- Inner section -->
            <article class="inner cflex everything_center" id="why_inner">

                <!-- Title -->
                <h1 class="title">
                    Why CoolCraft?
                </h1>

                <!-- Line -->
                <hr class="line cc">

                <!-- Text -->
                <div class="title_text">

                    <p class="title_text">
                        We are always trying to put more features in, add more game modes and improve the experience overall!
                    </p>

                    <p class="title_text">
                        We have a very helpful team that is making everything simple, enjoyable and polished.
                    </p>

                </div>

            </article>

        </section>

        <!-- SECTION -->
        <section class="cflex everything_center has_bg_color height_normal" id="support_section">

            <!-- Inner section -->
            <article class="inner cflex everything_center" id="support_inner">

                <!-- Title -->
                <h1 class="title">
                    Need support?
                </h1>

                <!-- Line -->
                <hr class="line cc">

                <!-- Text -->
                <div class="title_text">

                    <p class="title_text">
                        <a class="link" href="faq">Click here</a> to check out our FAQ where you might find answers to common issues and questions.
                    </p>

                    <p class="title_text">
                        You can always contact us directly if you have questions or suggestions! To do so, follow these links:
                        <a class="link" href="https://discord.com/invite/nnvvCr7" target="_blank"> Discord</a>,
                        <a class="link" href="https://twitter.com/coolcraft_net" target="_blank"> Twitter</a> or
                        <a class="link" href="https://facebook.com/coolcraftmc" target="_blank">Facebook</a>.
                    </p>

                </div>

            </article>

        </section>

        <!-- SECTION -->
        <section class="cflex everything_center has_bg_img height_normal" id="join_section">

            <!-- Background image -->
            <img alt="Section background image" class="section_bg bg" id="join_section_bg_img" src="Images/SkyWars Lobby - 1.png">

            <!-- Inner section -->
            <article class="inner cflex everything_center" id="join_inner">

                <!-- Title -->
                <h1 class="title">
                    What are you waiting for?
                </h1>

                <!-- Line -->
                <hr class="line cc">

                <!-- Text -->
                <div class="title_text">

                    <p class="title_text">
                        We can't wait to see you play and explore! Join us now!
                    </p>

                    <p class="title_text">

                        <button class="copy_button" id="copy_button">
                            Click here to copy IP
                        </button>

                    </p>

                </div>

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