<?PHP
ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);
require "../includes/database_functions.php";

// // Adding a new user to the database
// if (isset($_POST['loginBtn'])) {
//     $user = $_POST["user"];
//     $pass = $_POST["pass"];

//     $hash = password_hash($pass, PASSWORD_BCRYPT);
//     echo 'password: '.$pass;
//     echo ' hashed password: '.password_hash($pass, PASSWORD_BCRYPT);

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

// New Method) Login!
if (isset($_POST['loginBtn'])) {
    // Grab the user entered username and password
    $user = $_POST["user"];
    $pass = $_POST["pass"];

    // Add a new username and password to the database
    $sql = "SELECT * FROM users WHERE username = :e";
    $params = [":e"=>$user];
    $result = getDataFromSQL($sql, $params);

    if (is_array($result)) {     
        $verify = password_verify($pass, $result);
        if ($verify) {
            echo "Logged In!";
            $_SESSION["LoginStatus"]="YES";
            $_SESSION["userid"]=$result["userid"];
            header("location: membersAdmin.php");
            exit;
        } else {
            echo "Incorrect Username or Password!";
            echo " result: ".$result;
            echo " password: ".$pass;
            $_SESSION["LoginStatus"]="NO";
            $_SESSION["userid"]="";
            // header("location: login.php");
            $error = "Incorrect Username or Password!";
            echo " error: ".$error;
            exit;
        }
    } else {
        echo "User not in database! (Incorrect Username or Password!)";
        echo " result: ".$result;
        echo " password: ".$pass;
    }
}

?>