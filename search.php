<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title> CoolCraft – Home </title>
    <link href="images/icons/coolcraft_icon.png" rel="icon" type="image/png"/>

    <link href="style.css" rel="stylesheet" type="text/css"/>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
	
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"/>
  </head>

  <body>
    <script src = "script.js"> </script>
    <script src = "ajax_db.js"> </script>

    <div class="header">
      <a class="icon" href=""> <img alt="Server icon" src="images/icons/coolcraft_icon.png"> </a>
      <a class="title" href=""> CoolCraft </a>
    </div>

    <nav class="flex-container">
      <ul class="nav">
        <li> <a class="active" href=""> Home </a> </li>
        <li> <a class="inactive" href="info"> Info </a> </li>
        <li> <a class="inactive" href="servers"> Servers </a> </li>
        <li> <a class="inactive" href="gallery"> Gallery </a> </li>
        <li> <a class="inactive" href="news"> News </a> </li>
        <li> <a class="inactive" href="faq"> FAQ </a> </li>
        <li> <a class="inactive" href="support"> Support </a> </li>
        <li> <a class="inactive" href="store"> Store </a> </li>
      </ul>
    </nav>

    
    <!-- AJAX Filler
    <form>
        <select name = "player_name" onchange = "showUser (this.value)">
          <option value = ""> Select a player: </option>
          <option value = "DavyNavy"> DavyNavy </option>
          <option value = "BoboChill"> BoboChill </option>
          <option value = "DaveDawg15"> DaveDawg15 </option>
          <option value = "FlooXyzZz"> FlooXyzZz </option>
        </select>
      </form> <br>
      <div id = "search_result"> <b>Player info will be listed here...</b> </div>
    -->

      <div>
      <form action="search.php" autocomplete="off" method="POST" style="border: 1px solid #ccc;">
        <input id="search2" name="search" onkeyup="showResult(this.value)" placeholder="Player name" type="text">
        <input id="submit" type="submit" value="Search">
        <div id="livesearch"></div>
      </form>

      </div>
    </div>

    <br><br><br>

    <footer class="footer">
      <div class="footer_up"> </div>
      <div class="footer_left">
        CoolCraft &copy; 2021
      </div>
      <div class="footer_right">
        All rights reserved.
      </div>
    </footer>
  </body>
</html>

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

    $search = $_POST['search'];
    $search = mysqli_real_escape_string($connection, $search);

    // Select data from DB
    mysqli_select_db($connection, "sw_player");
    // % - Search everything containing $search
    // $query = "SELECT * FROM sw_player WHERE player_name LIKE '%".$search."%'";
    $query = "SELECT * FROM sw_player WHERE player_name LIKE '".$search."'";
    $result = mysqli_query($connection, $query);

    // Make an HTML table
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

    // ?
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

    // Close an HTML table
    echo "</table>";

    // Close connection to DB
    mysqli_close($connection);

?>