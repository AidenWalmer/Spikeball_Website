<?PHP
ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);
session_start();
require "includes/database_functions.php";

// // Adding a new user to the database
// if (isset($_POST['loginBtn'])) {
//     $user = $_POST["user"];
//     $pass = $_POST["pass"];

//     $hash = password_hash($pass, PASSWORD_BCRYPT);
//     echo 'password: '.$pass;
//     echo ' hashed password: '.$hash;

//     $sql = "INSERT INTO users (username, password) VALUES (:e, :p)";
//     $params = [":e"=>$user, ":p"=>$hash];
//     $result = getDataFromSQL($sql, $params);

//     $checked = password_verify($pass, $hash);
//     if ($checked) {
//         echo ' New user created!';
//     } else {
//         echo ' Error creating new user!';
//     }
// }

// Secure Login!
if (isset($_POST['loginBtn'])) {
    // Grab the user entered username and password
    $user = $_POST["user"];
    $pass = $_POST["pass"];

    // Add a new username and password to the database
    $sql = "SELECT * FROM users WHERE username = :e";
    $params = [":e"=>$user];
    $result = getDataFromSQL($sql, $params);

    if (is_array($result) && count($result)>0) {     
        $verify = password_verify($pass, $result[0]['password']);
        if ($verify) {
            echo "Logged In!";
            // $_SESSION["userid"]=$result[0]["userid"];
            $_SESSION["LoginStatus"]="YES";
            ?>
            <script>
                window.location.href = "https://spikeball-club.uk.r.appspot.com/membersAdminPage/membersAdmin.php";
            </script>
            <?php
            $_SESSION["error"] = "";
            exit;
        } else {
            // $_SESSION["userid"]="";
            $_SESSION["LoginStatus"]="NO";
            ?>
            <script>
                window.location.href = "https://spikeball-club.uk.r.appspot.com/loginPage/login.php";
            </script>
            <?php
            $_SESSION["error"] = "Incorrect Username or Password!"."<hr id='errorHR'>";
            exit;
        }
    } else {
        $_SESSION["LoginStatus"]="NO";
        ?>
        <script>
            window.location.href = "https://spikeball-club.uk.r.appspot.com/loginPage/login.php";
        </script>
        <?php
        $_SESSION["error"] = "Incorrect Username or Password!"."<hr id='errorHR'>";
    }
}

?>