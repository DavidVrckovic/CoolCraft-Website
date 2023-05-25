<?php
// End the session
session_start();
session_destroy();

// Check if there is local data (cookie)
if (isset($_COOKIE["loggedin"])) {

    // Unset local data (cookies)
    unset($_COOKIE["loggedin"]);
    setcookie("loggedin", "", time() - 3600, "/");

    unset($_COOKIE["user_id"]);
    setcookie("user_id", "", time() - 3600, "/");

    unset($_COOKIE["user_username"]);
    setcookie("user_username", "", time() - 3600, "/");

    unset($_COOKIE["user_email"]);
    setcookie("user_email", "", time() - 3600, "/");

    unset($_COOKIE["user_lastlogin"]);
    setcookie("user_lastlogin", "", time() - 3600, "/");

    unset($_COOKIE["user_regdate"]);
    setcookie("user_regdate", "", time() - 3600, "/");

    unset($_COOKIE["user_password"]);
    setcookie("user_password", "", time() - 3600, "/");
}

// Redirect a user to the index page
header("Location: ../");
?>