<?php
ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);
require "../includes/database_functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etown Spikeball Club Members Page</title>
    <link rel="stylesheet" href="membersStyle.css">
    <script src="membersFunction.js"></script>

</head>

<body>
    <div id="home">
        <a href="http://localhost/cs310/Spikeball_Website/mainPage/index.php">
            <img src="http://localhost/cs310/Spikeball_Website/images/home-big.png" alt="home icon" title="Home Button" height="75px">
        </a>
    </div>
    <header>
        <h1 id="title">Club Members List</h1>
    </header>

    <!-- Search Bar -->
    <div id="searchBar">
        <button id="loginBtn">Admin Login</button>
        <form id="searchForm" action='search.php' method=post>
            <input id="memberSearch" name="term" type="text" placeholder="Type a member name">
            <input type= "submit" value="Search"> 
            <!-- <div id="searchIcon">
                <img src="http://localhost/cs310/Spikeball_Website/images/magnifying-glass.png" alt="Search Icon" title="Search Button" height="13px" width="13px">
            </div> -->
            <br>
        </div>
    </form>

<!-- Table Attributes -->
<table class="table table-bordered">
        <!-- Table Headers -->
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NAME</th>
                <th scope="col">START DATE</th>
                <th scope="col">GRAD</th>
                <th scope="col">STUDENT EMAIL</th>
            </tr>
        </thead>

        <!-- Table Elements -->
        <?php
        $userID = 1;
        $sql = "SELECT * FROM members WHERE id>=:u ORDER BY id";
        $params = [":u"=>$userID];
        $members = getDataFromSQL($sql, $params);
        // Loop over all members and send member info out as a table
        foreach($members as $member) {
        ?>

        <tbody>
            <tr>
                <td class="number"> <?php echo"{$member["id"]}";?> </td>
                <td class="name"> <?php echo"{$member["nameFirst"]}"." "."{$member["nameLast"]}";?> </td>
                <td class="date"> <?php echo"{$member["startDate"]}";?> </td>
                <td class="grad"> <?php echo"{$member["gradYear"]}";?> </td>
                <td class="email"> <?php echo"{$member["email"]}";?> </td>
            </tr>
        </tbody>

        <?php
        }
        ?>
    </table>

  <!-- footer -->
  <footer>
    <!-- <a class="footer-link" href="https://www.linkedin.com/">LinkedIn</a>
    <a class="footer-link" href="https://twitter.com/">Twitter</a>
    <a class="footer-link" href="https://www.github.com/">Website</a> -->
    <p class="copyright">© 2022 Aiden Walmer + Alexander Fox @ CS310 - Elizabethtown College.</p>
  </footer>

</body>
</html>