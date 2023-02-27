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
    <title> CoolCraft > Login </title>
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
    <!-- Header & Navigation -->
    <?php
    include($directory_prefix . "Parts/navigation.php");
    ?>



    <!-- CONTENT -->
    <div class="content">

        <!-- MAIN -->
        <div class="main">

            <!-- Section -->
            <div class="section" id="section-introduction">
                <img alt="Banner image" class="section" id="section_banner-introduction" src="../images/Hub Lobby - 5.png" />
                <div class="inner_section" id="inner_section-introduction">

                    <h1 class="title" id="title-introduction">
                        Authentification
                    </h1>

                </div>
            </div>

            <!-- Login form -->
            <div class="form">
                <form action="../php/authentication.php" class="login" method="POST">
                    <h1>
                        Login
                    </h1>
                    <p>
                        Please fill the information below to log into your account.
                    </p>

                    <hr>

                    <label class="input_title" for="input_username">
                        Username
                    </label>
                    <input class="input_field" id="input_username" name="username" placeholder="Enter username" type="text" required>

                    <!--<label for="input_email">
                        <b>Email</b>
                    </label>
                    <input id="input_email" name="email" placeholder="Enter email" type="text" required>-->

                    <label class="input_title" for="input_password">
                        Password
                    </label>
                    <input class="input_field" id="input_password" name="password" placeholder="Enter password" type="password" required>

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

                    <button class="login" id="login" type="submit">
                        Login
                    </button>
                    <a href="#login"></a>
                </form>
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