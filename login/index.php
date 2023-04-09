<!DOCTYPE html>
<?php
// Start the session
session_start();

// If the user is logged in, redirect to the index page
if (isset($_SESSION['loggedin'])) {
    header("Location: ../");
    exit();
}

// Links
$directory_level = 1;
include("../php/links.php");
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
    <title> CoolCraft | Login </title>
    <link href="<?php echo ($favicon_image); ?>" rel="icon" type="image/png">

    <!-- External sources -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- General CSS files -->
    <link href="<?php echo ($coolcraft_css); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo ($index_css); ?>" rel="stylesheet" type="text/css">

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
            <img alt="Authentification" class="section_bg bg" id="intro_section_bg_img" src="../Images/Hub Lobby - 5.png">

            <!-- Inner section -->
            <article class="inner cflex everything_center" id="intro_inner">

                <!-- Title -->
                <h1 class="title">
                    Authentification
                </h1>

            </article>

        </section>

        <!-- SECTION -->
        <section class="form has_bg_color">

            <!-- Auth form -->
            <form action="../php/authentication.php" class="auth" method="POST">

                <!-- Title -->
                <h2 class="title">
                    Login
                </h2>

                <!-- Text -->
                <p class="text">
                    Please fill the information below to log into your account.
                </p>

                <!-- Line -->
                <hr class="form width_100">

                <!-- Input title -->
                <label class="input_title" for="input_username">
                    Username
                </label>

                <!-- Input field -->
                <input class="input_field" id="input_username" name="username" placeholder="Enter your username" type="text" required>

                <!-- Input title -->
                <label class="input_title" for="input_password">
                    Password
                </label>

                <!-- Input field -->
                <input class="input_field" id="input_password" name="password" placeholder="Enter your password" type="password" required>

                <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == "invalid_credentials") {
                        echo '<p class="invalid_credentials" style="color: red;"> The provided credentials are incorrect. </p>';
                    }
                    if ($_GET['error'] == "wrong_password") {
                        echo '<p class="wrong_password" style="color: red;"> The provided password is incorrect. </p>';
                    }
                    if ($_GET['error'] == "unknown_username") {
                        echo '<p class="unknown_username" style="color: red;"> The provided username is incorrect. </p>';
                    }
                    if (isset($_SESSION['error'])) {
                        if ($_GET['error'] == "mysql_connection") {
                            echo '<p class="unknown_username" style="color: red;">' . $_SESSION['error'] . '</p>';
                        }
                    }
                }
                ?>

                <!-- Submit button -->
                <button class="login" id="login" type="submit">
                    Login
                </button>

            </form>

        </section>

    </main>



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