<?php
// End the session
session_start();
session_destroy();

// Check if the cookie is set
if (isset($_COOKIE['login'])) {
    unset($_COOKIE['login']);
}

// Redirect to the login page
header("Location: ../index.php");
?>