<?php
ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);
session_start();
if (isset($_SESSION["LoginStatus"]) && $_SESSION["LoginStatus"]== "YES") {
    ?>
    <script>
        window.location.href = "https://spikeball-club.uk.r.appspot.com/membersAdminPage/membersAdmin.php";
    </script>
    <?php
} 
require "loginPass.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etown Spikeball Club Login</title>
    <link rel="Etown Spikeball Club Icon" href="../images/Spikeball-ball.png">
    <link rel="stylesheet" href="../stylesheets/loginStyle.css">
</head>

<body>
    <div class="home">
        <a href="https://spikeball-club.uk.r.appspot.com">
            <img src="../images/home-big.png" alt="home icon" title="Home Button" height="75px">
        </a>
    </div>
    <div id="main">
        <h1>Admin Login</h1>
        <div id="errorDiv"><?php if(isset($_SESSION["error"])){echo $_SESSION["error"];} ?></div>
        <form action="login.php" method="POST">
            <label id="usernameLabel">Username:</label><br>
            <input id="username" name="user" placeholder="Type your username" required>
            <br>
            <br>
            <label id="passwordLabel">Password:</label><br>
            <input id="password" name="pass" type="password" placeholder="Type your password" required>
            <br>
            <div id="memberDiv">
                <a id="member"
                    href="https://spikeball-club.uk.r.appspot.com/membersPage/members.php">
                    Continue as a Club Member</a>
            </div>
            <input type="submit" id="loginBtn" name="loginBtn" value="LOGIN">
            <!-- <button type="submit">LOGIN</button> -->
        </form>
    </div>
</body>

</html>