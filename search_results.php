
<?php
    /**/
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "skywars";
    /*
    $dbhost = "eu01-sql.pebblehost.com";
    $dbuser = "customer_84661_skywars";
    $dbpass = "2TK48XMnKu0sQ@BgYs8d";
    $dbname = "customer_84661_skywars";*/

    // Create connection to DB
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    // Check connection to DB
    if (!$connection) {
        die ("DB connection failed: " . mysql_error($connection));
    }

    $results = $_GET['results'];
    $results = mysqli_real_escape_string($connection, $results);

    // Select data from DB
    mysqli_select_db($connection, "sw_player");
    $query = "SELECT player_name FROM sw_player WHERE player_name LIKE '%".$results."%'";
    $result = mysqli_query($connection, $query);

    if (strlen($results) > 0) {
      while ($row = mysqli_fetch_array($result)) {
        echo "<a href='search.php?testing=" . $row['player_name'] . "'>" . $row['player_name'] . "</a><br>";
      }
    }

    // Close connection to DB
    mysqli_close($connection);

?>
