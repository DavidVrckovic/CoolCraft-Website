<?php
$required_db = "all";
include("mysql_connection.php");

// Check if $_GET super global variable is not null
// Fixes "Undefined array key" error
if (isset($_SESSION['loggedin'])) {

    // Get searched data with $_GET
    $login_search = $_SESSION['user_username'];
    $login_search = mysqli_real_escape_string($login_db_connection, $login_search);

    $lp_search = $_SESSION['user_username'];
    $lp_search = mysqli_real_escape_string($lp_db_connection, $lp_search);

    $nm_search = $_SESSION['user_username'];
    $nm_search = mysqli_real_escape_string($nm_db_connection, $nm_search);

    $sw_search = $_SESSION['user_username'];
    $sw_search = mysqli_real_escape_string($sw_db_connection, $sw_search);

    // Select searched data from the MySQL DB server
    $login_db_query = "SELECT * FROM authme WHERE realname LIKE '" . $login_search . "'";
    $login_db_results = mysqli_query($login_db_connection, $login_db_query);

    // Select searched data from the MySQL DB server
    $lp_db_query = "SELECT * FROM luckperms_players WHERE username LIKE '%" . $lp_search . "%'";
    $lp_db_results = mysqli_query($lp_db_connection, $lp_db_query);

    // Select searched data from the MySQL DB server
    $nm_db_query = "SELECT * FROM nm_players WHERE username LIKE '" . $nm_search . "'";
    $nm_db_results = mysqli_query($nm_db_connection, $nm_db_query);

    // Select searched data from the MySQL DB server
    $sw_db_query = "SELECT * FROM sw_player WHERE player_name LIKE '" . $sw_search . "'";
    $sw_db_results = mysqli_query($sw_db_connection, $sw_db_query);
}
?>