<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">

  <!-- Title and Favicon -->
  <title> CoolCraft | Search </title>
  <link href="images/icons/coolcraft_icon.png" rel="icon" type="image/png" />

  <!-- CSS files -->
  <link href="styles/style.css" rel="stylesheet" type="text/css" />
  <link href="styles/header.css" rel="stylesheet" type="text/css" />
  <link href="styles/navigation.css" rel="stylesheet" type="text/css" />
  <link href="styles/footer.css" rel="stylesheet" type="text/css" />

  <!-- External sources -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
</head>

<body>
  <script src="scripts/script.js"> </script>
  <script src="scripts/ajax_search.js"> </script>

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
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off" method="get" style="border: 1px solid #ccc;">
      <input id="search2" name="q" onkeyup="showResult(this.value)" placeholder="Player name" type="text" value="">
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

include("mysql_connection.php");
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

// Filling the HTML table with data from the DB
if (isset($_GET['q'])) {
  while ($row = mysqli_fetch_array($db_results)) {
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
}

// Close an HTML table
echo "</table>";
?>