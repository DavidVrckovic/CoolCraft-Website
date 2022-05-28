<?php
$required_db = "all";
include("mysql_connection.php");

// Check if the request method is of type GET
if ($_SERVER['REQUEST_METHOD'] == "GET") {

    // Check if $_GET super global variable is not null
    // Fixes "Undefined array key" error
    if (isset($_GET['q'])) {

        // Get searched data with $_GET
        $login_search = $_GET['q'];
        $login_search = mysqli_real_escape_string($login_db_connection, $login_search);
        
        $lp_search = $_GET['q'];
        $lp_search = mysqli_real_escape_string($lp_db_connection, $lp_search);
        
        $nm_search = $_GET['q'];
        $nm_search = mysqli_real_escape_string($nm_db_connection, $nm_search);

        $sw_search = $_GET['q'];
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

    // Check if $_GET super global variable is not null
    // Fixes "Undefined array key" error
    if (isset($_GET['results'])) {
        
        // Get searched data with $_GET
        // Sent through ajax_search.js
        $search = $_GET['results'];
        $search = mysqli_real_escape_string($nm_db_connection, $search);

        // Select searched data from the MySQL DB server
        $db_query = "SELECT username FROM nm_players WHERE username LIKE '%" . $search . "%' LIMIT 10";
        $db_results = mysqli_query($nm_db_connection, $db_query);

        // Check if at least 1 character is entered in the search bar
        if (strlen($search) > 1) {
            
            // Output 10 usernames starting with entered letters
            while ($row = mysqli_fetch_array($db_results)) {
                echo '<a href="index.php?q=' . $row["username"] . '">' . $row["username"] . '</a><br>';
            }
        }
    }
}
?>