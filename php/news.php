<?php
// Include the DB functions
include($directory_prefix . "php/db_connection.php");



function news_get_results(string $news_type = "")
{
    // Set the required DB name and query
    $db_name = "battlepass database";

    if ($news_type != "") {
        $db_query = "SELECT * FROM news WHERE news_type LIKE '$news_type' ORDER BY id DESC";
    } else {
        $db_query = "SELECT * FROM news ORDER BY id DESC";
    }



    // Call the function and save the results in a variable
    $db_results = db_get_results($db_name, $db_query);



    // Check if there is an error with the DB connection
    if (isset($_SESSION["error"])) {

        // Redirect a user to the login page with a "database connection" error
        header("Location: ../errors/?error=db_connection&database=news");
        exit();
    }

    // Return the DB query results
    return $db_results;
}



function news_get_result(string $news_id = "")
{
    // Set the required DB name and query
    $db_name = "battlepass database";
    $db_query = "SELECT * FROM news WHERE news_id LIKE '$news_id'";



    // Call the function and save the results in a variable
    $db_results = db_get_results($db_name, $db_query);



    // Check if there is an error with the DB connection
    if (isset($_SESSION["error"])) {

        // Redirect a user to the login page with a "database connection" error
        header("Location: ../errors/?error=db_connection&database=news");
        exit();
    }

    // Return the DB query results
    return $db_results;
}



function output_news(mysqli_result|bool $db_results)
{

    // Check if there are any results in the DB
    if ($db_results && mysqli_num_rows($db_results) > 0) {

        // Go through the DB rows
        while ($db_row = mysqli_fetch_array($db_results)) {

            // Output the data
            echo ('
            <!-- Inner section -->
            <article class="update" id="' . $db_row["news_id"] . '">
            
                <!-- Image block -->
                <div class="image">
            
                    <!-- Content link -->
                    <a class="link_over_bg_img" href="' . "?" . $db_row["news_type"] . "=" . $db_row["news_id"] . '">
            
                        <img alt="" class="link_img" src="../Images/News/' . $db_row["news_id"] . '.png">
            
                    </a>
            
                </div>
            
                <!-- Text block -->
                <div class="text">
            
                    <!-- Content link -->
                    <a class="update" href="' . "?" . $db_row["news_type"] . "=" . $db_row["news_id"] . '">
            
                        <p class="text">
                            ' . $db_row["news_title"] . '
                        </p>
            
                    </a>
            
                    <!-- Content link -->
                    <a class="update" href="' . "?" . $db_row["news_type"] . "=" . $db_row["news_id"] . '">
            
                        <p class="text">
                            ' . date("d F Y", strtotime($db_row["news_date"])) . '
                        </p>
            
                    </a>
            
                </div>
            
            </article>
            ');
        }
    }

    // If there are no results in the DB
    else {
        echo ('
            <p class="text">
                There are no news available at this time.
            </p>
        ');
    }
}



function output_news_updates(mysqli_result|bool $db_results)
{

    // Check if there are any results in the DB
    if ($db_results && mysqli_num_rows($db_results) > 0) {

        // Save the results in a variable
        $db_row = mysqli_fetch_array($db_results);

        if ($db_row["news_changes"] != "") {
            $bits = explode("\n", $db_row["news_changes"]);

            $db_row["news_changes"] = '
            <!-- Text -->
            <p class="text">
                <b> Changes: </b>
            </p>

            <ul class="text">
            ';

            foreach ($bits as $bit) {
                $db_row["news_changes"] .= "<li>" . $bit . "</li>";
            }
            $db_row["news_changes"] .= "</ul>";
        }

        if ($db_row["news_improvements"] != "") {
            $bits = explode("\n", $db_row["news_improvements"]);

            $db_row["news_improvements"] = '
            <!-- Text -->
            <p class="text">
                <b> Improvements: </b>
            </p>

            <ul class="text">
            ';

            foreach ($bits as $bit) {
                $db_row["news_improvements"] .= "<li>" . $bit . "</li>";
            }
            $db_row["news_improvements"] .= "</ul>";
        }

        if ($db_row["news_fixes"] != "") {
            $bits = explode("\n", $db_row["news_fixes"]);

            $db_row["news_fixes"] = '
            <!-- Text -->
            <p class="text">
                <b> Fixes: </b>
            </p>

            <ul class="text">
            ';

            foreach ($bits as $bit) {
                $db_row["news_fixes"] .= "<li>" . $bit . "</li>";
            }
            $db_row["news_fixes"] .= "</ul>";
        }

        // Output the data
        echo ('
        <!-- Inner section -->
        <article class="general">

            <!-- Title -->
            <h2 class="title">
                Patch notes
            </h2>

            <!-- Line -->
            <hr class="line width_100">

            ' . $db_row["news_changes"] . '

            ' . $db_row["news_improvements"] . '

            ' . $db_row["news_fixes"] . '

        </article>

        <!-- Inner section -->
        <article class="general">

            <!-- Title -->
            <h2 class="title">
                Details
            </h2>

            <!-- Line -->
            <hr class="line width_100">

            <!-- Text -->
            <p class="text">
                <b> Published: </b> ' . date("d F Y \a\\t H:i:s", strtotime($db_row["news_date"])) . '
            </p>

        </article>

        <script>
            document.title = "CoolCraft | News | ' . $db_row["news_title"] . '";
            document.querySelector("article.inner h1.title").innerHTML = "' . $db_row["news_title"] . '";

            document.querySelector("section.main").classList.remove("wflex");
            document.querySelector("section.main").classList.add("cflex");
        </script>
        ');
    }
}



function output_news_general_news(mysqli_result|bool $db_results)
{

    // Check if there are any results in the DB
    if ($db_results && mysqli_num_rows($db_results) > 0) {

        // Save the results in a variable
        $db_row = mysqli_fetch_array($db_results);

        // Output the data
        echo ('
        <!-- Inner section -->
        <article class="general">

            <!-- Title -->
            <h2 class="title">
                Info
            </h2>

            <!-- Line -->
            <hr class="line width_100">

            <!-- Text -->
            <p class="text">
                ' . nl2br($db_row["news_description"]) . '
            </p>

        </article>

        <!-- Inner section -->
        <article class="general">

            <!-- Title -->
            <h2 class="title">
                Details
            </h2>

            <!-- Line -->
            <hr class="line width_100">

            <!-- Text -->
            <p class="text">
                <b> Published: </b> ' . date("d F Y \a\\t H:i:s", strtotime($db_row["news_date"])) . '
            </p>

        </article>
        
        <script>
            document.title = "CoolCraft | News | ' . $db_row["news_title"] . '";
            document.querySelector("article.inner h1.title").innerHTML = "' . $db_row["news_title"] . '";

            document.querySelector("section.main").classList.remove("wflex");
            document.querySelector("section.main").classList.add("cflex");
        </script>
        ');
    }
}
?>