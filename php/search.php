<?php
// Include the DB functions
include("db_connection.php");



function nm_db_get_results()
{
    // Set the required DB name and query
    $db_name = "network manager database";
    $db_query = "SELECT * FROM nm_players WHERE username LIKE '" . db_escape_string($db_name, $_GET["search"]) . "' LIMIT 1";



    // Call the function and save the results in a variable
    $db_results = db_get_results($db_name, $db_query);



    // Check if there is an error with the DB connection
    if (isset($_SESSION["error"])) {

        // Redirect a user to the login page with a "database connection" error
        header("Location: ../stats/?error=db_connection&database=nm");
        exit();
    }

    // Return the DB query results
    return $db_results;
}



function nm_db_get_results_10()
{
    // Set the required DB name and query
    $db_name = "network manager database";
    $db_query = "SELECT * FROM nm_players WHERE username LIKE '%" . db_escape_string($db_name, $_GET["query"]) . "%' LIMIT 10";



    // Call the function and save the results in a variable
    $db_results = db_get_results($db_name, $db_query);



    // Check if there is an error with the DB connection
    if (isset($_SESSION["error"])) {

        // Redirect a user to the login page with a "database connection" error
        header("Location: ../stats/?error=db_connection&database=nm");
        exit();
    }

    // Return the DB query results
    return $db_results;
}



function playtime(int $seconds)
{

    if ($seconds > 1000 * 60 * 60) {
        $playtime_value = round($seconds / 60 / 60 / 1000, 2);
        $playtime_type = "hours";
    } else if ($seconds > 1000 * 60) {
        $playtime_value = round($seconds / 60 / 1000, 2);
        $playtime_type = "minutes";
    } else if ($seconds > 1000) {
        $playtime_value = round($seconds / 1000, 2);
        $playtime_type = "seconds";
    } else {
        $playtime_value = $seconds;
        $playtime_type = "ms";
    }

    return $playtime_value . " " . $playtime_type;
}



function minecraft_version(int $protocol)
{

    if ($protocol < 47) {
        return "Unsupported (less than 1.8)";
    }

    if ($protocol == 47) {
        return "1.8";
    }

    if ($protocol >= 48 && $protocol <= 106) {
        return "1.9 Snapshot";
    }

    if ($protocol == 107) {
        return "1.9";
    }

    if ($protocol == 108) {
        return "1.9.1";
    }

    if ($protocol == 109) {
        return "1.9.2";
    }

    if ($protocol == 110) {
        return "1.9.4";
    }

    if ($protocol >= 111 && $protocol <= 209) {
        return "1.10 Snapshot";
    }

    if ($protocol == 210) {
        return "1.10";
    }

    if ($protocol >= 315 && $protocol <= 757) {
        return "1.11 through 1.18.1";
    }

    if ($protocol == 758) {
        return "1.18.2";
    }

    if ($protocol == 759) {
        return "1.19";
    }

    if ($protocol == 760) {
        return "1.19.2";
    }

    if ($protocol == 761) {
        return "1.19.3";
    }

    if ($protocol == 762) {
        return "1.19.4";
    }

    if ($protocol == 763) {
        return "1.20";
    }

    return "Unknown";
}



function player_status(int $status = 0)
{
    if ($status == 0) {
        return "Offline";
    }

    return "Online";
}



function output_search_results()
{

    if (isset($_SESSION["error"]) && $_GET["error"] == "db_connection" && $_GET["database"] == "nm") {
        echo ('
            <p class="error">
            ' . $_SESSION["error"] . '
            </p>
        ');
    } else {
        if (isset($_GET["search"])) {
            $db_results = nm_db_get_results();

            if (!($db_results && mysqli_num_rows($db_results) > 0)) {
                echo ('
                    <!-- Text -->
                    <p class="error">
                        Player not found.
                    </p>
                ');
            }

            while ($db_row = mysqli_fetch_array($db_results)) {
                echo ('
                    <!-- Title -->
                    <h2 class="title">
                        Stats
                    </h2>

                    <!-- Line -->
                    <hr class="line width_100">

                    <!-- Text -->
                    <p class="text">
                        Username: ' . $db_row["username"] . '
                    </p>

                    <!-- Text -->
                    <p class="text">
                        Country: ' . $db_row["country"] . '
                    </p>

                    <!-- Text -->
                    <p class="text">
                        Last used Minecraft version: ' . minecraft_version($db_row["version"]) . '
                    </p>

                    <!-- Text -->
                    <p class="text">
                        First login: ' . date("d F Y \a\\t H:i:s", $db_row["firstlogin"] / 1000) . '
                    </p>

                    <!-- Text -->
                    <p class="text">
                        Last login: ' . date("d F Y \a\\t H:i:s", $db_row["lastlogin"] / 1000) . '
                    </p>

                    <!-- Text -->
                    <p class="text">
                        Last logout: ' . date("d F Y \a\\t H:i:s", $db_row["lastlogout"] / 1000) . '
                    </p>

                    <!-- Text -->
                    <p class="text">
                        Current status: ' . player_status($db_row["online"]) . '
                    </p>

                    <!-- Text -->
                    <p class="text">
                        Playtime: ' . playtime($db_row["playtime"]) . '
                    </p>
                ');
            }
        }
    }
}



// Check if the request method is of type GET
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    // Check if $_GET super global variable is not null
    // Fixes "Undefined array key" error
    if (isset($_GET["query"])) {

        $db_results = nm_db_get_results_10();

        // Check if at least 1 character is entered in the search bar
        if (strlen($_GET["query"]) > 1) {

            // Output 10 usernames starting with entered letters
            while ($db_row = mysqli_fetch_array($db_results)) {

                // Output
                echo ('
                    <a class="search_link" href="?search=' . $db_row["username"] . '">
                        ' . $db_row["username"] . '
                    </a>
                ');
            }
        }
    }
}
?>