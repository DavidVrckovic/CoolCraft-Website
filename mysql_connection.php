<?php
    /*
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "skywars";
    */
    $dbhost = "eu01-sql.pebblehost.com";
    $dbuser = "customer_84661_skywars";
    $dbpass = "2TK48XMnKu0sQ@BgYs8d";
    $dbname = "customer_84661_skywars";

    // Create connection to DB
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    // Check connection to DB
    if (!$connection) {
        die ("DB connection failed: " . mysql_error($connection));
    }

    // GET from AJAX
    $player_name = $_GET['q'];
    $player_name = mysqli_real_escape_string($connection, $player_name);

    // Select data from DB
    mysqli_select_db($connection, "sw_player");
    $query = "SELECT * FROM sw_player WHERE player_name LIKE '".$player_name."'";
    $result = mysqli_query($connection, $query);

    // Create an HTML table
    echo "<table>
    <tr>
    <th> Username </th>
    <th> Wins </th>
    <th> Losses </th>
    <th> Kills </th>
    <th> Deaths </th>
    <th> SW Experience </th>
    <th> Glass color </th>
    </tr>";

    // Filling the HTML table with data from the DB
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['player_name'] . "</td>";
        echo "<td>" . $row['wins'] . "</td>";
        echo "<td>" . $row['losses'] . "</td>";
        echo "<td>" . $row['kills'] . "</td>";
        echo "<td>" . $row['deaths'] . "</td>";
        echo "<td>" . $row['xp'] . "</td>";
        echo "<td>" . $row['glasscolor'] . "</td>";
        echo "</tr>";
    }

    // Close an HTML table tag
    echo "</table>";

    // Close connection to DB
    mysqli_close($connection);

?>