<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">

    <!-- Title and Favicon -->
    <title> CoolCraft | Login </title>
    <link href="images/icons/coolcraft_icon.png" rel="icon" type="image/png" />

    <!-- General CSS files -->
    <link href="index.css" rel="stylesheet" type="text/css" />
    <link href="styles/login.css" rel="stylesheet" type="text/css" />

    <!-- Specific CSS files -->
    <link href="styles/back-to-top.css" rel="stylesheet" type="text/css" />
    <link href="styles/footer.css" rel="stylesheet" type="text/css" />
    <link href="styles/navigation.css" rel="stylesheet" type="text/css" />

    <!-- External sources -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
</head>



<body>
    <!-- Scripts -->
    <!-- -->

    <!-- Header and Navigation -->
    <?php
    $header_image = "images/icons/coolcraft_icon.png";

    $nav_faq = "faq";
    $nav_home = "index.php";
    $nav_info = "info";
    $nav_gamemodes = "gamemodes";
    $nav_news = "news";
    $nav_store = "store";

    include("php/navigation.php");
    ?>



    <!-- CONTENT -->
    <div class="content">

        <!-- MAIN -->
        <div class="main">

            <form action="php/authentication.php" class="login" method="POST">
                <div class="form">
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
                    }
                    ?>

                    <!--<label for="input_password_repeat">
                        <b>Repeat Password</b>
                    </label>
                    <input id="input_password_repeat" name="password_repeat" placeholder="Repeat password" type="password" required>-->

                    <hr>

                    <p>
                        By creating an account you agree to our <a href="#">Terms & Privacy</a>.
                    </p>

                    <button class="login" type="submit">
                        Login
                    </button>
                </div>
            </form>

        </div>

    </div>



    <!-- Footer -->
    <?php
    include("php/footer.php");
    ?>

    <!-- Other -->
    <?php
    $footer_image = "images/icons/back-to-top.png";
    $footer_script = "scripts/back-to-top.js";

    include("php/back-to-top.php");
    ?>
</body>

</html>