<?php
ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);
session_start();
require "includes/database_functions.php";
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events Page</title>
    <link rel="Etown Spikeball Club Icon" href="../images/Spikeball-ball.png">
    <link rel="stylesheet" href="../stylesheets/calendar.css">
    <script src="../scripts/calendar.js"></script>
</head>

<body>
    <div id="home">
        <a href="https://spikeball-club.uk.r.appspot.com">
            <img src="../images/home-big.png" alt="home icon" title="Home Button" height="75px">
        </a>
    </div>
    
    <header>
        <h1 id="title">Club Events</h1>
    </header>

    <!-- Search Bar for Whitespace! -->
    <div id="searchBar">
        <button id="test">Add Events</button>
    </div>

    <table class="table table-bordered">
        <!-- Table Headers -->
        <thead>
            <tr>
                <th scope="col">EVENT</th>
                <th scope="col">LOCATION</th>
                <th scope="col">DATE</th>
                <th scope="col">TIME</th>
                <th scope="col">DESCRIPTION</th>
            </tr>
        </thead>

        <!-- Table Elements -->
        <?php
        $eventID = 1;
        $sql = "SELECT * FROM events WHERE startDate BETWEEN CURRENT_DATE and (CURRENT_DATE +7) ORDER BY startDate;";
        // $params = [":e"=>$eventID];
        // $events = getDataFromSQL($sql, $params);
        $events = getDataFromSQL($sql);
        // Loop over all members and send member info out as a table
        foreach($events as $event) {
        ?>
        <html>
            <tbody>
                <tr>
                    <td class="name"> <?php echo"{$event["eventName"]}";?> </td>
                    <td class="name"> <?php echo"{$event["location"]}";?> </td>
                    <td class="date"> <?php echo"{$event["startDate"]}";?> </td>
                    <td class="date"> <?php echo"{$event["startTime"]}"."PM";?> </td>
                    <td class="text"> <?php echo"{$event["description"]}";?> </td>
                </tr>
            </tbody>

            <?php
    }
?>
        </html>
        </table>
        </body>
        <!-- footer -->
    <!-- <footer>
        <p class="copyright">?? 2022 Aiden Walmer + Alexander Fox @ CS310 - Elizabethtown College.</p>
    </footer> -->
