<?php
session_start();

include("mysql_connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Something was posted 
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
        // Read from database
        mysqli_select_db($db_connection, "authme");
        $db_query = "SELECT * FROM authme WHERE realname LIKE '" . $username . "' LIMIT 1";
        $db_results = mysqli_query($db_connection, $db_query);

        if ($db_results) {
            if ($db_results && mysqli_num_rows($db_results) > 0) {
                $user_data = mysqli_fetch_assoc($db_results);

                if ($user_data['password'] === $password) {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: index.php");
                    die;
                }
            }
        }
        echo "Wrong username or password!";
    } else {
        echo "Wrong username or password!";
    }
}
?>