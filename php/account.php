<?php
// Include the DB functions
include("db_connection.php");



// Check if a user is not logged in within the session
if (!isset($_SESSION["loggedin"])) {

    // Redirect a user to the login page
    header("Location: ../login");
    exit();
}



function lp_db_get_results()
{
    // Set the required DB name and query
    $db_name = "luckperms database";
    $db_query = "SELECT * FROM luckperms_players WHERE username LIKE '%" . db_escape_string($db_name, $_SESSION["user_username"]) . "%'";



    // Call the function and save the results in a variable
    $db_results = db_get_results($db_name, $db_query);



    // Check if there is an error with the DB connection
    if (isset($_SESSION["error"])) {

        // Redirect a user to the login page with a "database connection" error
        header("Location: ../account/?error=db_connection&database=lp");
        exit();
    }

    // Return the DB query results
    return $db_results;
}



function nm_db_get_results()
{
    // Set the required DB name and query
    $db_name = "network manager database";
    $db_query = "SELECT * FROM nm_players WHERE username LIKE '" . db_escape_string($db_name, $_SESSION["user_username"]) . "'";



    // Call the function and save the results in a variable
    $db_results = db_get_results($db_name, $db_query);



    // Check if there is an error with the DB connection
    if (isset($_SESSION["error"])) {

        // Redirect a user to the login page with a "database connection" error
        header("Location: ../account/?error=db_connection&database=nm");
        exit();
    }

    // Return the DB query results
    return $db_results;
}



function sw_db_get_results()
{
    // Set the required DB name and query
    $db_name = "skywars database";
    $db_query = "SELECT * FROM sw_player WHERE player_name LIKE '" . db_escape_string($db_name, $_SESSION["user_username"]) . "'";



    // Call the function and save the results in a variable
    $db_results = db_get_results($db_name, $db_query);



    // Check if there is an error with the DB connection
    if (isset($_SESSION["error"])) {

        // Redirect a user to the login page with a "database connection" error
        header("Location: ../account/?error=db_connection&database=sw");
        exit();
    }

    // Return the DB query results
    return $db_results;
}



function output_general_info_lp(mysqli_result|bool $db_results)
{
    if ($db_results && mysqli_num_rows($db_results) > 0) {
        while ($row = mysqli_fetch_array($db_results)) {
            if ($row["primary_group"] == "default" || $row["primary_group"] == "player") {
                $rank = "Player";
            } else {
                $rank = $row["primary_group"];
            }
            echo ('
                <div class="main_text" id="main_text-rank">
                    Username: ' . $_SESSION["user_username"] . '
                    <br>
                    Rank: ' . $rank . '
                </div>
            ');
        }
    } else {
        echo ('
            <div class="main_text" id="main_text-rank">
                Username: ' . $_SESSION["user_username"] . '
                <br>
                Rank: Player
            </div>
        ');
    }
}



function output_skywars_stats(mysqli_result|bool $db_results)
{
    if ($db_results && mysqli_num_rows($db_results) > 0) {
        while ($row = mysqli_fetch_array($db_results)) {
            echo ('
                <div class="gamemode" id="gamemode-survival">
                    <div class="gamemode_image">
                        <img alt="Game mode banner" class="gamemode_banner" src="../images/SkyWars Lobby - 1.png">
                        <div class="gamemode_text">
                            Wins: ' . $row["wins"] . '
                            <br>
                            Losses: ' . $row["losses"] . '
                            <br>
                            Kills: ' . $row["kills"] . '
                            <br>
                            Deaths: ' . $row["deaths"] . '
                            <br>
                            XP: ' . $row["xp"] . '
                            <br>
                        </div>
                    </div>
                </div>
            ');
        }
    } else {
        echo ('
            <div class="gamemode" id="gamemode-survival">
                <div class="gamemode_image">
                    <img alt="Game mode banner" class="gamemode_banner" src="../images/SkyWars Lobby - 1.png">
                    <div class="gamemode_text">
                        No data
                    </div>
                </div>
            </div>
        ');
    }
}
?>