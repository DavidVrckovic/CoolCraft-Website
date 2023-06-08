<?php
// Start the session
session_start();



// Include the DB functions
include("db_connection.php");



// Check if the request method is not of type POST
if (!($_SERVER["REQUEST_METHOD"] == "POST")) {

    // Redirect a user to the login page
    header("Location: ../login");
    exit();
}



// Check if $_POST super global variables are set to NULL
// Fixes "Undefined array key" error
if (!isset($_POST["username"], $_POST["password"])) {

    // Redirect a user to the login page with a "invalid credentials" error
    header("Location: ../login/?error=invalid_credentials");
    exit();
}



// Set the required DB name and query
$db_name = "auth database";
$db_query = "SELECT * FROM authme WHERE realname LIKE '" . $_POST["username"] . "' LIMIT 1";



// Call the function and save the results in a variable
$db_results = db_get_results($db_name, $db_query);



// Check if there is an error with the DB connection
if (isset($_SESSION["error"])) {

    // Redirect a user to the login page with a "database connection" error
    header("Location: ../login/?error=db_connection");
    exit();
}



// Check if the provided username is not in the DB
if (!($db_results && mysqli_num_rows($db_results) > 0)) {

    // Redirect a user to the login page with a "unknown username" error
    header("Location: ../login/?error=unknown_username");
    exit();
}



// Fetch the searched data from the DB server
$db_data = mysqli_fetch_assoc($db_results);



// Encrypt a provided password
$encryption_parts = explode("$", $db_data["password"]);
$encrypted_password = "$" . $encryption_parts[1] . "$" . $encryption_parts[2] . "$"
    . hash("sha256", hash("sha256", $_POST["password"]) . $encryption_parts[2]);



// Check if the provided (encrypted) password does not match the one in the DB
if (!($encrypted_password === $db_data["password"])) {

    // Redirect a user to the login page with a "wrong password" error
    header("Location: ../login/?error=wrong_password");
    exit();
}



// Set the required DB name and query
$db_name = "network manager database";
$db_query = "SELECT * FROM nm_players WHERE username LIKE '" . $_POST["username"] . "' LIMIT 1";



// Call the function and save the results in a variable
$db_results = db_get_results($db_name, $db_query);



// Check if there is an error with the DB connection
if (isset($_SESSION["error"])) {

    // Redirect a user to the login page with a "database connection" error
    header("Location: ../login/?error=db_connection&database=nm");
    exit();
}



// Check if the provided username is not in the DB
if (!($db_results && mysqli_num_rows($db_results) > 0)) {

    // Redirect a user to the login page with a "unknown username" error
    header("Location: ../login/?error=unknown_username&database=nm");
    exit();
}



// Fetch the searched data from the DB server
$nm_db_data = mysqli_fetch_assoc($db_results);



// Update the session
session_regenerate_id();
$_SESSION["loggedin"] = TRUE;
$_SESSION["user_id"] = $db_data["id"];
$_SESSION["user_username"] = $db_data["realname"];
$_SESSION["user_email"] = $db_data["email"];
$_SESSION["user_lastlogin"] = $db_data["lastlogin"];
$_SESSION["user_regdate"] = $db_data["regdate"];
$_SESSION["user_password"] = $db_data["password"];
$_SESSION["user_uuid"] = $nm_db_data["uuid"];

// Set local data (cookies)
setcookie("loggedin", TRUE, time() + 60 * 60 * 24 * 30, "/");
setcookie("user_id", $db_data["id"], time() + 60 * 60 * 24 * 30, "/");
setcookie("user_username", $db_data["realname"], time() + 60 * 60 * 24 * 30, "/");
setcookie("user_email", $db_data["email"], time() + 60 * 60 * 24 * 30, "/");
setcookie("user_lastlogin", $db_data["lastlogin"], time() + 60 * 60 * 24 * 30, "/");
setcookie("user_regdate", $db_data["regdate"], time() + 60 * 60 * 24 * 30, "/");
setcookie("user_password", $db_data["password"], time() + 60 * 60 * 24 * 30, "/");
setcookie("user_uuid", $nm_db_data["uuid"], time() + 60 * 60 * 24 * 30, "/");



// Redirect a user to the index page
header("Location: ../");
exit();
?>