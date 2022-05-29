<?php
// End the session
session_start();
session_destroy();

// Redirect to the login page
header("Location: ../index.php");
?>