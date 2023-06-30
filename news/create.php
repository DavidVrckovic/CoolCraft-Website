<!DOCTYPE html>



<?php
// Determine the prefix for file locations
$directory_prefix = "../";

// Include the links file
include($directory_prefix . "php/links.php");



// Include the news script
include($directory_prefix . "php/news.php");
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
    <title> CoolCraft | News Creator </title>
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
            <img alt="News and Updates" class="section_bg bg" id="intro_section_bg_img" src="../Images/Hub Lobby - 3.png">

            <!-- Inner section -->
            <article class="inner cflex everything_center" id="intro_inner">

                <!-- Title -->
                <h1 class="title">
                    News Creator
                </h1>

            </article>

        </section>

        <!-- CONTENT -->
        <div class="content flex has_bg_color">

            <!-- SECTION -->
            <section class="main wflex" id="intro_section">

                <!-- Auth form -->
                <form action="../php/create_news.php" class="auth" id="create_news" method="POST">

                    <!-- Title -->
                    <h2 class="title">
                        Create News
                    </h2>

                    <!-- Line -->
                    <hr class="form width_100">

                    <!-- Input title -->
                    <label class="input_title" for="input_news_id">
                        News ID
                    </label>

                    <!-- Input field -->
                    <input class="input_field" id="input_news_id" name="news_id" placeholder="Enter News ID" type="text" required>

                    <!-- Input title -->
                    <label class="input_title" for="input_news_type">
                        News type
                    </label>

                    <!-- Input field -->
                    <input class="input_field" id="input_news_type" name="news_type" placeholder="Enter News type" type="text" required>

                    <!-- Input title -->
                    <label class="input_title" for="input_news_title">
                        News title
                    </label>

                    <!-- Input field -->
                    <input class="input_field" id="input_news_title" name="news_title" placeholder="Enter News title" type="text" required>

                    <!-- Input title -->
                    <label class="input_title" for="input_news_description">
                        News description
                    </label>

                    <!-- Input field -->
                    <textarea class="input_field" id="input_news_description" name="news_description" placeholder="Enter News description" rows="15" form="create_news"></textarea>

                    <!-- Input title -->
                    <label class="input_title" for="input_news_changes">
                        News changes
                    </label>

                    <!-- Input field -->
                    <textarea class="input_field" id="input_news_changes" name="news_changes" placeholder="Enter News changes" rows="15" form="create_news"></textarea>

                    <!-- Input title -->
                    <label class="input_title" for="input_news_improvements">
                        News improvements
                    </label>

                    <!-- Input field -->
                    <textarea class="input_field" id="input_news_improvements" name="news_improvements" placeholder="Enter News improvements" rows="15" form="create_news"></textarea>

                    <!-- Input title -->
                    <label class="input_title" for="input_news_fixes">
                        News fixes
                    </label>

                    <!-- Input field -->
                    <textarea class="input_field" id="input_news_fixes" name="news_fixes" placeholder="Enter News fixes" rows="15" form="create_news"></textarea>

                    <?php
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "invalid_credentials") {
                            echo '<p class="error" style="color: red;"> The provided credentials are incorrect. </p>';
                        }
                        if ($_GET["error"] == "wrong_password") {
                            echo '<p class="error" style="color: red;"> The provided password is incorrect. </p>';
                        }
                        if ($_GET["error"] == "unknown_username") {
                            echo '<p class="error" style="color: red;"> The provided username is incorrect. </p>';
                        }
                        if (isset($_SESSION["error"]) && $_GET["error"] == "db_connection") {
                            echo '<p class="error" style="color: red;">' . $_SESSION["error"] . '</p>';
                        }
                    }
                    ?>

                    <!-- Submit button -->
                    <button class="login" id="login" type="submit">
                        Create
                    </button>

                </form>

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