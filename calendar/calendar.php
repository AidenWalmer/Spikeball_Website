<?php
ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);
session_start();
require "../membersAdminPage/membersDatabaseAdmin.php";
// require "calendarDatabase.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etown Spikeball Club Members Page</title>
    <link rel="Etown Spikeball Club Icon" href="../images/Spikeball-ball.png">
    <link rel="stylesheet" href="calendar.css">
    <!-- <script src="membersFunctionAdmin.js"></script> -->
</head>

<body>
    <div id="home">
        <a href="http://localhost/cs310/Spikeball_Website/mainPage/index.php">
            <img src="http://localhost/cs310/Spikeball_Website/images/home-big.png" alt="home icon" title="Home Button" height="75px">
        </a>
    </div>
    <header>
        <h1 id="title">Upcoming Club Events</h1>
    </header>
    <div class="tableDiv">
    <table class="table table-bordered">
        <!-- Table Headers -->
        <thead>
            <tr>
                <th scope="col">EVENT</th>
                <th scope="col">LOCATION</th>
                <th scope="col">START</th>
                <th scope="col">END</th>
                <th scope="col">DESCRIPTION</th>
            </tr>
        </thead>

        <!-- Table Elements -->
        <?php
        $eventID = 1;
        $sql = "SELECT * FROM events WHERE startTime BETWEEN CURRENT_DATE and (CURRENT_DATE +7) ORDER BY startTime;";
        // $params = [":e"=>$eventID];
        // $events = getDataFromSQL($sql, $params);
        $events = getDataFromSQL($sql);
        // Loop over all members and send member info out as a table
        foreach($events as $event) {
        ?>

        <tbody>
            <tr>
                <td class="name"> <?php echo"{$event["eventName"]}";?> </td>
                <td class="name"> <?php echo"{$event["location"]}";?> </td>
                <td class="date"> <?php echo"{$event["startTime"]}";?> </td>
                <td class="date"> <?php echo"{$event["endTime"]}";?> </td>
                <td class="text"> <?php echo"{$event["description"]}";?> </td>
            </tr>
        </tbody>

        <?php
        }
        ?>
    </table>
    </div>
    <!-- footer -->
    <footer>
        <p class="copyright">© 2022 Aiden Walmer + Alexander Fox @ CS310 - Elizabethtown College.</p>
    </footer>

</body>

</html>