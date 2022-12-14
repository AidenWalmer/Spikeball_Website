<?PHP
require "includes/config.php";

function getDataFromSQL($sql,$params=null){
    global $servername,$database,$username,$password,$ds;
    try {
      // $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
      $conn = new PDO($ds, $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //echo "Connected successfully";
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
    
    $stmt = $conn->prepare($sql);
    $stmt->execute($params);
    
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $valuesArray = $stmt->fetchAll();
    return $valuesArray;
    // return $result;
}
?>