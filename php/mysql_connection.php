<?php
// Start the session
session_start();
?>

<?php
/* Localhost MySQL server 
$db_hostname = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "testing";
/* */

/* Remote MySQL server */
$db_config = parse_ini_file("../protected/config.ini");

$login_db_hostname = $db_config['login_db_hostname'];
$login_db_username = $db_config['login_db_username'];
$login_db_password = $db_config['login_db_password'];
$login_db_name = $db_config['login_db_name'];

$bw_db_hostname = $db_config['bw_db_hostname'];
$bw_db_username = $db_config['bw_db_username'];
$bw_db_password = $db_config['bw_db_password'];
$bw_db_name = $db_config['bw_db_name'];

$lp_db_hostname = $db_config['lp_db_hostname'];
$lp_db_username = $db_config['lp_db_username'];
$lp_db_password = $db_config['lp_db_password'];
$lp_db_name = $db_config['lp_db_name'];

$nm_db_hostname = $db_config['nm_db_hostname'];
$nm_db_username = $db_config['nm_db_username'];
$nm_db_password = $db_config['nm_db_password'];
$nm_db_name = $db_config['nm_db_name'];

$sw_db_hostname = $db_config['sw_db_hostname'];
$sw_db_username = $db_config['sw_db_username'];
$sw_db_password = $db_config['sw_db_password'];
$sw_db_name = $db_config['sw_db_name'];
/* */


// Check which DB is required
if ($required_db == "login") {
    // Open connection to the MySQL DB server
    $db_connection = mysqli_connect($login_db_hostname, $login_db_username, $login_db_password, $login_db_name);

    // Check connection to the MySQL DB server
    if (mysqli_connect_errno()) {
        echo "Failed to connect to the MySQL server: " . mysqli_connect_error();
        exit();
    }
} else if ($required_db = "networkmanager") {
    // Open connection to the MySQL DB server
    $db_connection = mysqli_connect($nm_db_hostname, $nm_db_username, $nm_db_password, $nm_db_name);

    // Check connection to the MySQL DB server
    if (mysqli_connect_errno()) {
        echo "Failed to connect to the MySQL server: " . mysqli_connect_error();
        exit();
    }
} else if ($required_db = "skywars") {
    // Open connection to the MySQL DB server
    $db_connection = mysqli_connect($sw_db_hostname, $sw_db_username, $sw_db_password, $sw_db_name);

    // Check connection to the MySQL DB server
    if (mysqli_connect_errno()) {
        echo "Failed to connect to the MySQL server: " . mysqli_connect_error();
        exit();
    }
} else {
    exit();
}


if ($required_db = "all") {
    // Open connection to the MySQL DB servers
    $login_db_connection = mysqli_connect($login_db_hostname, $login_db_username, $login_db_password, $login_db_name);

    // Check connection to the MySQL DB server
    if (mysqli_connect_errno()) {
        echo "Failed to connect to the MySQL server: " . mysqli_connect_error();
        exit();
    }

    $bw_db_connection = mysqli_connect($bw_db_hostname, $bw_db_username, $bw_db_password, $bw_db_name);

    // Check connection to the MySQL DB server
    if (mysqli_connect_errno()) {
        echo "Failed to connect to the MySQL server: " . mysqli_connect_error();
        exit();
    }

    $lp_db_connection = mysqli_connect($lp_db_hostname, $lp_db_username, $lp_db_password, $lp_db_name);

    // Check connection to the MySQL DB server
    if (mysqli_connect_errno()) {
        echo "Failed to connect to the MySQL server: " . mysqli_connect_error();
        exit();
    }

    $nm_db_connection = mysqli_connect($nm_db_hostname, $nm_db_username, $nm_db_password, $nm_db_name);

    // Check connection to the MySQL DB server
    if (mysqli_connect_errno()) {
        echo "Failed to connect to the MySQL server: " . mysqli_connect_error();
        exit();
    }

    $sw_db_connection = mysqli_connect($sw_db_hostname, $sw_db_username, $sw_db_password, $sw_db_name);
    
    // Check connection to the MySQL DB server
    if (mysqli_connect_errno()) {
        echo "Failed to connect to the MySQL server: " . mysqli_connect_error();
        exit();
    }
} else {
    exit();
}

?>