<?php
ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);
require "membersDatabaseAdmin.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etown Spikeball Club Members Page</title>
    <link rel="stylesheet" href="membersStyleAdmin.css">
    <script src="membersFunctionAdmin.js"></script>

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
        <form id="searchForm" action='search.php' method=post>
            <input id="memberSearch" name="term" type="text" placeholder="Type a member name">
            <input type= "submit" value="Search"> 
            <!-- <div id="searchIcon">
                <img src="http://localhost/cs310/Spikeball_Website/images/magnifying-glass.png" alt="Search Icon" title="Search Button" height="13px" width="13px">
            </div> -->
            <br>
        </div>
    </form>

    <!-- Admin Buttons -->
    <div id="adminBtns">
        <button id="addBtn" name="addBtn">Add Member</button>
        <button id="deleteBtn" name="deleteBtn">Delete Member</button>
        <button id="editBtn" name="editBtn">Edit Member</button>
    </div>

    <!-- Add Member Form -->
    <div id="addDiv" class="hidden">
        <form id="addForm" action="" method="post">
            <h2>Add a Member</h2>
            <BR>
            <div>
                <label for="fNameInput">First Name: </label>
                <input id="fNameInput" name="fname" type="text" pattern="[A-Z][a-z]+" placeholder="John" title="Please provide a firstname in 'John' format." required>
            </div>
            <div>
                <label for="lNameInput">Last Name: </label>
                <input id="lNameInput" name="lname" type="text" pattern="[A-Z][a-z]+" placeholder="Smith" title="Please provide a lastname in 'Smith' format." required> 
            </div>
            <div>
                <label for="emailInput">Student Email: </label>
                <input id="emailInput" name="email" type="email" placeholder="example@etown.edu" required>
            </div>
            <div>
                <label for="joinDate">Date Joined: </label>
                <input id="joinDate" name="date" placeholder="2022/03/26" title="Please provide a date in YEAR/MON/DAY format." required>
            </div>
            <div>
            <label for="gradYear">Graduation Year: </label>
            <input id="gradYear" name="grad" type="number" placeholder="2024">
            </div>
            <div>
            <input type="submit" onclick="cancelForm()" class="cancelBtn" name="cancelBtn" value="CANCEL">
            <input type="submit" class="submitBtn" name="addMemberBtn" value="SUBMIT">
            </div>
        </form>
    </div>

    <!-- Delete Member Form -->
    <div id="deleteDiv" class="hidden">
        <form id="deleteForm" action="" method="post">
            <h2>Delete a Member</h2>
            <BR>
            <div>
                <label for="fNameInput">First Name: </label>
                <input id="fNameInput" name="fname" type="text" pattern="[A-Z][a-z]+" placeholder="John" title="Please provide a lastname in 'Smith' format." required>
            </div>
            <div>
                <label for="lNameInput">Last Name: </label>
                <input id="lNameInput" name="lname" type="text" pattern="[A-Z][a-z]+" placeholder="Smith"  title="Please provide a lastname in 'Smith' format." required> 
            </div>
            <div>
            <input type="submit" onclick="cancelForm()" class="cancelBtn" name="cancelBtn" value="CANCEL">
            <input type="submit" class="submitBtn" name="deleteMemberBtn" value="SUBMIT">
            </div>
        </form>
    </div>

    <!-- Edit Member Form -->
    <div id="editDiv" class="hidden">
        <form id="editForm" action="" method="post">
            <h2>Edit a Member</h2>
            <BR>
            <div>
                <label for="fNameInput">First Name: </label>
                <input id="fNameInput" name="fname" type="text" pattern="[A-Z][a-z]+" placeholder="John" title="Please provide a firstname in 'John' format." required>
            </div>
            <div>
                <label for="lNameInput">Last Name: </label>
                <input id="lNameInput" name="lname" type="text" pattern="[A-Z][a-z]+" placeholder="Smith" title="Please provide a lastname in 'Smith' format." required> 
            </div>
            <div>
                <label for="emailInput">Student Email: </label>
                <input id="emailInput" name="email" type="email" placeholder="example@etown.edu" required>
            </div>
            <div>
                <label for="joinDate">Date Joined: </label>
                <input id="joinDate" name="date" placeholder="2022/03/26" title="Please provide a date in YEAR/MON/DAY format." required>
            </div>
            <div>
            <label for="gradYear">Graduation Year: </label>
            <input id="gradYear" name="grad" type="number" placeholder="2024">
            </div>
            <div>
            <input type="submit" onclick="cancelForm()" class="cancelBtn" name="cancelBtn" value="CANCEL">
            <input type="submit" class="submitBtn" name="editMemberBtn" value="SUBMIT">
            </div>
        </form>
    </div>

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
        <p class="copyright">© 2022 Aiden Walmer + Alexander Fox @ CS310 - Elizabethtown College.</p>
    </footer>

</body>

</html>