<?PHP
ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);
require "includes/database_functions.php";

if (isset($_SESSION["LoginStatus"]) && $_SESSION["LoginStatus"]== "YES") {
    // echo "You logged in!";
} else {
    ?>
    <script>
        window.location.href = "https://spikeball-club.uk.r.appspot.com";
    </script>
    <?php
}

// Adding a new member to the database
if (isset($_POST['addMemberBtn'])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $date = $_POST["date"];
    $grad = $_POST["grad"];
    $email = $_POST["email"];

    $sql = "INSERT INTO members (nameFirst, nameLast, startDate, gradYear, email) VALUES (:f, :l, :d, :g, :e)";
    $params = [":f"=>$fname, ":l"=>$lname, ":d"=>$date, ":g"=>$grad, ":e"=>$email];
    $result = getDataFromSQL($sql, $params);

    if (is_array($result)) {
        echo "<script>alert('SUCCESS: Added new member to the members list!');</script>";
    } else {
        echo "<script>alert('ERROR: With creating a new member!');</script>";
    }
}

// Deleting a member from the database
if (isset($_POST['deleteMemberBtn'])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];

    $sql = "DELETE FROM members WHERE nameFirst = :f and nameLast = :l";
    $params = [":f"=>$fname, ":l"=>$lname];
    $result = getDataFromSQL($sql, $params);

    if (is_array($result)) {
        echo "<script>alert('SUCCESS: Deleted member from the members list!');</script>";
    } else {
        echo "<script>alert('ERROR: Invalid firstname or lastname!');</script>";
    }
}

// Editing a member on the database
if (isset($_POST['editMemberBtn'])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $id = $_POST["id"];
    $date = $_POST["date"];
    $grad = $_POST["grad"];
    $email = $_POST["email"];

    $sql = "UPDATE members SET nameFirst=:f, nameLast=:l, id=:i, startDate=:d, gradYear=:g, email=:e WHERE nameFirst=:f AND nameLast=:l";
    $params = [":f"=>$fname, ":l"=>$lname, ":i"=>$id, ":d"=>$date, ":g"=>$grad, ":e"=>$email];
    $result = getDataFromSQL($sql, $params);

    if (is_array($result)) {
        echo "<script>alert('SUCCESS: Edited member on the members list!');</script>";
    } else {
        echo "<script>alert('ERROR: With editing member!');</script>";
    }
}

if (isset($_POST['addEventBtn'])) {
    $eventName = $_POST["event"];
    $location = $_POST["location"];
    $startDate = $_POST["date"];
    $startTime = $_POST["time"];
    $description = $_POST["description"];

    $sql = "INSERT INTO events (eventName, location, startDate, startTime, description) VALUES (:e, :l, :s, :t, :d)";
    $params = [":e"=>$eventName, ":l"=>$location, ":s"=>$startDate, ":t"=>$startTime, ":d"=>$description];
    $result = getDataFromSQL($sql, $params);

    if (is_array($result)) {
        echo "<script>alert('SUCCESS: Added new event to the event list!');</script>";
    } else {
        echo "<script>alert('ERROR: With creating a new event!');</script>";
    }
}

if (isset($_POST['deleteEventBtn'])) {
    $name = $_POST["eventName"];
    $date = $_POST["date"];
    $time = $_POST["time"];

    $sql = "DELETE FROM events WHERE eventName = :n and startDate = :d and startTime = :t";
    $params = [":n"=>$name, ":d"=>$date, ":t"=>$time];
    $result = getDataFromSQL($sql, $params);

    if (is_array($result)) {
        echo "<script>alert('SUCCESS: Deleted event from the event list!');</script>";
    } else {
        echo "<script>alert('ERROR: Invalid event or start date or start time');</script>";
    }
}

?>