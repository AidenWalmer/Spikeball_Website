<!-- Called through onclick form listener in members.php -->
<?php
$data = $_POST["term"];

if (trim($data) == "") {    // If data is empty or includes any number of whitespaces
    header("location: members.php");
} else {
    $answer = explode(" ",$data);
    // print_r($answer);
    ?>
        <style>
        <?php include 'membersStyle.css'; ?> 
        </style>

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

    <?php

    include "../includes/database_functions.php";
    //send a SQL statement and get results in to teams
    $sql = "SELECT * FROM members where nameFirst LIKE :term OR nameLast LIKE :term OR CONCAT(nameFirst, ' ', nameLast) LIKE :term ORDER BY id, nameFirst, nameLast";
    $params = [":term"=>$data."%"];
    // echo $sql;
    // print_r($params);

    $members = getDataFromSQL($sql,$params);
    foreach($members as $member) {
    ?>  
        <!-- Table Elements -->
        <html>
        <tbody>
                <tr>
                    <td class="number"> <?php echo"{$member["id"]}";?> </td>
                    <td class="name"> <?php echo"{$member["nameFirst"]}"." "."{$member["nameLast"]}";?> </td>
                    <td class="date"> <?php echo"{$member["startDate"]}";?> </td>
                    <td class="grad"> <?php echo"{$member["gradYear"]}";?> </td>
                    <td class="email"> <?php echo"{$member["email"]}";?> </td>
                </tr>
            </tbody>
        </html>

    <?php
    }
}
?>
