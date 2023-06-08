<?php

// Function for connecting to the DB, performing a query and returning the result
function db_escape_string(string $db_name = "local database", string $string)
{

    // Parse the DB server data from the file
    $database = parse_ini_file("../Protected/config.ini", true);

    // Check if the DB server data is "false" meaning there is no data or something went wrong
    if ($database == false) {

        // Save the error info
        $_SESSION["error"] = "Failed to parse DB server data. Please try again.";

        // Exit the function with an error value (-1)
        return -1;
    }


    // Open connection to the DB server
    $db_connection = mysqli_connect(
        $database[$db_name]["db hostname"],
        $database[$db_name]["db username"],
        $database[$db_name]["db password"],
        $database[$db_name]["db database"]
    );


    // Check if there is a connection error with the DB server
    if (mysqli_connect_errno()) {

        // Save the error info
        $_SESSION["error"] = "Failed to connect to the DB server: " . mysqli_connect_error();

        // Exit the function with an error value (-1)
        return -1;
    }


    // Escape special charasters in a string and save the new string in a variable
    $escaped_string = mysqli_real_escape_string($db_connection, $string);


    // Close connection to the DB server
    mysqli_close($db_connection);


    // Return the escaped string
    return $escaped_string;
}



// Function for connecting to the DB, performing a query and returning the result
function db_get_results(string $db_name = "local database", string $db_query)
{

    // Parse the DB server data from the file
    $database = parse_ini_file("../Protected/config.ini", true);

    // Check if the DB server data is "false" meaning there is no data or something went wrong
    if ($database == false) {

        // Save the error info
        $_SESSION["error"] = "Failed to parse DB server data. Please try again.";

        // Exit the function with an error value (-1)
        return -1;
    }


    // Open connection to the DB server
    $db_connection = mysqli_connect(
        $database[$db_name]["db hostname"],
        $database[$db_name]["db username"],
        $database[$db_name]["db password"],
        $database[$db_name]["db database"]
    );


    // Check if there is a connection error with the DB server
    if (mysqli_connect_errno()) {

        // Save the error info
        $_SESSION["error"] = "Failed to connect to the DB server: " . mysqli_connect_error();

        // Exit the function with an error value (-1)
        return -1;
    }


    // Perform a query on the DB and save the results in a variable
    $db_results = mysqli_query($db_connection, $db_query);


    // Close connection to the DB server
    mysqli_close($db_connection);


    // Return the DB query results
    return $db_results;
}

?>