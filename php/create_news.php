<?php
// Start the session
session_start();



// Include the DB functions
include("db_connection.php");



// Check if the request method is not of type POST
if (!($_SERVER["REQUEST_METHOD"] == "POST")) {

    // Redirect a user to the login page
    header("Location: ../create");
    exit();
}



// Check if $_POST super global variables are set to NULL
// Fixes "Undefined array key" error
if (!isset($_POST["news_id"], $_POST["news_type"], $_POST["news_title"])) {

    // Redirect a user to the login page with a "invalid credentials" error
    header("Location: ../create/?error=invalid_credentials");
    exit();
}



// Set the required DB name and query
$db_name = "battlepass database";
$db_query = "INSERT INTO news (news_id, news_type, news_title, news_description, news_changes, news_improvements, news_fixes)
    VALUES (
        '" . $_POST["news_id"] . "',
        '" . $_POST["news_type"] . "',
        '" . db_escape_string($db_name, $_POST["news_title"]) . "',
        '" . (isset($_POST["news_description"]) ? db_escape_string($db_name, $_POST["news_description"]) : NULL) . "',
        '" . (isset($_POST["news_changes"]) ? db_escape_string($db_name, $_POST["news_changes"]) : NULL) . "',
        '" . (isset($_POST["news_improvements"]) ? db_escape_string($db_name, $_POST["news_improvements"]) : NULL) . "',
        '" . (isset($_POST["news_fixes"]) ? db_escape_string($db_name, $_POST["news_fixes"]) : NULL) . "'
    )";



// Call the function and save the results in a variable
$db_results = db_get_results($db_name, $db_query);



// Check if there is an error with the DB connection
if (isset($_SESSION["error"])) {

    // Redirect a user to the login page with a "database connection" error
    header("Location: ../create/?error=db_connection");
    exit();
}



// Check if the values have not been registered in the DB
if ($db_results != TRUE) {

    // Redirect a user to the login page with a "database connection" error
    echo "<h1>" . $db_results . "</h1>";
}
