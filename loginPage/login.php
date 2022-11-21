<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etown Spikeball Club Login</title>
    <link rel="stylesheet" href="loginStyle.css">
    <script src="loginPass.php"></script>

</head>

<body>
    <div class="home">
        <a href="http://localhost/cs310/Spikeball_Website/mainPage/index.php">
            <img src="http://localhost/cs310/Spikeball_Website/images/home-big.png" alt="home icon" title="Home Button" height="75px">
        </a>
    </div>
    <div id="main">
        <h1>Admin Login</h1>
            <div id="errorDiv" class="hidden">
                <label>Incorrect Username or Password!<hr id="errorHr"></label>
            </div>
            <div id="error"><?php if(isset($error)){echo $error;} ?><hr></div>
            <form action="login.php" method="POST">
        <label id="usernameLabel">Username:</label><br>
        <input id="username" placeholder="Type your username" required>
        <br>
        <br>
        <label id="passwordLabel">Password:</label><br>
        <input id="password" type="password" placeholder="Type your password" required>
        <br>
        <div id="memberDiv">
            <a id="member"
                href="http://localhost/cs310/Spikeball_Website/membersPage/members.html">
                Continue as a Club Member</a>
        </div>
        <button type="submit">LOGIN</button>
    </div>
</body>

</html>