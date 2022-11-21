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
            <img src="http://localhost/cs310/Spikeball_Website/images/home-big.png" alt="home icon" title="Home Button"
                height="75px">
        </a>
    </div>
    <header>
        <h1 id="title">Club Members List</h1>
    </header>

    <!-- Search Bar -->
    <div id="searchBar">
        <label><b>Search for a Member:</b></label>
        <input id="memberSearch" type="text" placeholder="Type a member name">
        <br>
    </div>

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

    <table class="table table-bordered">
        <!-- Table Headers -->
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NAME</th>
                <th scope="col">DATE</th>
                <th scope="col">STUDENT EMAIL</th>
            </tr>
        </thead>

        <!-- Table Elements -->
        <?php
        $userID = 1;
        $sql = "SELECT * FROM members WHERE id>=:u";
        $params = [":u"=>$userID];
        $members = getDataFromSQL($sql, $params);
        echo "members: ".$members;
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


        <!-- <tbody>
            <tr>
                <th scope="row" class="number">1</th>
                <td>Aiden Walmer</td>
                <td class="date">2/7/2022</td>
                <td>walmera1@etown.edu</td>
            </tr>
            <tr>
                <th scope="row" class="number">2</th>
                <td>Dylan Holland</td>
                <td class="date">2/7/2022</td>
                <td>hollandd1@etown.edu</td>
            </tr>
            <tr>
                <th scope="row" class="number">3</th>
                <td>Dylan Zambo</td>
                <td class="date">2/7/2022</td>
                <td>zambod@etown.edu</td>
            </tr>
            <tr>
                <th scope="row" class="number">4</th>
                <td>Alec Delgado</td>
                <td class="date">2/7/2022</td>
                <td>delgadoa@etown.edu</td>
            </tr>
            <tr>
                <th scope="row" class="number">5</th>
                <td>Adam Johnson</td>
                <td class="date">2/7/2022</td>
                <td>johnsona3@etown.edu</td>
            </tr>
            <tr>
                <th scope="row" class="number">6</th>
                <td>Kyle Ament</td>
                <td class="date">2/7/2022</td>
                <td>amentk@etown.edu</td>
            </tr>
            <tr>
                <th scope="row" class="number">7</th>
                <td>Scotty Reagan</td>
                <td class="date">2/7/2022</td>
                <td>reagans@etown.edu</td>
            </tr>
            <tr>
                <th scope="row" class="number">8</th>
                <td>Megan Nauroth</td>
                <td class="date">2/7/2022</td>
                <td>naurothm@etown.edu</td>
            </tr>
            <tr>
                <th scope="row" class="number">9</th>
                <td>Eric Hierl</td>
                <td class="date">2/7/2022</td>
                <td>hierle@etown.edu</td>
            </tr>
            <tr>
                <th scope="row" class="number">10</th>
                <td>Matteo Pinnero</td>
                <td class="date">2/7/2022</td>
                <td>pinnerom@etown.edu</td>
            </tr>
            <tr>
                <th scope="row" class="number">11</th>
                <td>Alex Lynch</td>
                <td class="date">2/8/2022</td>
                <td>lyncha2@etown.edu</td>
            </tr>
            <tr>
                <th scope="row" class="number">12</th>
                <td>Alex Fox</td>
                <td class="date">2/8/2022</td>
                <td>foxa1@etown.edu</td>
            </tr>
            <tr>
                <th scope="row" class="number">13</th>
                <td>Nathan Seeger</td>
                <td class="date">2/8/2022</td>
                <td>seegern@etown.edu</td>
            </tr>
            <tr>
                <th scope="row" class="number">14</th>
                <td>Ryan Geist</td>
                <td class="date">2/8/2022</td>
                <td>geistr@etown.edu</td>
            </tr>
            <tr>
                <th scope="row" class="number">15</th>
                <td>Keegan Donaher</td>
                <td class="date">2/21/2022</td>
                <td>donaherk@etown.edu</td>
            </tr>
            <tr>
                <th scope="row" class="number">16</th>
                <td>Ryam Ramler</td>
                <td class="date">2/23/2022</td>
                <td>ramlerr@etown.edu</td>
            </tr>
            <tr>
                <th scope="row" class="number">17</th>
                <td>Ernie Dennison</td>
                <td class="date">2/24/2022</td>
                <td>dennisone@etown.edu</td>
            </tr>
            <tr>
                <th scope="row" class="number">18</th>
                <td>Hannah Steenkamer</td>
                <td class="date">3/16/2022</td>
                <td>steenkamerh@etown.edu</td>
            </tr>
            <tr>
                <th scope="row" class="number">19</th>
                <td>Jordan Figueroa</td>
                <td class="date">8/4/2022</td>
                <td>figueroaj@etown.edu</td>
            </tr>
            <tr>
                <th scope="row" class="number">20</th>
                <td>Christopher Talluto</td>
                <td class="date">8/4/2022</td>
                <td>tallutoc@etown.edu</td>
            </tr>
            <tr>
                <th scope="row" class="number">21</th>
                <td>Blake Samsel</td>
                <td class="date">8/4/2022</td>
                <td>samselb@etown.edu</td>
            </tr>
            <tr>
                <th scope="row" class="number">22</th>
                <td>Matthew Thomas</td>
                <td class="date">8/4/2022</td>
                <td>thomasm5@etown.edu</td>
            </tr>
            <tr>
                <th scope="row" class="number">23</th>
                <td>Nathan Wiser</td>
                <td class="date">8/4/2022</td>
                <td>wisern@etown.edu</td>
            </tr>
            <tr>
                <th scope="row" class="number">24</th>
                <td>Mason Palmer</td>
                <td class="date">8/26/2022</td>
                <td>palmerm2@etown.edu</td>
            </tr>
            <tr>
                <th scope="row" class="number">25</th>
                <td>Christiana Mood</td>
                <td class="date">8/26/2022</td>
                <td>moodc@etown.edu</td>
            </tr>
            <tr>
                <th scope="row" class="number">26</th>
                <td>Victor Witkofsky</td>
                <td class="date">8/26/2022</td>
                <td>witkofskyv@etown.edu</td>
            </tr>
            <tr>
                <th scope="row" class="number">27</th>
                <td>Marissa Tuman</td>
                <td class="date">8/27/2022</td>
                <td>tumanm@etown.edu</td>
            </tr>
            <tr>
                <th scope="row" class="number">28</th>
                <td>Christy Martin</td>
                <td class="date">8/29/2022</td>
                <td>martinc@etown.edu</td>
            </tr>
            <tr>
                <th scope="row" class="number">29</th>
                <td>Jackson Lager</td>
                <td class="date">8/31/2022</td>
                <td>lagerj@etown.edu</td>
            </tr>
            <tr>
                <th scope="row" class="number">30</th>
                <td>Jaden Thomas</td>
                <td class="date">9/1/2022</td>
                <td>thomasj3@etown.edu</td>
            </tr>
            <tr>
                <th scope="row" class="number">31</th>
                <td>Evan Carneal</td>
                <td class="date">9/1/2022</td>
                <td>carneale@etown.edu</td>
            </tr>
        </tbody> 
    </table> -->

    <!-- footer -->
    <footer>
        <p class="copyright">© 2022 Aiden Walmer + Alexander Fox @ CS310 - Elizabethtown College.</p>
    </footer>

</body>

</html>