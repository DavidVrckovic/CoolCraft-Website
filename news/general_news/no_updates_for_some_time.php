<?php
// Start the session
session_start();

// Links
$directory_level = 2;
include("../../php/links.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">

    <!-- Title and Favicon -->
    <title> CoolCraft | News | CoolCraft will not receive updates for some time </title>
    <link href="../../images/icons/coolcraft_icon.png" rel="icon" type="image/png" />

    <!-- External sources -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>

    <!-- General CSS files -->
    <!--<link href="index.css" rel="stylesheet" type="text/css" />-->
    <link href="../../styles/index.css" rel="stylesheet" type="text/css" />
    <link href="../../styles/content-sidebar.css" rel="stylesheet" type="text/css" />

    <!-- Specific CSS files -->
    <link href="../../styles/back_to_top.css" rel="stylesheet" type="text/css" />
    <link href="../../styles/dark_mode.css" rel="stylesheet" type="text/css" />
    <link href="../../styles/footer.css" rel="stylesheet" type="text/css" />
    <link href="../../styles/navigation.css" rel="stylesheet" type="text/css" />
</head>



<body>
    <!-- Header and Navigation -->
    <?php
    $nav_faq = "../../faq";
    $nav_home = "../../";
    $nav_info = "../../info";
    $nav_gamemodes = "../../gamemodes";
    $nav_news = "../";
    $nav_store = "../../store";

    include("../../php/navigation.php");
    ?>



    <!-- CONTENT Banner -->
    <div class="section" id="section-introduction">
        <img alt="Banner image" class="section" id="section_banner-introduction" src="../../images/Hub Lobby - 8.png" />
        <div class="inner_section" id="inner_section-introduction">

            <h1 class="title" id="title-introduction">
                CoolCraft will not receive updates for some time
            </h1>

        </div>
    </div>

    <!-- CONTENT -->
    <div class="content">

        <!-- MAIN -->
        <div class="main">

            <h1 class="main_title" id="main_title-info">
                <b> Details </b>
            </h1>

            <div class="main_title_line" id="main_title_line-info"> </div>

            <div class="main_text" id="main_text-info">
                <b> Message: </b>
                <br>
                School has been more and more stressful lately and I am barely keeping up. There are many projects to do, exams and quite a bit of homework on top of that as well. I really want to work on the server, make some new game modes, fix things up, and be with the community, but it is very hard for me to do everything at once and I am starting to feel overwhelmed and depressed. I guess the good thing is that I am working on a project for school which will eventually have a use for the server. I aim to get back to being active on the server somewhere in mid-June. Thank you for understanding.
                <br><br>
                Have a nice day, stay safe and take care!
                <br><br>
                - Davy
                <br><br>

                <b> Published: </b> 8 May 2021

                <br><br><br>
            </div>
        </div>

        <!-- SIDEBAR -->
        <div class="sidebar" id="sidebar">

            <?php
            include("../../php/sidebar.php");
            ?>

        </div>

    </div>



    <!-- Footer -->
    <?php
    include("../../php/footer.php");
    ?>

    <!-- Other -->
    <?php
    include("../../php/back_to_top.php");
    ?>
</body>

</html>