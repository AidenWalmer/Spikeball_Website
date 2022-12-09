<?php
# Connect to the database in localhost
// $servername = "localhost";
// $username = "root";             # By default
// $password = "";                 # By default
// $database = "spikeballdb";

# Connect to the database in cloud
$servername = getenv('INSTANCE_UNIX_SOCKET'); 
$username = getenv('CLOUDSQL_USER');      
$password = getenv('CLOUDSQL_PASSWORD');  
$database = getenv('CLOUDSQL_DB');      
    
# Make a data source string that will be used in creating the PDO object
if( isset($servername) ) {
    #Connect using UNIX sockets
    $ds = sprintf(
    'mysql:dbname=%s;unix_socket=%s',
    $database,
    $servername
    );
}
?>