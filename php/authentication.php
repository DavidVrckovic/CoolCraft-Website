<?php
$required_db = "login";
include("mysql_connection.php");

// Check if the request method is of type POST
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // Check if $_POST super global variable is not null
    // Fixes "Undefined array key" error
    if (isset($_POST['username'], $_POST['password'])) {

        // Get searched data with $_POST
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Select searched data from the MySQL DB server
        //mysqli_select_db($db_connection, "authme");
        $db_query = "SELECT * FROM authme WHERE realname LIKE '" . $username . "' LIMIT 1";
        $db_results = mysqli_query($db_connection, $db_query);

        if ($db_results && mysqli_num_rows($db_results) > 0) {
            // Save user's data
            $user_data = mysqli_fetch_assoc($db_results);

            // Encrypt a provided password
            $encryption_parts = explode('$', $user_data['password']);
            $encrypted_password = "$" . $encryption_parts[1] . "$" . $encryption_parts[2] . "$" . hash("sha256", hash("sha256", $password) . $encryption_parts[2]);

            // Check if the provided password matches the one in the DB
            if ($encrypted_password === $user_data['password']) {
                // Update the session
                session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['user_id'] = $user_data['id'];
                $_SESSION['user_username'] = $user_data['realname'];
                $_SESSION['user_email'] = $user_data['email'];
                $_SESSION['user_password'] = $user_data['password'];
                $_SESSION['user_lastlogin'] = $user_data['lastlogin'];
                $_SESSION['user_regdate'] = $user_data['regdate'];

                // Da
                header("Location: ../index.php");
                die;
            } else {
                header("Location: ../login.php?error=wrong_password");
            }
        } else {
            echo "Could not find a username '" . $username . "'.";
        }
    } else {
        echo "You need to provide a valid username and password!";
    }
}
