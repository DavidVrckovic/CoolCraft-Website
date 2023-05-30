<?php
// Start the session
session_start();



// Parse the DB server data from the file
$database = parse_ini_file("../Protected/config.ini", true);



// Check which DB is required
if ($required_db == "auth") {

    // Open connection to the DB server
    $db_connection = mysqli_connect(
        $database["auth database"]["db hostname"],
        $database["auth database"]["db username"],
        $database["auth database"]["db password"],
        $database["auth database"]["db database"]
    );

    // Check if there is a connection error with the DB server
    if (mysqli_connect_errno()) {

        // Save the error info
        $_SESSION["error"] = "Failed to connect to the DB server: " . mysqli_connect_error();
    }
}



// Check which DB is required
if ($required_db == "bedwars") {

    // Open connection to the DB server
    $db_connection = mysqli_connect(
        $database["bedwars database"]["db hostname"],
        $database["bedwars database"]["db username"],
        $database["bedwars database"]["db password"],
        $database["bedwars database"]["db database"]
    );

    // Check if there is a connection error with the DB server
    if (mysqli_connect_errno()) {

        // Save the error info
        $_SESSION["error"] = "Failed to connect to the DB server: " . mysqli_connect_error();
    }
}



// Check which DB is required
if ($required_db == "luckperms") {

    // Open connection to the DB server
    $db_connection = mysqli_connect(
        $database["luckperms database"]["db hostname"],
        $database["luckperms database"]["db username"],
        $database["luckperms database"]["db password"],
        $database["luckperms database"]["db database"]
    );

    // Check if there is a connection error with the DB server
    if (mysqli_connect_errno()) {

        // Save the error info
        $_SESSION["error"] = "Failed to connect to the DB server: " . mysqli_connect_error();
    }
}



// Check which DB is required
if ($required_db == "network manager") {

    // Open connection to the DB server
    $db_connection = mysqli_connect(
        $database["network manager database"]["db hostname"],
        $database["network manager database"]["db username"],
        $database["network manager database"]["db password"],
        $database["network manager database"]["db database"]
    );

    // Check if there is a connection error with the DB server
    if (mysqli_connect_errno()) {

        // Save the error info
        $_SESSION["error"] = "Failed to connect to the DB server: " . mysqli_connect_error();
    }
}



// Check which DB is required
if ($required_db == "skywars") {

    // Open connection to the DB server
    $db_connection = mysqli_connect(
        $database["skywars database"]["db hostname"],
        $database["skywars database"]["db username"],
        $database["skywars database"]["db password"],
        $database["skywars database"]["db database"]
    );

    // Check if there is a connection error with the DB server
    if (mysqli_connect_errno()) {

        // Save the error info
        $_SESSION["error"] = "Failed to connect to the DB server: " . mysqli_connect_error();
    }
}



// Check which DB is required
if ($required_db == "all") {

    // Open connection to the MySQL DB servers
    $auth_db_connection = mysqli_connect($auth_db_hostname, $auth_db_username, $auth_db_password, $auth_db_name);

    // Check connection to the MySQL DB server
    if (mysqli_connect_errno()) {
        $_SESSION["error"] = "Failed to connect to the MySQL server: " . mysqli_connect_error();
        header("Location: ../login/?error=mysql_connection");
        exit();
    }

    $bw_db_connection = mysqli_connect($bw_db_hostname, $bw_db_username, $bw_db_password, $bw_db_name);

    // Check connection to the MySQL DB server
    if (mysqli_connect_errno()) {
        $_SESSION["error"] = "Failed to connect to the MySQL server: " . mysqli_connect_error();
        header("Location: ../login/?error=mysql_connection");
        exit();
    }

    $lp_db_connection = mysqli_connect($lp_db_hostname, $lp_db_username, $lp_db_password, $lp_db_name);

    // Check connection to the MySQL DB server
    if (mysqli_connect_errno()) {
        $_SESSION["error"] = "Failed to connect to the MySQL server: " . mysqli_connect_error();
        header("Location: ../login/?error=mysql_connection");
        exit();
    }

    $nm_db_connection = mysqli_connect($nm_db_hostname, $nm_db_username, $nm_db_password, $nm_db_name);

    // Check connection to the MySQL DB server
    if (mysqli_connect_errno()) {
        $_SESSION["error"] = "Failed to connect to the MySQL server: " . mysqli_connect_error();
        header("Location: ../login/?error=mysql_connection");
        exit();
    }

    $sw_db_connection = mysqli_connect($sw_db_hostname, $sw_db_username, $sw_db_password, $sw_db_name);

    // Check connection to the MySQL DB server
    if (mysqli_connect_errno()) {
        $_SESSION["error"] = "Failed to connect to the MySQL server: " . mysqli_connect_error();
        header("Location: ../login/?error=mysql_connection");
        exit();
    }
}

?>

<hr>