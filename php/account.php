<?php
// Include the DB functions
include($directory_prefix . "php/db_connection.php");



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
    $db_query = "SELECT * FROM nm_players WHERE username LIKE '" . $_SESSION["user_username"] . "' LIMIT 1";



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

    // Check if there are any results in the DB
    if ($db_results && mysqli_num_rows($db_results) > 0) {

        // Go through the DB rows
        while ($db_row = mysqli_fetch_array($db_results)) {

            // Check if the primary group is default
            if ($db_row["primary_group"] == "default") {

                // Change the primary group to Player
                $db_row["primary_group"] = "Player";
            }

            // Output the data
            echo ('
                <p class="text">
                    Rank: ' . ucfirst($db_row["primary_group"]) . '
                </p>
            ');
        }
    } else {
        echo ('
            <p class="text">
                Rank: unknown
            </p>
        ');
    }
}



function output_skywars_stats(mysqli_result|bool $db_results)
{
    // Check if there are any results in the DB
    if ($db_results && mysqli_num_rows($db_results) > 0) {

        // Go through the DB rows
        while ($db_row = mysqli_fetch_array($db_results)) {

            // Output the data
            echo ('
                <div class="gamemode" id="gamemode-survival">
                    <div class="gamemode_image">
                        <img alt="Game mode banner" class="gamemode_banner" src="../images/SkyWars Lobby - 1.png">
                        <div class="gamemode_text">
                            Wins: ' . $db_row["wins"] . '
                            <br>
                            Losses: ' . $db_row["losses"] . '
                            <br>
                            Kills: ' . $db_row["kills"] . '
                            <br>
                            Deaths: ' . $db_row["deaths"] . '
                            <br>
                            XP: ' . $db_row["xp"] . '
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