<?php
$required_db = "auth";
include("mysql_connection.php");



// Check if the request method is not of type POST
if (!($_SERVER["REQUEST_METHOD"] == "POST")) {

    // Redirect a user to the login page
    header("Location: ../login");
    exit();
}



// Check if $_POST super global variable is not set to NULL
// Fixes "Undefined array key" error
if (!isset($_POST["username"], $_POST["password"])) {

    // Redirect a user to the login page with a "invalid credentials" error
    header("Location: ../login/?error=invalid_credentials");
    exit();
}



// Check if there is an error with the DB connection
if (isset($_SESSION["error"])) {

    // Redirect a user to the login page with a "database connection" error
    header("Location: ../login/?error=db_connection");
    exit();
}



// Select and save results of searched data from the DB server
$db_query = "SELECT * FROM authme WHERE realname LIKE '" . $_POST["username"] . "' LIMIT 1";
$db_results = mysqli_query($db_connection, $db_query);



// Check if the provided username is not in the DB
if (!($db_results && mysqli_num_rows($db_results) > 0)) {

    // Redirect a user to the login page with a "unknown username" error
    header("Location: ../login/?error=unknown_username");
    exit();
}



// Fetch the searched data from the DB server
$user_data = mysqli_fetch_assoc($db_results);



// Close connection to the DB server
mysqli_close($db_connection);



// Encrypt a provided password
$encryption_parts = explode("$", $user_data["password"]);
$encrypted_password = "$" . $encryption_parts[1] . "$" . $encryption_parts[2] . "$"
    . hash("sha256", hash("sha256", $_POST["password"]) . $encryption_parts[2]);



// Check if the provided (encrypted) password does not match the one in the DB
if (!($encrypted_password === $user_data["password"])) {

    // Redirect a user to the login page with a "wrong password" error
    header("Location: ../login/?error=wrong_password");
    exit();
}



// Update the session
session_regenerate_id();
$_SESSION["loggedin"] = TRUE;
$_SESSION["user_id"] = $user_data["id"];
$_SESSION["user_username"] = $user_data["realname"];
$_SESSION["user_email"] = $user_data["email"];
$_SESSION["user_lastlogin"] = $user_data["lastlogin"];
$_SESSION["user_regdate"] = $user_data["regdate"];
$_SESSION["user_password"] = $user_data["password"];

// Set local data (cookies)
setcookie("loggedin", TRUE, time() + 60 * 60 * 24 * 30, "/");
setcookie("user_id", $user_data["id"], time() + 60 * 60 * 24 * 30, "/");
setcookie("user_username", $user_data["realname"], time() + 60 * 60 * 24 * 30, "/");
setcookie("user_email", $user_data["email"], time() + 60 * 60 * 24 * 30, "/");
setcookie("user_lastlogin", $user_data["lastlogin"], time() + 60 * 60 * 24 * 30, "/");
setcookie("user_regdate", $user_data["regdate"], time() + 60 * 60 * 24 * 30, "/");
setcookie("user_password", $user_data["password"], time() + 60 * 60 * 24 * 30, "/");



// Redirect a user to the index page
header("Location: ../");
exit();
?>